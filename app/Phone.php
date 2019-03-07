<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable =[
        'numero','user_id'
    ];
    public function User()
    {
         return  $this->belongsto('App\User');     
    }
}
