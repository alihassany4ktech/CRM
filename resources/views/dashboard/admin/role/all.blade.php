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
                    <li class="breadcrumb-item active">Roles & Permissions</li>
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
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        {{-- new --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Roles & Permissions</h4>
                        <a href="" data-toggle="modal" data-target="#manageRoleModel" type="button"
                            class="btn btn-outline-success float-right" style="margin-right: 10px;font-size: 12px"><i
                                class="ti-settings" style="font-size: 12px"></i> Manage Role</a>
                    </div>
                </div>
            </div>
        </div>
        @foreach($roles as $role)
        <div class="row">
            <div class="col-md-12 col-xlg-3">
                <!-- Column -->
                <div class="card earning-widget">
                    <div class="card-header">
                        <div class="card-actions">
                            <a data-action="collapse" type="button" href="#" style="font-size:12px;color:black"
                                class="btn btn-success float-right"><i class="ti-key"></i> Permissions</a>
                            <?php
                                    $members = App\User::role($role->name)->get();
                                    // $employees = App\User::doesntHave('roles')->where('type','=','Employee')->get();
                                    $employees = App\User::where('type','=','Employee')->get();

                            ?>
                            <a type="button" href="#" data-toggle="modal" data-target="#responsive-modal{{$role->id}}"
                                {{-- onclick="getRoleId(this)" id="{{$role->id}}" --}}
                                style="font-size:12px;color:black;margin-right: 10px"
                                class="btn btn-warning float-right"><i class="mdi mdi-account-multiple"
                                    style="font-size: 14px"></i> {{count($members)}} Member(s)</a>
                        </div>
                        <h4 class="card-title m-b-0">{{$role->name}}</h4>
                    </div>
                    <div class="card-body b-t collapse">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>SELECT ALL</th>
                                        <th>ADD</th>
                                        <th>VIEW</th>
                                        <th>UPDATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($modules as $module)
                                    <tr>
                                        <td>
                                            <label for="validationDefault03">{{$module->module_name}}
                                                @if($module->description != '')
                                                <span class="mytooltip">
                                                    <i class="fa fa-info-circle text-dark" style="font-size: 12px"
                                                        aria-hidden="true">
                                                    </i><span class="tooltip-content5"><span class="tooltip-text3"
                                                            style="height:120px;">
                                                            <span class="tooltip-inner2"
                                                                style="font-size: 10px;text-align:justify;text-align-last: center; margin-left:60px;">
                                                                {{$module->description}}</span>
                                                        </span>
                                                    </span>
                                                </span></label>

                                            @endif
                                            @foreach($module->permissions as $permission)
                                        <td>
                                            <input type="checkbox" @if($role->getAllPermissions()->isEmpty())
                                            @else
                                            @foreach ($role->getAllPermissions() as $p)
                                            @if ($permission->name == $p->name)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            class="js-switch assign-role-permission permission_{{ $role->id }}"
                                            data-color="#26c6da"
                                            data-permission-id="{{ $permission->id }}"
                                            data-role-id="{{ $role->id }}"
                                            data-size="small" />
                                        </td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="responsive-modal{{$role->id}}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel2" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title text-white" id="exampleModalLabel1">Manage Role Members</h4>
                        <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>User Role</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($members->isEmpty())
                                    <tr>
                                        <td colspan="3"><small>No member is assigned to this role.</small></td>
                                    </tr>
                                    @else
                                    @foreach ($members as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            @if ($row->getRoleNames()->isEmpty())
                                            No Role
                                            @else
                                            {{$row->getRoleNames()[0]}}
                                            @endif
                                        </td>
                                        <td style="text-align: end">
                                            <button onclick="deleteMember(this)" id="{{$row->id}}"
                                                data-role-id="{{$role->id}}" type="button"
                                                class="btn btn-sm btn-danger"><i class="ti-close"
                                                 aria-hidden="true"></i></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="memberForm{{$role->id}}">
                            @csrf
                            <input type="hidden" name="roleId" value="{{$role->id}}" id="">
                            <div class="form-group">

                                <label for="recipient-name" class="control-label">Add Members <small
                                        class="text-danger">*</small></label>
                                        <select class="select2 m-b-10 select2-multiple" name="memberId[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                @foreach ($employees as $emp)
                                                    <option value="{{$emp->id}}">{{$emp->name}}</option>
                                                @endforeach
                                                  
                                                </select>
                                {{-- <select class="form-control" name="memberId">
                                    @foreach ($employees as $emp)
                                    <option value="{{$emp->id}}">{{$emp->name}}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i
                                class="ti-check"></i>
                            Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @push('role-page-script')
        <script>
            $(document).ready(function () {
                $('#memberForm{{$role->id}}').on('submit', function (event) {
                    event.preventDefault();
                    $.ajax({
                        url: '{{route("admin.add.role.member")}}',
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
        @endpush
        @endforeach
<!-- End PAge Content -->
</div>
<!-- footer -->
<footer class="footer">
    © 2021 Webfabricant
</footer>
<!-- End footer -->
</div>
<!-- End Page wrapper  -->
<!-- Role modal -->
<div id="manageRoleModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Manage Role</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th style="text-align: end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td style="text-align: end">
                                    <button onclick="deleteRole(this)" id="{{$row->id}}" type="button"
                                        class="btn btn-sm btn-danger"><i class="ti-close"
                                            aria-hidden="true"></i></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-body">
                <form id="roleForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Role Name <small
                                class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="ente role name"
                            name="role_name" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ti-check"></i>
                    Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('role-page-script')

<script>
    $(document).ready(function () {
        $(function () {
            $('.assign-role-permission').on('change', assignRollPermission);
        });
    });
    var assignRollPermission = function () {

        var roleId = $(this).data('role-id');
        var permissionId = $(this).data('permission-id');
        if ($(this).is(':checked'))
            var assignPermission = 'yes';
        else
            var assignPermission = 'no';
        $.ajax({
            url: "{{ route('admin.role-permission.store') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                'roleId': roleId,
                'permissionId': permissionId,
                'assignPermission': assignPermission,
            },

            success: function (data) {
                if (data.success == 'Assigned') {
                    toastr.success(data.success);
                } else {
                    toastr.error(data.success);
                }
            }
        });

    };

</script>
<script>
    $(document).ready(function () {
        $('#roleForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.role.store")}}',
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
<script>
    function deleteMember(elem) {
        var memberId = $(elem).attr("id");
        var roleId = $(elem).data("role-id");
        $.ajax({
            url: "{{ route('admin.delete.role.member') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                memberId: memberId,
                roleId: roleId
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    }

</script>
<script>
    function deleteRole(elem) {
        var roleId = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.role.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                roleId: roleId,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };

</script>
@endpush
