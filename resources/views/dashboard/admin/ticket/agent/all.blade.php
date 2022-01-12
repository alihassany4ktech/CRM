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
                    <li class="breadcrumb-item active"><a href="{{route('admin.tickets')}}">Tickets</a></li>
                    <li class="breadcrumb-item active">Ticket Agents</li>
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
                        <h4 class="card-title">Ticket Agents</h4>
                        <a href="{{route('admin.tickets')}}" type="button" class="btn btn-outline-success float-right"
                            style="margin-right: 10px; font-size: 12px">View Tickets</a>



                        <div class="form-row" style="margin-top: 50px">
                            <div class="col-md-12">
                                <form id="ProductCategoryForm">
                                    @csrf
                                 <div class="form-row">
                                       <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Choose Agents <small
                                                class="text-danger">*</small></label>
                                        <select class="select2 m-b-10 select2-multiple" name="agent[]"
                                            class="form-control" style="width: 100%" multiple="multiple"
                                            data-placeholder="Choose" required>
                                            @foreach ($employees as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                        <label for="recipient-name" class="control-label">Assign Group <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal3" id="addLeadsource"
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a> <small class="text-danger">*</small></label>

                                        <select class="select2 form-control" style="width: 100%" name="group" required>
                                            <option value="" selected>--</option>
                                            @foreach ($groups as $row)
                                                <option value="{{$row->id}}">{{$row->group_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                       </div>
                                 </div>
                                    <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i
                                            class="fa fa-check"></i>Save</button>

                            </div>

                            </form>
                        </div>
                    




                    <div class="table-responsive m-t-15">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Status</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Name</td>
                                    <td>Group</td>
                                    <td>Status</td>
                                    <td style="text-align: center">Action</td>

                                </tr>

                                {{-- @foreach ($types as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                <td>{{$row->type}}</td>


                                <td style="text-align: center">
                                    <div class="dropdown">
                                        <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings" style="font-size: 10px"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-dark" type="button"
                                                style="font-size: 12px; cursor: pointer;" data-toggle="modal"
                                                data-target="#responsive-modal4" onclick="editType(this)"
                                                id="{{$row->id}}" name="{{$row->type}}" href=""><i class="ti-marker-alt"
                                                    style="font-size: 12px"></i> Edit</a>
                                            <a class="dropdown-item text-dark" onclick="deleteType(this)"
                                                id="{{$row->id}}" type="button" style="font-size: 12px;cursor: pointer;"
                                                id="delete"><i class="ti-close"
                                                    style="font-size: 12px; cursor: pointer;"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach --}}

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
<!-- Ticket Type modal -->
<div id="responsive-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add Group</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                  <div class="table-responsive m-t-40">
                            <table id="example23" class="table product-overview"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Group</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($groups as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->group_name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteTicketGroup(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="ti-close"
                                            aria-hidden="true" style="font-size: 12px"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                <form id="ticketGroupForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Group Name</label>
                        <input type="text" name="group_name" class="form-control" required>
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
{{-- edit model --}}
<div id="responsive-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Update Ticket Type</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="ticketTypeUpdateForm">
                    @csrf
                    <input type="hidden" name="id" id="ticketId">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Ticket Type</label>
                        <input type="text" name="tiket_type" id="ticketType" class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-check"></i>
                    Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('tickect-groups-page-script')
{{-- Type --}}
<script>
    $(document).ready(function () {
        $('#ticketGroupForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.ticket.group.store")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                        window.location.reload();
                    }
                }
            });
        });
    });

</script>
{{-- edit --}}
<script>
    function editType(elem) {
        var id = $(elem).attr("id");
        var type = $(elem).attr("name");
        $('#ticketId').val(id);
        $('#ticketType').val(type);
    };

</script>
<script>
    $(document).ready(function () {
        $('#ticketTypeUpdateForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.ticket.type.update")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                        window.location.reload();
                    }
                }
            });
        });
    });

</script>
{{--  --}}
{{-- delete --}}
<script>
    function deleteTicketGroup(elem) {
        var id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.ticket.group.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                id: id,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };

</script>
@endpush
