<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bakat extends Model
{
    protected $table = 'bakats';
    protected $fillable = ['judul','peserta','bakat','tayang','voting'];
    public $timestamps = true;
}
