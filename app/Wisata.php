<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisatas';
    protected $fillable = ['judul','tempat','wilayah','provinsi','pengunjung','cuaca'];
    public $timestamps = true;
}
