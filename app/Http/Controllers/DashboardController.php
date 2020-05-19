<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Session;
use Notification;
use App\User;
use App\Discussion;
use App\Channel;
use App\Reply;
use App\Like;
use App\Watcher;

class DashboardController extends Controller
{
    public function index()
    {
        if (Gate::allows('admin-only', auth()->user())) {
        $users = User::where('admin', 0)->get();
        $xp_users = User::where('admin', 0)->orderBy('xp_points', 'desc')->get();
        $channels = Channel::get();
        $discussions = Discussion::get();
        $watchers = Watcher::get();
        $likes = Like::get();
        $replies = Reply::get();

        return view('dashboard.index')
        ->with('users', $users)
        ->with('xp_users', $xp_users)
        ->with('channels', $channels)
        ->with('discussions', $discussions)
        ->with('watchers', $watchers)
        ->with('likes', $likes)
        ->with('replies', $replies);

        Session()->flash('success','Welcome Back');
    }
    Session()->flash('success','Welcome Back');
    return redirect()->action('DashboardController@user');

    }

    public function user()
    {
        $channels = Channel::get();
        $user= User::where('id', Auth()->user()->id)->first();
        $my_discussions = Discussion::where('user_id', Auth()->user()->id)->get();
        $my_replies = Reply::where('user_id', Auth()->user()->id)->get();
        $watching = Watcher::where('user_id', Auth()->user()->id)->get();
        $my_likes = Like::where('user_id', Auth()->user()->id)->get();

        return view('dashboard.user')
       
        ->with('user', $user)
        ->with('my_likes', $my_likes)
        ->with('channels', $channels)
        ->with('my_replies', $my_replies)
        ->with('watching', $watching)
        ->with('my_discussions', $my_discussions);
    }
}
