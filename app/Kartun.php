<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartun extends Model
{
    protected $table = 'kartuns';
    protected $fillable = ['judul','channel','tokoh','watak','singkat_cerita'];
    public $timestamps = true;
}
