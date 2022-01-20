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
                    <li class="breadcrumb-item"><a href="{{route('admin.employees')}}">HR</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.employees')}}">Employee List</a></li>
                    <li class="breadcrumb-item active">Creat Employee</li>
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
                <h4 class="card-title">ADD EMPLOYEE INFO</h4>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.employee.save')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row mt-2">
                                <div class="col-md-3 mb-3">
                                    {{-- data-toggle="tooltip" title="Employee ID id the unique ID distributed to emplyees" --}}
                                    <label for="validationDefault03">Employee ID <small
                                            class="text-danger">*</small><span class="mytooltip"> <i class="fa fa-info-circle" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:100px;"><span class="tooltip-inner2" style="font-size: 12px">Employee ID id the unique ID distributed to emplyees</span></span></span></span></label>
                                    <input type="number" min="1" name="employee_id" class="form-control" id="validationDefault03"
                                        placeholder="1">
                                    @error('employee_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Employee Name <small
                                            class="text-danger">*</small></label>
                                    <input type="text" name="name" class="form-control" id="validationDefault04"
                                        placeholder="employee name">
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Employee Email <small
                                            class="text-danger">*</small></label>
                                    <input type="email" name="email" class="form-control" id="validationDefault04"
                                        placeholder="employee email">
                                    <small>Employee will login using this email.</small><br>
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Password <small
                                            class="text-danger">*</small></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password1" placeholder="password"
                                            aria-describedby="basic-addon2" name="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1"><a type="button"  
                                                    style="cursor:pointer" class="text-dark"><span class="fa fa-eye" style="font-size: 11px" id="toggleBtn1" onclick="toggePassword()" ></span></a></span>
                                        </div>
                                    </div>
                                    <small>Employee will login using this password.</small><br>
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div> <br><br>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Designation
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal3" class="btn btn-sm  btn-outline-success"><i
                                                class="ti-plus"></i> Manage Designation</a> <small
                                            class="text-danger">*</small>
                                    </label>
                                    <select class="select2 form-control" style="width: 100%" name="designation"
                                        >
                                        <option value="" selected>--</option>
                                        @foreach ($designations as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('designation')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Department
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" class="btn btn-sm  btn-outline-success"><i
                                                class="ti-plus"></i> Manage Department</a> <small
                                            class="text-danger">*</small>
                                    </label>
                                    <select class="select2 form-control" style="width: 100%" name="department">
                                         <option value="" selected>--</option>
                                        @foreach ($departments as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                      @error('department')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault03"><i class="fab fa-slack-hash"
                                            style="font-size:12px"></i> Slack Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="validationTooltipUsernamePrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationTooltipUsername"
                                            name="slack_username" placeholder="example@example.com">
                                    </div>
                                    @error('slack_username')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Joining Date</label>
                                    <input type="date" name="joining_date" class="form-control"
                                        id="validationDefault04">
                                    @error('joining_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Exit Date</label>
                                    <input type="date" name="exit_date" class="form-control" id="validationDefault05">
                                    @error('exit_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Address</label>
                                    <textarea name="address" class="form-control" id="" cols="1" rows="2"
                                        placeholder="write..."></textarea>
                                    @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Log In</label>
                                    <select name="login_status" class="selectpicker form-control"
                                        data-style="form-control btn-secondary">
                                        <option value="Enable">Enable</option>
                                        <option class="Disable">Disable</option>
                                    </select>
                                    @error('login_status')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault03">Mobile</label>
                                    <input type="text" name="cell" class="form-control" id="validationDefault03"
                                        placeholder="+">
                                    @error('cell')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Hourly Rate (USD)</label>
                                    <input type="text" name="hourly_rate" class="form-control" id="validationDefault04">
                                    @error('hourly_rate')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="input-file-now-custom-3">Profile Picture</label>
                                    <input type="file" name="image" id="input-file-now-custom-3" class="dropify" data-height="200"
                                        data-default-file="{{asset('assets/plugins/dropify/src/images/test-image-1.jpg')}}"  />
                                          @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationDefault01">Skills</label>
                                    <div class="tags-default">
                                        <input type="text" class="form-control" name="skills" data-role="tagsinput"
                                            placeholder="skills" />

                                    </div>
                                    @error('skills')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Email Notifications</label><br>
                                    <input name="notification_status" type="radio" id="radio_30"
                                        class="with-gap radio-col-green" />
                                    <label for="radio_30">Yes</label>
                                    <input name="notification_status" type="radio" id="radio_31"
                                        class="with-gap radio-col-red" checked />
                                    <label for="radio_31">No</label>
                                    @error('notification_status')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>


                            <button class="btn btn-success mt-5" type="submit"><i class="fa fa-check"></i> Save</button>
                            <button type="reset" class="btn btn-info mt-5">Rest</button>
                        </form>
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
<!-- Designation modal -->
<div id="responsive-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Designation</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <form id="designationForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Name</label>
                        <input type="text" name="name" class="form-control">
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

<!-- Department modal -->
<div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Department</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <form id="departmentForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Name <small class="text-danger">*</small></label>
                        <input type="text" name="name" class="form-control">
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


@push('employee-create-page-script')
 {{-- Password Toggle --}}
<script>
            function toggePassword() {
                var upass = document.getElementById('password1');
                var toggleBtn = document.getElementById('toggleBtn1');
                if (upass.type == "password") {
                    upass.type = "text";
                    $('#toggleBtn1').removeClass('fa fa-eye');
                    $('#toggleBtn1').addClass('fa fa-eye-slash');
                } else {
                    upass.type = "Password";
                   $('#toggleBtn1').removeClass('fa fa-eye-slash');
                    $('#toggleBtn1').addClass('fa fa-eye');
                }
            }

</script>



@endpush