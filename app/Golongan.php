<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'golongans';
    protected $fillable = ['kode_golongan', 'nama_golongan', 'besaran_uang'];
    protected $visible = ['kode_golongan', 'nama_golongan', 'besaran_uang'];
    public $timestamps = true;

    public function kategori(){
    	return $this->hasMany('App\kategori', 'golongan_id');
    }
    public function Pegawai(){
        return $this->hasMany('App\Pegawai', 'golongan_id');
    }
    public function Tunjangans(){
        return $this->hasMany('App\Tunjangans', 'golongan_id');
    }
}
