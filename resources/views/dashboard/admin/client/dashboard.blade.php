@extends('dashboard.admin.layouts.includes')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Client Dashboard</h3>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <div class="d-flex m-t-10 justify-content-end">
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                            <h4 class="m-t-0 text-info">$58,356</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                            <h4 class="m-t-0 text-primary">$48,356</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>
                    <div class="">
                        <button
                            class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i
                                class="ti-settings text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- Start Page Content -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <a href="{{route('admin.clients')}}" type="button" class="btn btn-circle bg-info text-white"><i class="fa fa-users"></i></a>
                            <div class="m-l-10 align-self-center">
                                <h6 class="m-b-0 font-light">Total Clients</h6>
                                <p class="text-muted m-b-0">{{$clients->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                             <a href="{{route('admin.leads')}}" type="button" class="btn btn-circle bg-warning text-white"><i class="fa fa-users"></i></a>
                            <div class="m-l-10 align-self-center">
                                    <h6 class="m-b-0 font-light">Total Leads</h6>
                                <p class="text-muted m-b-0">{{$leads->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <a href="{{route('admin.leads')}}" type="button" class="btn btn-circle bg-primary text-white"><i class="fa fa-users"></i></a>
                            <div class="m-l-10 align-self-center">
                                     <h6 class="m-b-0 font-light">Total Lead Conversions</h6>
                                <p class="text-muted m-b-0">{{$leadconversions->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                           <a href="#" type="button" class="btn btn-circle bg-danger text-white"><i class="fa fa-file"></i></a>
                            <div class="m-l-10 align-self-center">
                                    <h6 class="m-b-0 font-light">Total Contracts Generated</h6>
                                <p class="text-muted m-b-0">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                             <a href="#" type="button" class="btn btn-circle bg-danger text-white"><i class="fa fa-file"></i></a>
                            <div class="m-l-10 align-self-center">
                                    <h6 class="m-b-0 font-light">Total Contracts Signed</h6>
                                <p class="text-muted m-b-0">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <div class="row">
              <div class="col-lg-6 col-md-6">
                              <div class="card border-0">
                            <div class="card-header border-0 p-4">
                                <h5 class="card-title m-b-0">CLIENT WISE EARNINGS</h5>
                            </div>
                            <div class="card-body collapse show b-t">
                                <div class="m-t-30 text-center"><i class="fa fa-money-bill-alt text-dark" style="font-size:35px"></i>
                                
                                    <h6 class="card-subtitle mt-3">No earning data found. Start recording the payments</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4">
                                              <a href="#" type="button"
                            class="btn btn-outline-success m-t-10"><i class="fa fa-plus"></i> Manage</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              </div>
              <div class="col-lg-6 col-md-6">
                     <div class="card border-0">
                            <div class="card-header border-0 p-4">
                                <h5 class="card-title m-b-0">CLIENT WISE TIMELOGS</h5>
                            </div>
                             <div class="card-body collapse show b-t">
                                <div class="m-t-30 text-center"><i class="fa fa-clock text-dark" style="font-size:30px"></i>

                                    <h6 class="card-subtitle mt-3">No timelogs data found.</h6>
                                </div>
                            </div>
                        </div>
              </div>
        </div>
        <!-- End PAge Content -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/1.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/2.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                        class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/3.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                        class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/4.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                        class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/5.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Govinda Star <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/6.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>John Abraham<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/7.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Hritik Roshan<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/users/8.jpg')}}"
                                    alt="user-img" class="img-circle"> <span>Pwandeep rajan <small
                                        class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Right sidebar -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <footer class="footer">
        © 2021 Webfabricant
    </footer>
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->
@endsection
