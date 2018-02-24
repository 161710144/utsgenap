<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemains';
    protected $fillable = ['nama','nik','umur','alamat'];
    public $timestamps = true;
}
