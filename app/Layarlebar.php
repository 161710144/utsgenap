<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layarlebar extends Model
{
    protected $table = 'layarlebars';
    protected $fillable = ['judul','rilis','produksi','sutradara','rating'];
    public $timestamps = true;
}
