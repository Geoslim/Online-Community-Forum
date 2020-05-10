<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'user_id', 'channel_id'];

    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function watchers()
    {
        return $this->hasMany('App\Watcher');
    }

    public function user_already_watching()
    {
        $user_id = Auth()->user()->id;

        $watchers = array();

        foreach ($this->watchers as $watcher) {
            array_push($watchers, $watcher->user->id);
        }

        if (in_array($user_id, $watchers)) {
            return true;
        }else {
            return false;
        }
    }

    public function has_best_answer()
    {
        $result = false;

        foreach($this->replies as $reply)
        {
            if ($reply->best_answer) {
                $result = true;
            break;
            }
        }

        return $result;
    }
}
