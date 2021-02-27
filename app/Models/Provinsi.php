<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = "provinsis";
    protected $fillable = ['id', 'kode_provinsi','nama_provinsi'];
    
    public $timestamps = true;

    public function kota(){
        return $this->hasMany(Kota::class);
    }
}
