<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    protected $table = "articels";
    protected $fillable = ['title','content'];
}
