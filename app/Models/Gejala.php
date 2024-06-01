<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory,HasUuids;
    protected $primaryKey = 'kode_gejala';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable=['kode_gejala','nama_gejala'];
}