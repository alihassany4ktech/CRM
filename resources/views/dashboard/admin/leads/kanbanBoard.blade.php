@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
    .dropdown-menu {
        min-width: 5.4rem !important;
    }

</style>
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.leads')}}">Leads</a></li>
                    <li class="breadcrumb-item active">kanban Board</li>
                </ol>
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
        <!-- Start Page Content -->
        {{-- pendind --}}
             <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <h4 class="card-title text-danger">PENDING</h4>
                  </div>
                   @if ($pendingLeads->isEmpty())
                  <div class="col-md-12">
                        <h6 class="card-subtitle m-b-20 text-muted">Not Found</h6>
                    </div>
                     @else 
                   @foreach ($pendingLeads as $row)
                        <div class="col-lg-3 col-md-6">
                        <div class="card">
                              
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{ $row->client->image ? asset($row->client->image): asset('assets/images/users/2.jpg')}}" style="height:230px" alt="user" />
                                    <div class="el-overlay" data-toggle="tooltip" title="{{$row->client->name}} (agent)">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" data-toggle="tooltip" title="Edit" href="{{route('admin.lead.show' , ['id'=>$row->id])}}"><i class="fa fa-edit"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{$row->client_name}}</h3> <small> <i class="fa fa-building"></i> {{$row->company_name}}</small>
                                    <br/> 
                                    <div class="ribbon ribbon-danger ribbon-corner ribbon-bottom"><i class="fab fa-leanpub"></i></div>
                              </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                   @endif
                </div>
   {{-- INPROCESS --}}
             <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <h4 class="card-title text-danger">INPROCESS</h4>
                  </div>
                   @if ($inprocessLeads->isEmpty())
                  <div class="col-md-12">
                        <h6 class="card-subtitle m-b-20 text-muted">Not Found</h6>
                    </div>
                     @else 
                   @foreach ($inprocessLeads as $row)
                        <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{ $row->client->image ? asset($row->client->image): asset('assets/images/users/3.jpg')}}" style="height:230px" alt="user" />
                                    <div class="el-overlay" data-toggle="tooltip" title="{{$row->client->name}} (agent)">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" data-toggle="tooltip" title="Edit" href="{{route('admin.lead.show' , ['id'=>$row->id])}}"><i class="fa fa-edit"></i></a></li>
                                            <li><a class="btn default btn-outline" href="{{route('admin.lead.delete' , ['id'=>$row->id])}}" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{$row->client_name}}</h3> <i class="fa fa-building"></i> <small>{{$row->company_name}}</small>
                                    <br/>
                               </div>
                               <div class="ribbon ribbon-danger ribbon-corner ribbon-bottom"><i class="fab fa-leanpub"></i></div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                   @endif
                </div>
   {{-- CONVERTED --}}
             <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <h4 class="card-title text-danger">CONVERTED</h4>
                  </div>
                 @if ($convertedLeads->isEmpty())
                  <div class="col-md-12">
                        <h6 class="card-subtitle m-b-20 text-muted">Not Found</h6>
                    </div>
                     @else 
                       @foreach ($convertedLeads as $row)
                        <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{ $row->client->image ? asset($row->client->image): asset('assets/images/users/1.jpg')}}" style="height:230px" alt="user" />
                                    <div class="el-overlay" data-toggle="tooltip" title="{{$row->client->name}} (agent)">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" data-toggle="tooltip" title="Edit" href="{{route('admin.lead.show' , ['id'=>$row->id])}}"><i class="fa fa-edit"></i></a></li>
                                            <li><a class="btn default btn-outline" href="{{route('admin.lead.delete' , ['id'=>$row->id])}}" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{$row->client_name}}</h3> <i class="fa fa-building"></i> <small>{{$row->company_name}}</small>
                                    <br/> </div>
                                    <div class="ribbon ribbon-danger ribbon-corner ribbon-bottom"><i class="fab fa-leanpub"></i></div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                 @endif
                </div>
        <!-- footer -->
        <footer class="footer">
            © 2021 Webfabricant
        </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    @endsection
