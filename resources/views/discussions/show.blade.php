
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
    
  
          
@endsection