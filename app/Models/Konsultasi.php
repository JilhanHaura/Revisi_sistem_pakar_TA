<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'konsultasis';
    protected $fillable=['user_id','nama','tanggal_konsultasi','hasil_skrinning','cf_max','pernyataan_terpilih'];
    // protected $fillable=['tanggal_konsultasi','hasil_skrinning','cf_max','pertanyaan_terpilih'];


    public function rule_gejala(){
        return $this->belongsToMany(Rule::class)->withPivot('nilai_cf');
    }
    public function rule_pernyataan(){
        return $this->belongsToMany(Rule::class)->withPivot('nilai_cf');
    }
    public function user()
    {
    return $this->belongsTo(User::class,'user_id','nik','id');
    }


}
