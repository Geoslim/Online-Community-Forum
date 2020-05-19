@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
       
        <!-- channels area start -->
        <div class="col-lg-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Channels</h4>
                    <ul class="list-group">
                        @foreach ($channels as $channel)
                        <a href="{{ route('channel.show', $channel->slug) }}">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $channel->title }}
                                <span class="badge badge-primary badge-pill"> {{ $channel->discussions->count() }}</span>
                            </li>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- channels area end -->

        <!-- discussions area start -->
        <div class="col-lg-9 mt-5">

            @foreach ($discussions as $discussion)
                <div class="card mb-5">
                    <div class="card-header bg-white">
                        <div class="row">
                            <h4 class="header-title col-md-10">{{ $discussion->title }} | <small>{{ $discussion->channel->title }}</small></h4>
                            <a href="{{ route('forum.show', $discussion->slug) }}" class="btn btn-xs btn-flat btn-dark col-md-1">View</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <p class="card-text pl-3 pt-1"">
                            {{ Str::limit($discussion->content, 70) }}
                            
                        </p>
                       <hr/>
                       <small class="float-right pr-1 pb-1"><em><img class="avatar user-thumb" src="{{ asset('dashboard-assets/images/author/'.$discussion->user->avatar)}}" alt="avatar">
                        {{ $discussion->user->name }} ({{ $discussion->user->xp_points }} Xps) . - {{ $discussion->created_at->diffForHumans() }}</em></small>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <span class="badge badge-light">Replies: {{ $discussion->replies->count() }} </span>
                            
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $discussions->links() }}
        </div>
        <!-- discussions area end -->
     
     
    </div>
</div>
  
@endsection