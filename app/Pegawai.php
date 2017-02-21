<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawais';
    protected $fillable = ['nip','user_id', 'jabatan_id', 'golongan_id', 'poto'];
    protected $visible = ['nip','user_id', 'jabatan_id', 'golongan_id', 'poto'];
    public $timestamps = true;


    public function User(){
    	return $this->belongsTo('App\User', 'user_id');
    }
    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'golongan_id');
    }
    public function Lembur_pegawai(){
        return $this->hasMany('App\Lembur_pegawai', 'pegawai_id');
    }
    public function Tunjangan_pegawai(){
        return $this->hasOne('App\Tunjangan_pegawai', 'pegawai_id');
    }
}
