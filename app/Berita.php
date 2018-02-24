<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $fillable = ['judul','host','berita_baru','berita_hangat','sumber'];
    public $timestamps = true;
}
