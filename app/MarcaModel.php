<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaModel extends Model
{
    protected $fillable = ['nome'];
    protected $guarded = ['idmarca', 'datacad'];
}
