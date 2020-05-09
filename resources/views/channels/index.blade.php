@extends('layouts.dashboard-master')

@section('content')
               
                <div class="sales-report-area mt-5 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ (isset($channel_edit)) ? route('channels.update' , $channel_edit->id) : route('channels.store') }}" method="POST" >
                                    @csrf
                                    @if(isset($channel_edit))
                                        @method('PUT')
                                    @endif
                                    <div class="row">
                                        <div class="col-xl-10 col-lg-10">
                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Channel Title</label>
                                                <input class="form-control" type="text" name="title" value="{{ (isset($channel_edit))? $channel_edit->title : old('title') }}" id="title">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-2 col-lg-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>      
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div> 

                </div>
               
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Forum Channels</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Channels</th>
                                                    <th scope="col">Discussions</th>
                                                    <th scope="col">Progress</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($channels as $channel)
                                                    
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{ $channel->title }}</td>
                                                    <td>{{ $channel->discussions->count() }}</td>
                                                    <td>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="status-p bg-primary">pending</span></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="{{ route('channels.edit', $channel->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li>
                                                                {{-- <form action="{{ route('channels.destroy', $channel->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a href="{{ route('channels.destroy', $channel->id) }}" class="text-danger" ><i class="ti-trash"></i></a>
                                                                </form> --}}

                                                                <form action="{{ route('channels.destroy', $channel->id) }}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                      <button onclick="return confirm('Deleting Channel. Are you sure?')" type="submit" class="btn btn-sm" style="padding:0; background:transparent;">
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