<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('body', 'image', 'user_id','title','desc');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
