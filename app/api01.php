<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class api01 extends Model
{
     protected $fillable = [
        "descricao","peso","cor","preco"
    ];
}
