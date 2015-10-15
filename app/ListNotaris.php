<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListNotaris extends Model
{
    //
    protected $table = 'list_notaris';

    protected $fillable = ['nama_notaris','status','registered','expired'];
}
