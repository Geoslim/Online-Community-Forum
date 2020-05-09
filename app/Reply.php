<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['content', 'user_id', 'discussion_id'];

    public function discussion()
    {
        return $this->belongsTo('App\Discussion');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function user_already_liked()
    {
        $user_id = Auth()->user()->id;

        $likers = array();

        foreach ($this->likes as $like) {
            array_push($likers, $like->user->id);
        }

        if (in_array($user_id, $likers)) {
            return true;
        }else {
            return false;
        }
    }
}


