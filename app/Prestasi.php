<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasis';
    protected $fillable = ['piala','juara','tahun'];
    public $timestamps = true;
}
