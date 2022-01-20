@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
    .dropdown-menu {
        min-width: 5.4rem !important;
    }

</style>
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tickets</li>
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
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                    class="img-circle"> <span>Varun Dhavan <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                    class="img-circle"> <span>Genelia Deshmukh <small
                                        class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                    class="img-circle"> <span>Ritesh Deshmukh <small
                                        class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                    class="img-circle"> <span>Arijit Sinh <small
                                        class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                    class="img-circle"> <span>Govinda Star <small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                    class="img-circle"> <span>John Abraham<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                    class="img-circle"> <span>Hritik Roshan<small
                                        class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                    class="img-circle"> <span>Pwandeep rajan <small
                                        class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Right sidebar -->
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tickets</h4>
                        <div class="dropdown">
                            <a href="#" type="button" class="btn btn-info t-10 float-right" data-toggle="dropdown" style="font-size: 12px"
                                aria-haspopup="true" aria-expanded="false"><i class="ti-download" style="font-size: 12px"></i> Export</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:10px">
                                <a class="dropdown-item text-dark" href="{{route('admin.ticket.export.excel')}}"
                                    style="font-size: 12px"><i class="fa fa-file-excel" style="font-size: 12px"></i>
                                    Excel</a>
                                <a class="dropdown-item  text-dark" href="{{route('admin.ticket.export.csv')}}"
                                    style="font-size: 12px"><i class="fa fa-file-excel" style="font-size: 12px"></i>
                                    CSV</a>
                            </div>
                        </div>
                        <a href="{{route('admin.ticket.create')}}" type="button"
                            class="btn btn-outline-success t-10 float-right" style="margin-right: 10px;font-size: 12px"><i
                                class="ti-plus" style="font-size: 12px"></i> Create Ticket</a>
                        <a href="{{route('admin.ticket.types')}}" type="button"
                            class="btn waves-effect waves-light btn-outline-warning t-10 float-right" style="margin-right: 10px;font-size: 12px">Ticket Types</a>
                             <a href="{{route('admin.ticket.channels')}}" type="button"
                            class="btn waves-effect waves-light btn-outline-secondary t-10 float-right" style="margin-right: 10px;font-size: 12px">Ticket Channels</a>
                                 <a href="{{route('admin.ticket.agents')}}" type="button"
                            class="btn waves-effect waves-light btn-outline-primary t-10 float-right" style="margin-right: 10px;font-size: 12px">Ticket Agents</a>
                        
                        
                          <div class="row " style="margin-top: 6%">
                            <div class="col-md-3 col-xs-6 b-r"> <span
                                    class="btn btn-circle  btn-info text-white">{{count($tickets)}}</span>
                                     <label for="validationDefault03">Total Tickets <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:120px;"><span class="tooltip-inner2" style="font-size: 12px">No. of new tickets which where created for the selected date range.</span></span></span></span></label>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"><span
                                    class="btn btn-circle  btn-warning text-white">{{count($closedTickets)}}</span>
                                     <label for="validationDefault03">Closed Tickets <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:120px;"><span class="tooltip-inner2" style="font-size: 12px">No. of new tickets which where closed in the selected data range</span></span></span></span></label>

                            </div>
                            <div class="col-md-3 col-xs-6"><span
                                    class="btn btn-circle  btn-success text-white">{{count($openTickets)}}</span>
                           
                                     <label for="validationDefault03">Open Tickets <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:130px;"><span class="tooltip-inner2" style="font-size: 12px">No. of tickets which are not yet assigned to any agent and and updated in the selected range.</span></span></span></span></label>

                            </div>
                        </div>

                         <div class="row " style="margin-top: 2%">
                            <div class="col-md-3 col-xs-6 b-r"> <span
                                    class="btn btn-circle text-white" style="background-color: #12c4f1">{{count($pendingTickets)}}</span> 
                                   
                                     <label for="validationDefault03">Pending Tickets <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:130px;"><span class="tooltip-inner2" style="font-size: 12px">No. of tickets which where updated in the selected date range and are assigned  to an agent.</span></span></span></span></label>

                            </div>
                            <div class="col-md-3 col-xs-6 b-r"><span
                                    class="btn btn-circle text-white" style="background-color: #33cea8">{{count($resolvedTickets)}}</span>
                            
                                     <label for="validationDefault03">Resolved Tickets <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:130px;"><span class="tooltip-inner2" style="font-size: 12px">No. of tickets which where resolved in the selected date range but waiting for requester confirmation.</span></span></span></span></label>

                            </div>

                        </div>
                        
                            <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ticket Subject</th>
                                        <th>Requester Name</th>
                                        <th>Requested On</th>
                                        <th>Others</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($tickets as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->subject}}</td>
                                        <td>{{$row->requester->name}}</td>
                                        <td>{{ $row->created_at->format('Y-m-d H:i')}}</td>
                                        <td>Agent: {{$row->agent->name}} <br> Status:
                                            @if ($row->status == 'Open')
                                            <label class="label" style="color:#33cea8;background-color: #ccf0d1">{{$row->status}}</label>   
                                            @elseif($row->status == 'Pending')
                                            <label class="label" style="background-color: #ffe8d0;color:#ffaf00">{{$row->status}}</label>
                                            @elseif($row->status == 'Resolved')
                                            <label class="label" style="background-color: #d2e8ba;color:#97bf6b">{{$row->status}}</label>
                                            @else
                                            <label class="label" style="background-color: #fcf2ed;color:#e49886">{{$row->status}}</label>
                                            @endif
                                            <br> Priority: {{$row->priority}}</td>
                                        <td style="text-align: end">
                                            <div class="dropdown">
                                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-settings" style="font-size: 10px"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-dark" type="button"
                                                        style="font-size: 12px; cursor: pointer;"
                                                        href="{{route('admin.ticket.view' , ['id'=>$row->id])}}"><i
                                                            class="ti-eye" style="font-size: 12px"></i> View</a>
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.ticket.delete' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 12px" id="deleteTicket"><i class="ti-close"
                                                            style="font-size: 12px"></i> Delete</a>
                                                </div>
                                            </div>
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
        <!-- End PAge Content -->
    </div>
    <!-- footer -->
    <footer class="footer">
        © 2021 Webfabricant
    </footer>
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->

<!-- leaD Category modal -->

@endsection
