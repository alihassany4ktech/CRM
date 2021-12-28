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
                    <li class="breadcrumb-item"><a href="{{route('admin.employees')}}">employees</a></li>
                    <li class="breadcrumb-item active">employee Details</li>
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-20">
                            <img src="{{$employee->image == '0' ? asset('assets/images/users/5.jpg'):asset($employee->image)}}"
                                class="img-circle" width="150" />
                            <h4 class="card-title m-t-10">{{$employee->name}}</h4>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted p-t-10 db">Email Address</small>
                        <h6><a class="card-title" href="mailto:{{$employee->email}}">{{$employee->email}}</a></h6>
                        <small class="text-muted p-t-10 db">Phone</small>
                        <h6>{{$employee->phone}}</h6>
                        <small class="text-muted p-t-10 db">Address</small>
                        <h6>{{$employee->address}}</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile"
                                role="tab">Profile</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#projects"
                                role="tab">Projects</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invoices"
                                role="tab">Invoices</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payments"
                                role="tab">Payments</a> </li>
                        <li class="nav-item"> <a class="nav-link text-info" style="text-decoration: none"
                                data-toggle="tab" href="#editProfile" role="tab">Edit Profile</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!--profile -->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Total Projects</strong>
                                        <br>
                                        <p class="text-muted">0</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Unpaid Invoices</strong>
                                        <br>
                                        <p class="text-muted">0</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Earnings</strong>
                                        <br>
                                        <p class="text-muted">0</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Total Contracts</strong>
                                        <br>
                                        <p class="text-muted">0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Designation</strong>
                                        <br>
                                        <p class="text-muted">{{$employee->designation->name}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Department</strong>
                                        <br>
                                        <p class="text-muted">{{$employee->department->name}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Joining Date</strong>
                                        <br>
                                        <p class="text-muted">{{$employee->joining_date}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Gender</strong>
                                        <br>
                                        <p class="text-muted">{{$employee->gender}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Slack Username</strong>
                                        <br>
                                        <p class="text-muted">{{$employee->gender}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Hourly Rate</strong>
                                        <br>
                                        <p class="text-muted">{{$employee->hourly_rate}}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Skills</strong>
                                        <br>
                                        <p class="text-muted">
                                            <?php
                                              $skills = explode(',',$employee->skills); 
                                                 ?>
                                            {{-- {{dd($skills)}} --}}
                                            @foreach ($skills as $row)
                                            {{-- <ul><li> </li></ul> --}}
                                            <span class="badge badge-info">{{$row}}</span>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="font-medium m-t-30">Role</h5>

                                @if ($employee->getRoleNames()->isEmpty())
                                <p>No Role</p>
                                @else
                                <p>{{$employee->getRoleNames()[0]}}</p>
                                @endif
                                <hr>
                                <h5 class="font-medium m-t-30">Permissions</h5>

                                @if ($employee->getAllPermissions()->isEmpty())
                                <p> No Permissions</p>
                                @else
                                @foreach ($employee->getAllPermissions() as $permission)

                                <a href="#" class="badge badge-info"> {{$permission->name}}</a>
                                @endforeach
                                @endif



                            </div>
                        </div>
                        {{-- projects  --}}
                        <div class="tab-pane" id="projects" role="tabpanel">
                            <div class="card-body">
                                <p>projects</p>
                            </div>
                        </div>
                        {{-- invoices  --}}
                        <div class="tab-pane" id="invoices" role="tabpanel">
                            <div class="card-body">
                                <p>invoices</p>
                            </div>
                        </div>
                        {{-- payments  --}}
                        <div class="tab-pane" id="payments" role="tabpanel">
                            <div class="card-body">
                                <p>payments</p>
                            </div>
                        </div>
                        {{-- settings --}}
                        <div class="tab-pane" id="editProfile" role="tabpanel">
                            <div class="card-body">
                                <h4 class="card-title">EDIT EMPLOYEE INFO</h4>
                                <form method="POST" action="{{route('admin.employee.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault03">Employee ID <small
                                                    class="text-danger">*</small> <i class="fa fa-info-circle"
                                                    style="font-size: 12px" aria-hidden="true" data-toggle="tooltip"
                                                    title="Employee ID id the unique ID distributed to emplyees"></i></label>
                                            <input type="number" min="1" name="employee_id"  class="form-control"
                                                id="validationDefault03" placeholder="2" value="{{(int)trim($employee->employee_id,'emp-')}}">
                                            @error('employee_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault04">Employee Name <small
                                                    class="text-danger">*</small></label>
                                            <input type="text" name="name" value="{{$employee->name}}" class="form-control" id="validationDefault04"
                                                placeholder="employee name">
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault04">Employee Email <small
                                                    class="text-danger">*</small></label>
                                            <input type="email" name="email" value="{{$employee->email}}" class="form-control"
                                                id="validationDefault04" placeholder="employee email">
                                            <small>Employee will login using this email.</small><br>
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault05">Password <small
                                                    class="text-danger">*</small></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password1"
                                                    placeholder="password" aria-describedby="basic-addon2"
                                                    name="password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><a type="button"
                                                            style="cursor:pointer" class="text-dark"><span
                                                                class="fa fa-eye" style="font-size: 11px"
                                                                id="toggleBtn1"
                                                                onclick="toggePassword()"></span></a></span>
                                                </div>
                                            </div>
                                            <small>Employee will login using this password.</small><br>
                                            @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> <br>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Designation
                                                <a href="#" id="addLeadsource" data-toggle="modal"
                                                    data-target="#responsive-modal3"
                                                    class="btn btn-sm  btn-outline-success"><i class="fa fa-plus"></i>
                                                    Manage Designation</a> <small class="text-danger">*</small>
                                            </label>
                                            <select class="select2 form-control" style="width: 100%" name="designation">
                                                @foreach ($designations as $row)
                                                <option value="{{$row->id}}" {{ $row->name == $employee->designation->name ? 'selected' : '' }} >{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('designation')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">Department
                                                <a href="#" id="addLeadsource" data-toggle="modal"
                                                    data-target="#responsive-modal2"
                                                    class="btn btn-sm  btn-outline-success"><i class="fa fa-plus"></i>
                                                    Manage Department</a> <small class="text-danger">*</small>
                                            </label>
                                            <select class="select2 form-control" style="width: 100%" name="department">
        
                                                @foreach ($departments as $row)
                                                <option value="{{$row->id}}" {{ $row->name == $employee->department->name ? 'selected' : '' }}>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> <br>

                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault03"><i class="fab fa-slack-hash"
                                                    style="font-size:12px"></i> Slack Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                        id="validationTooltipUsernamePrepend">@</span>
                                                </div>
                                                <input type="text" value="{{$employee->slack_username}}" class="form-control" id="validationTooltipUsername"
                                                    name="slack_username" placeholder="example@example.com">
                                            </div>
                                            @error('slack_username')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault04">Joining Date</label>
                                            <input type="date"  value="{{$employee->joining_date}}" name="joining_date" class="form-control"
                                                id="validationDefault04">
                                            @error('joining_date')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault05">Exit Date</label>
                                            <input type="date" value="{{$employee->exit_date}}" name="exit_date" class="form-control"
                                                id="validationDefault05">
                                            @error('exit_date')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault05">Gender</label>
                                            <select name="gender" class="form-control" id="">
                                                @if ($employee->gender == 'Male')
                                                <option value="Male" selected>Male</option>
                                                @elseif($employee->gender == 'Female')
                                                 <option value="Female" selected>Female</option>
                                                    @else 
                                                      <option value="Others" selected>Others</option>
                                                @endif
                                                
                                               
                                              
                                            </select>
                                            @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> <br>

                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationDefault01">Address</label>
                                            <textarea name="address" class="form-control" id="" cols="1" rows="2"
                                                placeholder="write...">{{$employee->address}}</textarea>
                                            @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> <br>
                                    <?php
                                          $roles  = Spatie\Permission\Models\Role::all(); 
                                          $permissions = Spatie\Permission\Models\Permission::all();
                                     ?> 
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault01">Log In</label>
                                            <select name="login_status" class="selectpicker form-control"
                                                data-style="form-control btn-secondary">
                                                <option value="{{$employee->login}}" selected>{{$employee->login}}
                                                </option>
                                                @if ($employee->login == 'Enable')
                                                <option class="Disable">Disable</option>
                                                @else
                                                <option value="Enable">Enable</option>
                                                @endif
                                            </select>
                                            @error('login_status')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault01">Role</label>
                                            <select name="role_name" class="selectpicker form-control"
                                                data-style="form-control btn-secondary">
                                                @if ($employee->getRoleNames()->isEmpty())
                                                <option disabled selected>No Role</option>
                                                @else
                                                <option value="{{$employee->getRoleNames()[0]}}" selected>
                                                    {{$employee->getRoleNames()[0]}}</option>
                                                @foreach ($roles as $role)
                                                @if ($employee->getRoleNames()[0] == $role->name )
                                                <option style="display: none" value="{{$role->name}}">{{$role->name}}
                                                </option>
                                                @else
                                                <option value="{{$role->name}}">{{$role->name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault03">Mobile</label>
                                            <input type="text" name="cell" value="{{$employee->phone}}" class="form-control" id="validationDefault03"
                                                placeholder="+">
                                            @error('cell')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationDefault04">Hourly Rate (USD)</label>
                                            <input type="text" name="hourly_rate"  value="{{$employee->hourly_rate}}" class="form-control"
                                                id="validationDefault04">
                                            @error('hourly_rate')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        </div><br>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="input-file-now">Profile Picture</label>
                                                <input type="file" id="input-file-now" class="dropify"
                                                    data-default-file="{{asset($employee->image)}}"
                                                    name="image" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationDefault01">Skills</label>
                                                <div class="tags-default">
                                                    <input type="text" class="form-control" value='{{$employee->skills}}' name="skills"
                                                        data-role="tagsinput" placeholder="skills" />

                                                </div>
                                                @error('skills')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="validationDefault04">Email Notifications</label><br>
                                                @if ($employee->notification_status == 'yes')
                                                <input name="notification_status" value="Enable" type="radio"
                                                    id="radio_30" class="with-gap radio-col-green" checked />
                                                <label for="radio_30">Yes</label>
                                                <input name="notification_status" value="Disable" type="radio"
                                                    id="radio_31" class="with-gap radio-col-red" />

                                                <label for="radio_31">No</label>
                                                @error('notification_status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @else
                                                <input name="notification_status" value="yes" type="radio" id="radio_30"
                                                    class="with-gap radio-col-green" />
                                                <label for="radio_30">Yes</label>

                                                <input name="notification_status" value="no" type="radio" id="radio_31"
                                                    class="with-gap radio-col-red" checked />

                                                <label for="radio_31">No</label>
                                                @error('notification_status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @endif
                                            </div>


                                        </div>

                                    


                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

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
@endsection

@push('employee-edit-page-script')
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

{{-- Save Designation --}}
<script>
    $(document).ready(function(){
       $('#designationForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.employee.designation.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                 success: function (data) {
                  if (data.success) {
                        toastr.success(data.success);
                    }
                }
            });
     });
    });
</script>
{{-- Save Department --}}
<script>
    $(document).ready(function(){
       $('#departmentForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.employee.department.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                 success: function (data) {
                  if (data.success) {
                        toastr.success(data.success);
                    }
                }
            });
     });
    });
</script>
@endpush
