@extends('dashboard.admin.layouts.includes')
@section('content')
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
                      <li class="breadcrumb-item"><a href="#">Works</a></li>
                    <li class="breadcrumb-item active">Contracts</li>
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
                        <h4 class="card-title">Contracts</h4>
                           <div class="dropdown">
                            <a href="#" type="button" class="btn btn-info t-10 float-right" style="font-size: 12px" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-download" style="font-size: 12px"></i> Export</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:0px">
                                <a class="dropdown-item text-dark" href="{{route('admin.export.contract.excel')}}"
                                    style="font-size: 12px"><i class="fa fa-file-excel" style="font-size: 12px"></i>
                                    Excel</a>
                                <a class="dropdown-item  text-dark" href="{{route('admin.export.contract.csv')}}"
                                    style="font-size: 12px"><i class="fa fa-file-excel" style="font-size: 12px"></i>
                                    CSV</a>

                            </div>
                        </div>
                        <a href="{{route('admin.contract.create')}}" type="button"
                            class="btn btn-outline-success m-t-8 float-right" style="margin-right: 10px;font-size: 12px"><i class="fa fa-plus" style="font-size: 12px"></i> Add New
                            Contract</a>
                         
                              <div class="row justify-content-center" style="margin-top: 6%">
                            <div class="col-md-3 col-xs-6 b-r"> <span
                                    class="btn btn-circle  btn-info text-white">{{count($contracts)}}</span> <strong> Total Contracts</strong>

                            </div>
                            <div class="col-md-3 col-xs-6 b-r"><span
                                    class="btn btn-circle  btn-warning text-white">{{$aboutToExpireCounts}}</span>
                                <strong> About To Expire</strong>

                            </div>
                            <div class="col-md-3 col-xs-6"><span
                                    class="btn btn-circle  btn-success text-white">{{$expiredCounts}}</span>
                                <strong> Expired</strong>

                            </div>
                        </div>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Contract Name</th>
                                        <th>Subject</th>
                                        <th>Client</th>
                                        <th>Amount</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Signature</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contracts as $row)
                                    <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$row->contract_name}}</td>
                                          <td>{{$row->subject}}</td>
                                          <td><img data-toggle="tooltip" data-original-title="{{ ucwords($row->client->name) }}"
                                                src="{{asset($row->client->image) }}" alt="user" class="img-circle" width="30"
                                                height="30"> {{$row->client->name}}</td>
                                          <td>${{$row->amount}}</td>
                                          <td>{{date_format($row->start_date,"d/m/Y")}}</td>
                                          <td>{{$row->end_date != null?  date_format($row->end_date,"d/m/Y") : 'No End Date'}}</td>
                                          <td>no signature</td>
                                                  <td class="">
                                            <div class="dropdown">
                                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cogs" style="font-size: 10px"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.contract.show' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 12px;cursor: pointer"><i
                                                            class="fa fa-eye" style="font-size: 12px"></i> View</a>
                                                    <a class="dropdown-item text-dark" type="button"
                                                        style="font-size: 12px; cursor: pointer;"
                                                        href="{{route('admin.contract.edit' , ['id'=>$row->id])}}"><i
                                                            class="fa fa-edit" style="font-size: 12px"></i> Edit</a>
                                                             <a class="dropdown-item text-dark"
                                                        href="{{route('admin.contract.show' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 12px;cursor: pointer"><i
                                                            class="fa fa-undo" style="font-size: 12px"></i> Renew</a>
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.contract.delete' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 12px" id="delete"><i class="fa fa-times"
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
@endsection

