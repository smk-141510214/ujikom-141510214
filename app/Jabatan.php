<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table = 'jabatans';
    protected $fillable = ['kode_jabatan', 'nama_jabatan', 'besaran_uang'];
    protected $visible = ['kode_jabatan', 'nama_jabatan', 'besaran_uang'];
    public $timestamps = true;

    public function kategori(){
    	return $this->hasMany('App\kategori', 'jabatan_id');
    }
    public function Pegawai(){
        return $this->hasMany('App\Pegawai', 'jabatan_id');
    }
    public function Tunjangans(){
        return $this->hasMany('App\Tunjangans', 'jabatan_id');
    }
}
