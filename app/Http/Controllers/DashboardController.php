<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    }
}
