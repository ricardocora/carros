<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarroModel extends Model
{
    protected $fillable = ['nome','ano','idmarca'];
    protected $guarded = ['id', 'datacad'];
}
