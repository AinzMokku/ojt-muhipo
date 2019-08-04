<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSiswa extends Model
{
    //
    protected $table = "siswa";
    public $timestamps = false;
    protected $guarded = ['id'];
}
