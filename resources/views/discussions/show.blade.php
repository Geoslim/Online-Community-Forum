
@extends('layouts.dashboard-master')

@section('content')
               
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ $discussion->title }} | <small>{{ $discussion->channel->title }}</small></h4> 
                        <em class="header-title"><small>{{ $discussion->content }}</small></em> 
                        
                        
                    </div>
                </div>
            </div>
            
        </div>   

   
    </div>
        
    @foreach ($discussion->replies as $reply)
    <div class="card mb-1">
        <div class="card-header bg-white p-1">
            <div class="row">
                
                <p class="col-md-9">   <img class="avatar user-thumb" src="{{ asset('dashboard-assets/images/author/'.$reply->user->avatar)}}" alt="avatar">
                    {{ $reply->user->name }} ({{ $reply->user->xp_points }} Xps) | <em>{{ $reply->created_at->diffForHumans() }}</em></p> 
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
            
@endsection