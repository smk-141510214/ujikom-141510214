<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $table = 'kategori_lemburs';
    protected $fillable = ['kode_lembur', 'jabatan_id', 'golongan_id', 'besaran_uang'];
    protected $visible = ['kode_lembur', 'jabatan_id', 'golongan_id', 'besaran_uang'];
    public $timestamps = true;

    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'golongan_id');
    }
}
