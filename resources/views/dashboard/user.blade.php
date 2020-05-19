@extends('layouts.dashboard-master')

@section('content')
                <!--  report area start -->
                <div class="sales-report-area mt-5 mb-5">
                   
                    <div class="row">
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
                                        <h4 class="header-title mb-0">My Discussions</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($my_discussions) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-comments"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">My Replies</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($my_replies) }}</h2>
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
                                    <div class="icon"><i class="fa fa-trophy"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">My Points</h4>
                                        {{-- <p></p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ $user->xp_points}}</h2>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Discussions Watched</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($watching) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">My Likes</h4>
                                        {{-- <p>24 H</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                        <h2>{{ count($my_likes) }}</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

              
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
                                          
                                                <tr>
                                                    
                                                    <td class="attachments"></td>
                                                    <td class="mv-icon"><img src="" alt="icon"></td>
                                                    <td class="coin-name"></td>
                                                
                                                </tr>
                                           
                                          
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