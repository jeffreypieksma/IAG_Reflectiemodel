<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reflection extends Model
{

    protected $fillable = ['title', 'message','tags','user_id'];
  
    public function feedback()
    {
        return $this->hasMany('App\Feedback')->orderBy('created_at', 'desc');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
