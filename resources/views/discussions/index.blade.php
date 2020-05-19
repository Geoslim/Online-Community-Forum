@extends('layouts.dashboard-master')

@section('content')
               
                <div class="sales-report-area mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ (isset($discussion_edit)) ? route('discussions.update' , $discussion_edit->id) : route('discussions.store') }}" method="POST" >
                                    @csrf
                                    @if(isset($discussion_edit))
                                        @method('PUT')
                                    @endif
                                    <div class="row">
                                        <span class="col-xl-1 col-lg-1"></span>
                                        <div class="col-xl-10 col-lg-10">
                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Discussion Title</label>
                                                <input class="form-control" type="text" name="title" value="{{ (isset($discussion_edit))? $discussion_edit->title : old('title') }}" id="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="channel" class="col-form-label">Select a Channel</label>
                                                <select  id="content" class="form-control" name="channel_id">
                                                    @foreach ($channels as $channel)
                                                        <option value="{{ $channel->id }}" {{ (isset($discussion_edit) && $discussion_edit->channel_id == $channel->id) ? 'selected' : '' }}>{{ $channel->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="content" class="col-form-label">Ask Your Question (Discussion)</label>
                                                <textarea  id="content" class="form-control" name="content">{{ (isset($discussion_edit))? $discussion_edit->content : old('title') }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>   
                                            </div>
                                        </div>
                                        <span class="col-xl-1 col-lg-1"></span>
                                        
                                    </div>
                                </form>
                            </div>
                    </div> 

                </div>
               
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Forum Discussions</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Question</th>
                                                    <th scope="col">Channel</th>
                                                    <th scope="col">Replies</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($discussions as $discussion)
                                                    
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{ $discussion->title }}</td>
                                                    <td>{{ $discussion->content }}</td>
                                                    <td>{{ $discussion->channel->title }} </td>
                                                    <td>{{ $discussion->replies->count() }}</td>
                                                    <td><span class="status-p bg-primary">pending</span></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="{{ route('discussions.show', $discussion->slug) }}" class="text-info"><i class="fa fa-eye"></i></a></li>
                                                            <li class="mr-3"><a href="{{ route('discussions.edit', $discussion->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li>
                                                            
                                                                <form action="{{ route('discussions.destroy', $discussion->id) }}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                      <button onclick="return confirm('Deleting discussion. Are you sure?')" type="submit" class="btn btn-sm" style="padding:0; background:transparent;">
                                                                        <i  class="ti-trash text-danger"></i>
                                                                      </button>
                                                  
                                                                  </form> 
                                                            </li>
                                                            
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- overview area end -->
          
            @endsection