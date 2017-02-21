<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur_pegawai extends Model
{
    //
    protected $table = 'lembur_pegawais';
    protected $fillable = ['kode_lembur_id', 'pegawai_id', 'jumlah_jam'];
    protected $visible = ['kode_lembur_id', 'pegawai_id', 'jumlah_jam'];

    public function kategori(){
    	return $this->belongsto('App\kategori', 'Kode_lembur_id');
    }
    public function Pegawai(){
    	return $this->belongsto('App\Pegawai', 'pegawai_id');
    }
}
