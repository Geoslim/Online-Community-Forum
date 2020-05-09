<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use App\Discussion;
use App\Channel;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::get();
        // $discussion = Discussion::get();
        return view('channels.index')->with('channels', $channels);
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
            
        ]);

        Channel::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-')
        ]);

        Session()->flash('success', 'Channel Created Successfully');

        return redirect()->route('channels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $channel_edit = Channel::findOrFail($id);
        return view('channels.index')
        ->with('channels', $channels)
        ->with('channel_edit', $channel_edit);
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
        ]);
        
        Channel::where('id', $id)
        ->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-')
        ]);

        Session()->flash('success', 'Channel Updated Successfully');

        return redirect()->route('channels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = Channel::findOrFail($id);
        $channel->delete();

        Session()->flash('success', 'Channel Deleted Successfully');
         return redirect()->route('channels.index');
    }
}
