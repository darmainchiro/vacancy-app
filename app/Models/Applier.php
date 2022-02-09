<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applier extends Model
{
    protected $table = 'applier';
    protected $fillable = ['nama','posisi','tmpt_lhr','tgl_lhr','gender','status','email','agama','no_telp','alamat','kode_pos','name_pend','jenjang','jurusan','thn_ijazah','cv','lokasi',];  

}
