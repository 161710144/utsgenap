<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'managements';
    protected $fillable = ['nama','umur','alamat'];
    public $timestamps = true;
}
