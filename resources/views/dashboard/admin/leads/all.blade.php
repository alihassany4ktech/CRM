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
                    <li class="breadcrumb-item"><a href="#">Customers</a></li>
                    <li class="breadcrumb-item active">Leads</li>
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
                        <h4 class="card-title">Leads</h4>
                        <div class="dropdown">
                            <a href="#" type="button" class="btn btn-info t-10 float-right" style="font-size: 12px" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-download"></i> Export</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:10px">
                                <a class="dropdown-item text-dark" href="{{route('admin.export.lead.excel')}}"
                                    style="font-size: 12px"><i class="fa fa-file-excel"></i>
                                    Excel</a>
                                <a class="dropdown-item  text-dark" href="{{route('admin.export.lead.csv')}}"
                                    style="font-size: 12px"><i class="fa fa-file-excel"></i>
                                    CSV</a>

                            </div>
                        </div>
                        <a href="{{route('admin.lead.kanbanBoard')}}" type="button" 
                            class="btn btn-outline-primary t-10 float-right" style="margin-right: 10px;font-size: 12px"><i class="fa fa-clipboard" aria-hidden="true"></i>
 Kanban Board</a>
                        <a href="{{route('admin.create.lead')}}" type="button"
                            class="btn btn-outline-success t-10 float-right" style="margin-right: 10px;font-size: 12px"><i
                                class="fa fa-plus" ></i> Add New
                            Lead</a>

                        <?php
                                $leadStstus = App\LeadStatus::all();
                                $leadFollowUp = App\leadFollowUp::all();
                                $leadsConverted = App\Lead::where('status','=','converted')->get();
                        ?>
                        <div class="row justify-content-center" style="margin-top: 6%">
                            <div class="col-md-3 col-xs-6 b-r"> <span
                                    class="btn btn-circle  btn-info text-white">{{$leads->count()}}</span> <strong>Total
                                    Leads</strong>

                            </div>
                            <div class="col-md-3 col-xs-6 b-r"><span
                                    class="btn btn-circle  btn-warning text-white">{{$leadsConverted->count()}}</span>
                                <strong>Total Client
                                    Convert</strong>

                            </div>
                            <div class="col-md-3 col-xs-6"><span
                                    class="btn btn-circle  btn-success text-white">{{$leadFollowUp->count()}}</span>
                                <strong>Total Pending Follow Up</strong>

                            </div>
                        </div>
                        <div class="table-responsive m-t-40">

                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Company Name</th>
                                        <th>Lead Value</th>
                                        <th>Created</th>
                                        <th>Next Fallow Up</th>
                                        <th>Lead Agent</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($leads as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
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
                                                    <i class="fa fa-cogs" style="font-size: 10px"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.lead.show' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 12px;cursor: pointer"><i
                                                            class="fa fa-eye" style="font-size: 12px"></i> View</a>
                                                    <a class="dropdown-item text-dark" type="button"
                                                        style="font-size: 12px; cursor: pointer;"
                                                        href="{{route('admin.lead.show' , ['id'=>$row->id])}}"><i
                                                            class="fa fa-edit" style="font-size: 12px"></i> Edit</a>
                                                    <a class="dropdown-item text-dark" type="button"
                                                        href="{{route('admin.lead.delete' , ['id'=>$row->id])}}"
                                                        id="delete"><i class="fa fa-times"
                                                            style="font-size: 12px"></i> Delete</a>
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.change.leadToCliet' , ['id'=>$row->id])}}"
                                                        type="button" style="font-size: 12px"><i class="fa fa-user"
                                                            style="font-size: 12px"></i> Change To
                                                        Client</a>
                                                    <button class="dropdown-item text-dark" onclick="getLeadId(this)"
                                                        id="{{$row->id}}" data-toggle="modal"
                                                        data-target="#responsive-modallead"
                                                        style="font-size: 12px;  cursor: pointer;"><i
                                                            class="fa fa-thumbs-up" style="font-size: 12px"></i> Add
                                                        Follow Up</button>


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
<div id="responsive-modallead" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel"><i class="fa fa-plus"></i> Follow Up Next
                </h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <form id="followUpForm">
                    @csrf
                    <input type="hidden" name="leadId" id="leadId">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Follow Up Next</label>
                        <input class="form-control" id="datepicker" name="next_follow_up_date" type="date"
                            id="example-date-input" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Remark</label>
                        <input type="text" name="remark" class="form-control" id="recipient-name" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-check"></i>
                    Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->
@endsection
