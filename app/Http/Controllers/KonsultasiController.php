<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Http\Requests\StoreKonsultasiRequest;
use App\Http\Requests\UpdateKonsultasiRequest;
use App\Models\Auth;
use App\Models\Pernyataan;
use App\Models\Rule;
use Illuminate\Support\Arr;
use Carbon\Carbon;
class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dataDiri = Konsultasi::all();
        $pernyataan = Pernyataan::with('basis_rule')->get();
        // dd($pernyataan);
        return view('user.konsultasi.form', compact('pernyataan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.konsultasi.form',[
            'konsultasi'=>Konsultasi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKonsultasiRequest $request)
    {
        $validateData = $request->validate([
            'user_id'=>'required',
            'nama'=>'required',
            'tanggal_konsultasi' => 'required',
            'skrinning'=>'required|array',
        ]);
        // $lastConsultation = Konsultasi::where('user_id', $request->user_id)
        // ->orderBy('created_at', 'desc')
        // ->first();

        // if ($lastConsultation) {
        //     $waktuTerakhir = Carbon::parse($lastConsultation->created_at);
        //     $sekarang = Carbon::now();
        //     $selisihHari = $sekarang->diffInDays($waktuTerakhir);
        //     $hariYangTersisa = 7 - $selisihHari;
        //     $errorMessage = 'Anda hanya dapat melakukan konsultasi kembali setelah ' . $hariYangTersisa . ' hari.';
        //     if ($selisihHari < 7) {
        //     return redirect()->back()->with('error', $errorMessage);
        //     }
        // }

            $skrinnings = array_filter($request->get('skrinning'));
            $skrinnings= array_map(fn($value)=>['id'=>explode('_',$value)[0],'value'=>explode('_',$value)[1]],$skrinnings);

            $rules=Rule::whereIn('pernyataan_id',array_map(fn($value)=>$value['id'],$skrinnings))->get();
            // dd($rules);
            $output=[];
            $input=[];
            $inputpernyataan = [];
            foreach($rules as $rule){
                // dd($validateData);
                if (!in_array($rule->data_pernyataan->kode_pernyataan, $inputpernyataan)) {
                    $inputpernyataan[] = $rule->data_pernyataan->pernyataan_id;
                // dd($inputpernyataan);
                // dd(Arr::first($skrinnings,fn($v)=>$v['id']==$rule->data_pernyataan->id)['value']);
                $cf_user=Arr::first($skrinnings,fn($v)=>$v['id']==$rule->data_pernyataan->id)['value'];
                               $output[$rule->data_gejala->kode_gejala]['combine'][]=[
                    'pernyataan'=> $rule->data_pernyataan,
                    'gejala'=>$rule->data_gejala,
                    'input'=> $cf_user,
                    'expert'=>$rule->nilai_cf,
                    'hasil'=>floatval($cf_user)*floatval($rule->nilai_cf),

                ];
                $label='';
                switch($cf_user){
                    case '0':
                        $label='tidak pernah';
                        break;
                    case '1':
                        $label='jarang';
                        break;
                    case '2':
                        $label='kadang-kadang';
                        break;
                    case '3':
                        $label='sering';
                        break;
                }
                if (!in_array($rule->data_pernyataan->kode_pernyataan . ' - ' . $rule->data_pernyataan->pernyataan, array_column($input, 'pernyataan'))) {
                $input[]=[
                    'pernyataan'=>$rule->data_pernyataan->kode_pernyataan.' - '.$rule->data_pernyataan->pernyataan,
                    'label'=>$label,
                    'hasil'=>$cf_user
                ];
            }
        }

    }
    // dd($input);
            foreach ($output as $key => $value) {
                $combine1 = isset($output[$key]['combine'][0]) ? $output[$key]['combine'][0]['hasil'] : 0;
                $combine2 = isset($output[$key]['combine'][1]) ? $output[$key]['combine'][1]['hasil'] : 0;
                $n = $combine1 + $combine2 * (1 - $combine2);

                // Loop over $output[$key]['combine'] starting from index 2
                for ($j = 2; $j < count($output[$key]['combine']); $j++) {
                    $combine1 = $n;
                    $combine2 = isset($output[$key]['combine'][$j]['hasil']) ? $output[$key]['combine'][$j]['hasil'] : 0;
                    $n=$n+$combine2*(1-$combine2);
                 }
                $output[$key]['hasil'] = $n;
                // dd($output);
            }
            $output=array_values(Arr::sortDesc($output,fn($value)=>$value['hasil']));
            // $input=array_values(Arr::sort($input,fn($v)=>$v['id']==$rule->data_pernyataan->id)['value']);
            // dd(array_values(Arr::sort($input,fn($v)=>$v['id']==$rule->data_pernyataan->id)['hasil']));
            $result=[
                'data'=>Arr::except($validateData,'skrinning'),
                'output'=>$output,
                'input'=>$input
            ];
            $hasilSkrinning = $output[0]['combine'][0]['gejala']['nama_gejala'];
            if ($output[0]['hasil'] == 0) {
                $hasilSkrinning = 'Normal';
            }
            $payload=[
                ...$result['data'],
                'hasil_skrinning'=> $hasilSkrinning,
                'cf_max'=>$output[0]['hasil'],
                'pernyataan_terpilih'=>Arr::join(array_map(fn($v)=>$v['data_pernyataan']['pernyataan'],$rules->toArray()),', ')

            ];
    // dd($output);
            $konsultasi = Konsultasi::create($payload);
            session()->flash('result', $result);
            return redirect()->route('user/konsultasi/note', $konsultasi->id);
            // Konsultasi::create($payload);
            // return view('User.konsultasi.result',compact('result'));
    }
    public function result($id)
    {
    // Retrieve the result data from session
    $result = session('result');
    // dd($result);
    if (!$result) {
        return redirect()->route('user/konsultasi');
    }
    return view('User/konsultasi/note', compact('result'));
    }
}