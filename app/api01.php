<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class api01 extends Model
{
     protected $fillable = [
        'descricao','peso','cor','preco','categoria_id'
    ];
    public function categoria()
    {
         return  $this->belongsto('App\Categoria');     
    }
}