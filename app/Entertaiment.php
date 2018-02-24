<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertaiment extends Model
{
    protected $table = 'entertaiments';
    protected $fillable = ['judul','host','selebriti','kabar','riwayat'];
    public $timestamps = true;
}
