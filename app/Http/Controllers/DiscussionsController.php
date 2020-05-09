<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use App\Discussion;
use App\Channel;

class DiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::get();
        $discussions = Discussion::get();

        return view('discussions.index')
        ->with('channels', $channels)
        ->with('discussions', $discussions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'channel_id' => 'required|',
            'content' => 'required|min:5',

        ]);
            // dd(Auth()->user()->id);
            $slug = Str::slug($request->title, '-');

        Discussion::create([
            'title' => $request->title,
            'channel_id' => $request->channel_id,
            'content' => $request->content,
            'slug' => $slug,
            'user_id' => Auth()->user()->id,
        ]);

        

        Session()->flash('success', 'Discussion Created Successfully');

        return redirect()->route('discussions.show', $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();
        return view('discussions.show')
        ->with('discussion', $discussion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $channels = Channel::get();
        $discussions = Discussion::get();
        $discussion_edit = Discussion::findOrFail($id);

        return view('discussions.index')
        ->with('channels', $channels)
        ->with('discussions', $discussions)
        ->with('discussion_edit', $discussion_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|min:5',
            'channel_id' => 'required|',
            'content' => 'required|min:5',

        ]);
            // dd(Auth()->user()->id);
            $slug = Str::slug($request->title, '-');

        Discussion::where('id', $id)
        ->update([
            'title' => $request->title,
            'channel_id' => $request->channel_id,
            'content' => $request->content,
            'slug' => $slug,
            'user_id' => Auth()->user()->id,
        ]);

        Session()->flash('success', 'Discussion Updated Successfully');

        return back();
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discussion = Discussion::findOrFail($id);
        $discussion->delete();

        Session()->flash('success', 'Discussion Deleted Successfully');
         return redirect()->route('discussions.index');
    }
}
