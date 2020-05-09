<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Notification;
use App\Discussion;
use App\Channel;
use App\Reply;
use App\Like;
use App\User;

class ForumController extends Controller
{
    public function index()
    {
        $channels = Channel::get();

        $discussions = Discussion::orderBy('created_at','desc')->paginate(3);
        $replies = Reply::get();
        return view('forum.index')
        ->with('channels', $channels)
        ->with('discussions', $discussions)
        ->with('replies', $replies);
    }

    public function show_discussion($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();
        $best_answer =  $discussion->replies()->where('best_answer', 1)->first();
        return view('forum.show')
        ->with('discussion', $discussion)
        ->with('best_answer', $best_answer);
    }

    public function channel($slug)
    {
        $channels_disc = Channel::where('slug', $slug)->first();
        $channels = Channel::get();
        return view('forum.channel')
        ->with('channels_disc', $channels_disc)
        ->with('channels', $channels);
    }


    public function reply(Request $request)
    {
        $discussion = Discussion::findOrFail($request->discussion_id);
        

        $reply = Reply::create([
                    'discussion_id' => $request->discussion_id,
                    'content' => $request->comment,
                    'user_id' => Auth()->user()->id,
                ]);

        $reply->user->xp_points += 20;
        $reply->user->save();


        $watchers = array();

        foreach ($discussion->watchers as $watcher) {
            array_push($watchers, User::findOrFail($watcher->user->id));
        }
        
        Notification::send($watchers, new \App\Notifications\NewReplyAdded($discussion));

        Session()->flash('success', 'Reply submitted Successfully');

        return back();
    }

    public function like($id)
    {
        $like = Like::create([
                'reply_id' => $id,
                'user_id' => Auth()->user()->id,

            ]);

        
        $like->reply->user->xp_points += 15;
        $like->reply->user->save();

        Session()->flash('success', 'Reply Liked');

        return back();
    }

    public function unlike($id)
    {
       $like = Like::where('reply_id', $id)->where('user_id', Auth()->user()->id)->first();

        $like->reply->user->xp_points -= 15;
        $like->reply->user->save();

        $like->delete();

        Session()->flash('success', 'Reply Unliked');
        return back();
    }

    public function best_answer($id)
    {
        $mark_as_best_answer = Reply::findOrFail( $id);
        $mark_as_best_answer->best_answer = 1;
        $mark_as_best_answer->save();

        // OR
        
        // Reply::where('id', $id)
        // ->update([
        //     'best_answer' => 1,
        // ]);

       $mark_as_best_answer->user->xp_points += 50;
       $mark_as_best_answer->user->save();

        Session()->flash('success', 'Reply marked as best answer');
        return back();

    }

    public function remove_best_answer($id)
    {
        $unmark_as_best_answer = Reply::findOrFail($id);
        $unmark_as_best_answer->best_answer = 0;
        $unmark_as_best_answer->save();

        // OR
        
        // Reply::where('id', $id)
        // ->update([
        //     'best_answer' => 0,
        // ]);
        $unmark_as_best_answer->user->xp_points -= 50;
        $unmark_as_best_answer->user->save();
       
        Session()->flash('success', 'Reply unmarked as best answer');
        return back();

    }
}
