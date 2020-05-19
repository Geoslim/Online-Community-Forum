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

                       
                            <div class="card mb-5">
                                <div class="card-header bg-white">
                                    <div class="row">
                                        <h4 class="header-title col-md-10">{{ $discussion->title }} | <small>{{ $discussion->channel->title }}</small></h4>
                                        @guest
                                            <a href="{{ route('login') }}" class="btn btn-xs btn-flat btn-dark col-md-2"><i class="ti-eye"></i> Watch</a>
                                        @else
                                            @if ($discussion->user_already_watching())
                                            <a href="{{ route('discussion.unwatch', $discussion->id)  }}" class="btn btn-xs btn-flat btn-dark col-md-2">
                                                <i class="ti-eye"></i> Unwatch <span class="badge badge-light">{{ $discussion->watchers->count() }}</span>
                                            </a>
                                                
                                            @else
                                            <a href="{{ route('discussion.watch', $discussion->id)  }}" class="btn btn-xs btn-flat btn-dark col-md-2">
                                                <i class="ti-eye"></i> Watch <span class="badge badge-light">{{ $discussion->watchers->count() }}</span>
                                            </a>
                                                
                                            @endif
                                        @endguest
                                        
                                    </div>
                                
                                </div>
                                <div class="card-body p-0">
                                    <p class="card-text pl-3 pt-1">
                                        {{ $discussion->content }} 
                                    </p>
                                    
                                    @if ($best_answer)
                                        <div class="card bg-success ">
                                            <div class="card-header p-1" >
                                                <div class="row ">
                                                    <p class="col-md-10 text-white ">
                                                        <img class="avatar user-thumb" src="{{ asset('dashboard-assets/images/author/'.$best_answer->user->avatar)}}" alt="avatar">
                                                        {{ $best_answer->user->name }} ({{ $best_answer->user->xp_points }} Xps) | <em>{{ $best_answer->created_at->diffForHumans() }}</em></p> 
                                                    <span class="text-white"><i class="ti-check"></i> Marked as best answer</span>  
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <p class="card-text text-white pl-3 pt-1">
                                                    <em>{{ $best_answer->content }} </em>
                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    @endif
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

                            @foreach ($discussion->replies as $reply)
                            <div class="card mb-1">
                                <div class="card-header bg-white p-1">
                                    <div class="row">
                                        
                                        <p class="col-md-9">   <img class="avatar user-thumb" src="{{ asset('dashboard-assets/images/author/'.$reply->user->avatar)}}" alt="avatar">
                                            {{ $reply->user->name }} ({{ $reply->user->xp_points }} Xps)| <em>{{ $reply->created_at->diffForHumans() }}</em></p> 
                                        @guest
                                            @if ($reply->best_answer == 0)
                                                 

                                            @else
                                                <span ><i class="ti-check"></i> Marked as best answer</span>      
                                            @endif
                                        @else
                                            @if ($discussion->user->id == Auth()->user()->id)
                                                @if ($reply->best_answer == 0)
                                                    <a href="{{ route('reply.best', $reply->id) }}" class="btn btn-xs btn-flat btn-dark col-md-2"><i class="ti-check"></i> Mark as best answer</a>      

                                                @else
                                                    <a href="{{ route('reply.unbest', $reply->id) }}" class="btn btn-xs btn-flat btn-success col-md-2"><i class="ti-check"></i> Marked as best answer</a>      
                                                @endif
                                            @endif
                                        @endguest


                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p class="card-text pl-3 pt-1">
                                        {{ $reply->content }} 
                                    </p>
                                   
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <span class="col-md-2">
                                            @guest
                                                <span class="badge badge-light">{{ $reply->likes->count() }} {{ ($reply->likes->count() == 1)? 'Like' : 'Likes' }}</span>
                                            @else
                                                @if ($reply->user_already_liked())
                                                    <a href="{{ route('reply.unlike', $reply->id) }}" class="btn"><i class="fa fa-heart fa-2x"></i></a>
                                                    <span class="badge badge-light">{{ $reply->likes->count() }} {{ ($reply->likes->count() == 1)? 'Like' : 'Likes' }}</span>
                                                @else
                                                    <a href="{{ route('reply.like', $reply->id) }}" class="btn"><i class="fa fa-heart-o fa-2x"></i></a>
                                                    <span class="badge badge-light">{{ $reply->likes->count() }} {{ ($reply->likes->count() == 1)? 'Like' : 'Likes' }}</span>
                                                @endif
                                            @endguest

                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="card mb-1 mt-5">
                                @if ($discussion->has_best_answer())
                                    <span class="col-md-12 text-lg-center p-5">Discussion has been closed by Author.</span>
                                @else
                                    <div class="card-header bg-white"> 
                                        <p class="">Leave a comment</p>       
                                    </div>
                                    <div class="card-body">
                                        @if (Auth()->check())
                                        <form action="{{ route('discussion.reply') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="discussion_id" value="{{ $discussion->id}}">
                                            <div class="form-group">
                                                <label for="comment" class="col-form-label">Comment</label>
                                                <textarea  id="comment" class="form-control" name="comment"></textarea>
                                            </div>
    
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>   
                                            </div>
                                        </form>
                                        @else
                                        <p class=""><a href="{{ route('login') }}">Sign In </a>to leave a Comment</p>       
                                        @endif
                                    
                                    
                                    </div>
                                @endif
                               
                            </div>
                    </div>
                    <!-- discussions area end -->
                 
                 
                </div>
            </div>
            
        <@endsection