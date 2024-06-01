<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $primaryKey = 'rule';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded=[];
    protected $fillable=['rule','gejala_id','pernyataan_id','nilai_mb','nilai_md','nilai_cf'];
    public function data_gejala(){
        return $this->belongsTo(Gejala::class,'gejala_id','kode_gejala');
    }
      public function data_pernyataan()
    {
        return $this->belongsTo(Pernyataan::class, 'pernyataan_id','kode_pernyataan'); // assuming 'pernyataan_id' is the foreign key
    }
}