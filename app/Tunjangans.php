<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangans extends Model
{
    //
    protected $table = 'tunjangans';
    protected $fillable = ['kode_tunjangan', 'jabatan_id', 'golongan_id', 'status', 'jumlah_anak', 'besaran_uang'];
    protected $visible = ['kode_tunjangan', 'jabatan_id', 'golongan_id', 'status', 'jumlah_anak', 'besaran_uang'];
    public $timestamps = true;


    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'golongan_id');
    }
    public function Tunjangan_pegawai(){
        return $this->hasMany('App\Tunjangan_pegawai', 'Kode_tunjangan_id'); 
    }
}
