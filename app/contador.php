<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contador extends Model
{
    use SoftDeletes;
    protected $table    = 'contador';
    protected $fillable = ['id', 'ip', 'fecha'];
    protected $dates    = ['deleted_at'];
}
