<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pernyataan extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_pernyataan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable=['kode_pernyataan','pernyataan'];

    public function basis_rule(){
        return $this->hasOne(Rule::class,'pernyataan_id','rule');
    }

    public function getIdAttribute(){
        return $this->attributes['kode_pernyataan'];
    }
}