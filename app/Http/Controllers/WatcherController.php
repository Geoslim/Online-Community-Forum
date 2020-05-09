<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watcher;

class WatcherController extends Controller
{
    public function watch($id)
    {
        Watcher::create([
            'discussion_id' => $id,
            'user_id' => Auth()->user()->id
        ]);
        
        Session()->flash('success', 'You are now watching this Discussion');
        return back();
    }

    public function unwatch($id)
    {
        $watcher = Watcher::where('discussion_id', $id)->where('user_id', Auth()->user()->id)->first();
        $watcher->delete();
        
        Session()->flash('success', 'You have stopped watching this Discussion');
        return back();
    }
}
