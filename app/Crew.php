<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $table = 'crews';
    protected $fillable = ['channel','nama','jabatan','jenis_kelamin','program'];
    public $timestamps = true;
}
