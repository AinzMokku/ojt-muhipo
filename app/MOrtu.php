<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MOrtu extends Model
{
    //
    protected $table = "orangtua";
    public $timestamps = false;
    protected $guarded = ['id'];
}
