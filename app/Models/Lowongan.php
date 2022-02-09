<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $fillable = [
        'id', 'posisi','persyaratan','batas_akhir','status','lokasi'
    ];
}
