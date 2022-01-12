@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
    .dropdown-menu {
        min-width: 5.4rem !important;
    }
.grid-stack > .grid-stack-item > .grid-stack-item-content {
    margin: 0;
    position: absolute;
    top: 0;
    left: 10px;
    right: 10px;
    bottom: 0;
    width: 286%;
    z-index: 0 !important;
    overflow-x: hidden;
    overflow-y: auto;
}
@media only screen and (max-width: 600px) {
 .grid-stack > .grid-stack-item > .grid-stack-item-content {
    margin: 0;
    position: absolute;
    top: 0;
    left: 10px;
    right: 10px;
    bottom: 0;
    width:auto;
    z-index: 0 !important;
    overflow-x: hidden;
    overflow-y: auto;
}
}
@media only screen and (max-width: 800px) {
 .grid-stack > .grid-stack-item > .grid-stack-item-content {
    margin: 0;
    position: absolute;
    top: 0;
    left: 10px;
    right: 10px;
    bottom: 0;
    width:auto;
    z-index: 0 !important;
    overflow-x: hidden;
    overflow-y: auto;
}
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
                    <li class="breadcrumb-item"><a href="{{route('admin.tasks')}}">Tasks</a></li>
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
         {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Draggable Panel Portlets</h4>
                                <h6 class="card-subtitle">Thus is a widget layout jquery plugin. <a href="http://troolee.github.io/gridstack.js/" target="_blank">gridstack.js</a> is used to design this layout. This is drag-and-drop multi-column grid. It allows you to build draggable responsive layouts.</h6>
                                <div class="grid-stack" data-gs-width="12" data-gs-animate="yes">
                                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="2">
                                        <div class="grid-stack-item-content">1</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="4">
                                        <div class="grid-stack-item-content">2</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="8" data-gs-y="0" data-gs-width="2" data-gs-height="2" data-gs-min-width="2" data-gs-no-resize="yes">
                                        <div class="grid-stack-item-content"> <span class="fa fa-hand-o-up"></span> Drag me! </div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="10" data-gs-y="0" data-gs-width="2" data-gs-height="2">
                                        <div class="grid-stack-item-content">4</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="2" data-gs-height="2">
                                        <div class="grid-stack-item-content">5</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="2" data-gs-y="2" data-gs-width="2" data-gs-height="4">
                                        <div class="grid-stack-item-content">6</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="8" data-gs-y="2" data-gs-width="4" data-gs-height="2">
                                        <div class="grid-stack-item-content">7</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="4" data-gs-width="2" data-gs-height="2">
                                        <div class="grid-stack-item-content">8</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="4" data-gs-y="4" data-gs-width="4" data-gs-height="2">
                                        <div class="grid-stack-item-content">9</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="8" data-gs-y="4" data-gs-width="2" data-gs-height="2">
                                        <div class="grid-stack-item-content">10</div>
                                    </div>
                                    <div class="grid-stack-item" data-gs-x="10" data-gs-y="4" data-gs-width="2" data-gs-height="2">
                                        <div class="grid-stack-item-content">11</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        {{-- COMPLETED --}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-success">COMPLETED</h4>
                        @if ($completeTasks->isEmpty())
                        <div class="col-md-12">
                            <h6 class="card-subtitle m-b-20 text-muted">Not Found</h6>
                        </div>
                        @else
                        @foreach ($completeTasks as $row)
                        <div class="grid-stack" data-gs-width="12" data-gs-animate="yes" style="margin-top:10px;width:100%">
                            <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4"
                                data-gs-height="2">
                                <div class="grid-stack-item-content">
                                      <p class="mt-2">{{$row->title}}</p>
                                      <small>{{date_format($row->start_date,"d-m-Y")}}</small> <small> To {{date_format($row->due_date,"d-m-Y")}}</small><br>
                                       <a type="button" href="{{route('admin.task.edit' , ['id'=>$row->id])}}"
                                                class="btn btn-sm btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
                {{-- INCOMPLETE --}}
             <div class="col-md-6">
                <div class="card">
                     <div class="card-body">
                        <h4 class="card-title text-danger">INCOMPLETE</h4>
                        @if ($inCompleteTasks->isEmpty())
                        <div class="col-md-12">
                            <h6 class="card-subtitle m-b-20 text-muted">Not Found</h6>
                        </div>
                        @else
                        @foreach ($inCompleteTasks as $row)
                        <div class="grid-stack" data-gs-width="12" data-gs-animate="yes">
                            <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4"
                                data-gs-height="2">
                                <div class="grid-stack-item-content">
                                      <p class="mt-2">{{$row->title}}</p>
                                      <small>{{date_format($row->start_date,"d-m-Y")}}</small> <small> To {{date_format($row->due_date,"d-m-Y")}}</small><br>
                                       <a type="button" href="{{route('admin.task.edit' , ['id'=>$row->id])}}"
                                                class="btn btn-sm btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    
      

        <!-- footer -->
        <footer class="footer">
            © 2021 Webfabricant
        </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    @endsection
