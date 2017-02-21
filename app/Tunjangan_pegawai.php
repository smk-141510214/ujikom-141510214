<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan_pegawai extends Model
{
    //
    protected $table = 'tunjangan_pegawais';
    protected $fillable = ['kode_tunjangan_id', 'pegawai_id'];
    protected $visible = ['kode_tunjangan_id', 'pegawai_id'];
    public $timestamps = true;

    public function Tunjangans(){
    	return $this->belongsTo('App\Tunjangans', 'kode_tunjangan_id');
    }
    public function Pegawai(){
    	return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
