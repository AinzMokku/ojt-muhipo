<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSekolah extends Model
{
    //
    protected $table = "asal_sekolah";
    public $timestamps = false;
    protected $guarded = ['id_sekolah'];
}
