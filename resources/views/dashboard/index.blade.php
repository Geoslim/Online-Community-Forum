@extends('layouts.dashboard-master')

@section('content')
                <!--  report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Members</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($users) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-rss"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Channels</h4>
                                        {{-- <p></p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($channels) }}</h2>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-comment"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Discussions</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($discussions) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Watchers</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($watchers) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Likes</h4>
                                        {{-- <p></p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($likes) }}</h2>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-comments"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Replies</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($replies) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--  report area end -->
                <!-- overview area start -->
                {{-- <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Overview</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Coin Distribution</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Top Experienced Members</h4>
                                  
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        <table class="dbkit-table">
                                            <tr class="heading-td">
                                                <td class="buy">Points</td>
                                                <td class="mv-icon">Avatar</td>
                                                <td class="coin-name">Name</td>
                                               
                                               
                                            </tr>
                                            @foreach ($xp_users as $xp_user)
                                                <tr>
                                                    
                                                    <td class="attachments">{{ $xp_user->xp_points }}</td>
                                                    <td class="mv-icon"><img src="{{ asset('dashboard-assets/images/author/'.$xp_user->avatar)}}" alt="icon"></td>
                                                    <td class="coin-name">{{ $xp_user->name }}</td>
                                                
                                                </tr>
                                            @endforeach
                                          
                                            <tr>
                                                <td class="mv-icon">
                                                    <div class="mv-icon"><img src="dashboard-assets/images/icon/market-value/icon4.png" alt="icon"></div>
                                                </td>
                                                <td class="coin-name">Bitcoindash</td>
                                                <td class="buy">30% <img src="dashboard-assets/images/icon/market-value/triangle-down.png" alt="icon"></td>
                                                <td class="sell">20% <img src="dashboard-assets/images/icon/market-value/triangle-up.png" alt="icon"></td>
                                                <td class="trends"><img src="dashboard-assets/images/icon/market-value/trends-up-icon.png" alt="icon"></td>
                                                <td class="attachments">$ 56746,857</td>
                                                <td class="stats-chart">
                                                    <canvas id="mvaluechart4"></canvas>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- market value area end -->
             
                <div class="row mt-5">
                    <!-- latest news area start -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Latest News</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="dashboard-assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="dashboard-assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest news area end -->
                    <!-- exchange area start -->
                    <div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Exchange</h4>
                                <div class="exhcange-rate mt-5">
                                    <form action="#">
                                        <div class="input-form">
                                            <input type="text" value="0.76834">
                                            <span>BTC</span>
                                        </div>
                                        <div class="exchange-devider">To</div>
                                        <div class="input-form">
                                            <input type="text" value="5689.846">
                                            <span>USD</span>
                                        </div>
                                        <div class="exchange-btn">
                                            <button type="submit">Exchange Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- exchange area end -->
                </div>
                <!-- row area start-->
            </div>
            @endsection