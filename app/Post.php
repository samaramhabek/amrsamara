<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'imge_name',
        'description',
        'address',
         'user_id',
        
       // 'category_id'
    ];
}
    function user()

    {
    
        return $this->belongsto('App\User');
    }