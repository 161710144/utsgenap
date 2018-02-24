<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinetron extends Model
{
    protected $table = 'sinetrons';
    protected $fillable = ['judul','tema','pemeran_utama','durasi','jumlah_episode'];
    public $timestamps = true;
}
