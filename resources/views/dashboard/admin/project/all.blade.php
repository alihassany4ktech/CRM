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
                    <li class="breadcrumb-item"><a href="#">Work</a></li>
                    <li class="breadcrumb-item active">Projects</li>
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
                        <h4 class="card-title">Projects</h4>
                        <div class="dropdown">
                            <a href="#" type="button" class="btn btn-info t-10 float-right" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-arrow-down"></i> Export</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:10px">
                                <a class="dropdown-item text-dark" href=""
                                    style="font-size: 14px"><i class="fa fa-file-excel" style="font-size: 14px"></i>
                                    Excel</a>
                                <a class="dropdown-item  text-dark" href=""
                                    style="font-size: 14px"><i class="fa fa-file-excel" style="font-size: 14px"></i>
                                    CSV</a>

                            </div>
                        </div>
                        <a href="{{route('admin.project.create')}}" type="button"
                            class="btn btn-outline-success t-10 float-right" style="margin-right: 10px"><i
                                class="mdi mdi-plus"></i> New</a>
                        <a href="" type="button"
                            class="btn btn-outline-primary t-10 float-right" style="margin-right: 10px"><i
                                class="mdi mdi-plus"></i> Project Templates</a>
                                <a href="" type="button"
                            class="btn btn-outline-warning t-10 float-right" style="margin-right: 10px"><i
                                class="mdi mdi-delete"></i> View Archive</a>
                           <a href="" type="button"
                            class="btn btn-outline-info t-10 float-right" style="margin-right: 10px"><i class="mdi mdi-pin" style="font-size: 14px"></i> Pinned Project</a>

                        <div class="row justify-content-center" style="margin-top: 6%">
                            <div class="col-md-3 col-xs-6 b-r"> <span
                                    class="btn btn-circle  btn-info text-white">0</span> <strong>Total Projects</strong>

                            </div>
                            <div class="col-md-3 col-xs-6 b-r"><span
                                    class="btn btn-circle  btn-warning text-white">0</span>
                                <strong>Overdue Projects</strong>

                            </div>
                            <div class="col-md-3 col-xs-6"><span
                                    class="btn btn-circle  btn-success text-white">0</span>
                                <strong>Not Started Projects</strong>

                            </div>
                        </div>
                            <div class="row justify-content-center" style="margin-top: 2%">
                            <div class="col-md-3 col-xs-6 b-r"> <span
                                    class="btn btn-circle text-white" style="background-color: #12c4f1">0</span> <strong>Completed Projects</strong>

                            </div>
                            <div class="col-md-3 col-xs-6 b-r"><span
                                    class="btn btn-circle text-white" style="background-color: #33cea8">0</span>
                                <strong>In Progress Projects</strong>

                            </div>
                            <div class="col-md-3 col-xs-6"><span
                                    class="btn btn-circle  btn-primary text-white">0</span>
                                <strong>Canceled Projects</strong>

                            </div>
                        </div>
                        <div class="table-responsive m-t-40">

                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Members</th>
                                        <th>Dedline</th>
                                        <th>Client</th>
                                        <th>Completions</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- @foreach ($leads as $row) --}}
                                    <tr>
                                          <td>1</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        {{-- <td>{{$loop->iteration}}</td>
                                        <td>{{$row->client_name}}</td>
                                        <td>{{$row->client_email}}</td>
                                        <td>{{$row->company_name}}</td>
                                        <td>{{$row->value}}</td>
                                        <td>{{$row->created_at->format('d-m-y')}}</td>
                                        <td>{{$row->next_follow_up}}</td>
                                        <td>
                                            <img src="{{asset($row->client->image)}}" class="img-circle elevation-2"
                                                alt="admin Image" style="height: 35px;width:35px">
                                            {{ucwords($row->client->name)}}
                                        </td>
                                        <td style="width:10%">
                                            <select id="{{$row->id}}" class="form-control bg-light changeStatus">
                                                @foreach ($leadStstus as $item)
                                                <option value="{{$item->id}}"
                                                    {{$item->type == $row->lead_status->type ? 'selected':''}}>
                                                    {{$item->type}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="">
                                            <div class="dropdown">
                                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cogs"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.lead.show' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 14px;cursor: pointer"><i
                                                            class="fa fa-eye" style="font-size: 14px"></i> View</a>
                                                    <a class="dropdown-item text-dark" type="button"
                                                        style="font-size: 14px; cursor: pointer;"
                                                        href="{{route('admin.lead.show' , ['id'=>$row->id])}}"><i
                                                            class="fa fa-edit" style="font-size: 14px"></i> Edit</a>
                                                    <a class="dropdown-item text-dark" type="button"
                                                        href="{{route('admin.lead.delete' , ['id'=>$row->id])}}"
                                                        id="delete" style="font-size: 14px;"><i class="fa fa-trash"
                                                            style="font-size: 14px"></i> Delete</a>
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.change.leadToCliet' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 14px"><i class="fa fa-user"
                                                            style="font-size: 14px"></i> Change To
                                                        Client</a>
                                                    <button class="dropdown-item text-dark" onclick="getLeadId(this)"
                                                        id="{{$row->id}}" data-toggle="modal"
                                                        data-target="#responsive-modallead"
                                                        style="font-size: 14px;  cursor: pointer;"><i
                                                            class="fa fa-thumbs-up" style="font-size: 14px"></i> Add
                                                        Follow Up</button>


                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}
                                    {{-- @endforeach --}}

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
