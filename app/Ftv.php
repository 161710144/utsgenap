<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftv extends Model
{
    protected $table = 'ftvs';
    protected $fillable = ['judul','rilis','tempat','artis','watak'];
    public $timestamps = false;
}
