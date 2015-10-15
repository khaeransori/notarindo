<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPekerjaan extends Model
{
    //
    protected $table = 'jenis_pekerjaan';

    protected $fillable = ['nama_pekerjaan','jenis_akta','jenis_aktor','hapus','id_notaris'];
}
