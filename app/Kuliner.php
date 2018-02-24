<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $table = 'kuliners';
    protected $fillable = ['judul','nama_resto','makanan','harga','alamat'];
    public $timestamps = true;
}
