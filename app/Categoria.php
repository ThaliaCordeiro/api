<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        "descricao"
    ];
	public function Api01()
    {
         return  $this->hasMany('App\api01');
    }
}
