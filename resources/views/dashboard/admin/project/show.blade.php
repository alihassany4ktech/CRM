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
                    <li class="breadcrumb-item"><a href="{{route('admin.projects')}}">Project</a></li>
                    <li class="breadcrumb-item active">Project Details</li>
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
                            <img src="{{$project->client->image == '0' ? asset('assets/images/users/5.jpg'):asset($project->client->image)}}"
                                class="img-circle" width="150" />
                            <h4 class="card-title m-t-10">{{$project->client->name}}</h4>
                            <small>(client)</small>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted p-t-10 db">Company</small>
                        <h6>{{$project->client->company}}</h6>
                        <small class="text-muted p-t-10 db">Email Address</small>
                        <h6><a class="card-title"
                                href="mailto:{{$project->client->email}}">{{$project->client->email}}</a></h6>
                        <small class="text-muted p-t-10 db">Phone</small>
                        <h6>{{$project->client->phone}}</h6>
                        <small class="text-muted p-t-10 db">Address</small>
                        <h6>{{$project->client->address}}</h6>
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
                                role="tab">Overview</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#members"
                                role="tab">Members</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#files"
                                role="tab">Files</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Tasks</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#leavs" role="tab">Leavs</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invoices" role="tab">Time
                                Logs</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payments"
                                role="tab">Documents</a> </li>
                        <li class="nav-item"> <a class="nav-link bg-light" data-toggle="tab" href="#editProfile"
                                role="tab">Edit Profile</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!--profile -->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <h3 class="mt-3" style="text-align: center">Name: {{$project->project_name}}</h3>
                            <p style="text-align: center">Category: {{$project->category->name}}</p>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Project Budget</strong> <small
                                            style="color:#05a0fa">${{$project->project_budget}}</small>

                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r ">
                                        <strong>Earnings</strong> <small class="text-success">$0</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>Hours Logged</strong> <small class="text-danger">0</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <strong>Expenses</strong> <small class="text-warning">$0</small>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Start Date</strong>
                                        <br>
                                        <small class="text-muted">{{date_format($project->start_date,"d/m/Y")}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>End Date</strong>
                                        <br>
                                        <small
                                            class="text-muted">{{$project->deadline != null?  date_format($project->deadline,"d/m/Y") : '-'}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Department</strong>
                                        <br>
                                        <small class="text-muted">{{$project->department}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Hours Allocated</strong>
                                        <br>
                                        <small class="text-muted">{{$project->hours_allocated}}</small>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="font-medium m-t-30">Project Summary</h5>
                                <p>{!!$project->project_summary!!}</p>
                                <hr>
                                <h5 class="font-medium m-t-30">Note</h5>
                                <p>{!!$project->notes!!}</p>
                            </div>
                        </div>
                        {{-- members  --}}
                        <div class="tab-pane" id="members" role="tabpanel">
                            <div class="card-body">
                                

                                
                                <div class="form-row">
                                      
                                    <div class="col-md-6 mb-3">
                                          <h4 class="card-title">ADD PROJECT MEMBERS</h4>
                                        <form id="pmform"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                            @csrf
                                             <label for="validationDefault05">Add Project Members
                                           <small class="text-danger">*</small>
                                    </label>
                                    <select class="select2 m-b-10 select2-multiple" name="employee[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                                        @foreach ($employees as $row)
                                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                  
                                    </select>
                                                 @error('employee')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            <br> <br>
                                            <button class="btn btn-success" type="submit">Save</button>
                                        </form>
                                    </div>
                                </div>
 <div class="table-responsive m-t-40">

                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Hourly Rate</th>
                                        <th>User Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($project->members as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset($row->user->image) }}" alt="user" class="img-circle" width="30" height="30"> {{$row->user->name}}</td>
                                        <td>{{$row->user->hourly_rate}}</td>
                                           <td>
                                            @if ($row->user->getRoleNames()->isEmpty())
                                            No Role
                                            @else
                                            {{$row->user->getRoleNames()[0]}}
                                            @endif

                                        </td>
                                          <td class="">
                                        
                                            <a href="{{route('admin.project.delete.member' , ['id'=>$row->id])}}" id="deleteMember" type="button" class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-times" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                            </div>
                        </div>
                        {{-- files  --}}
                        <div class="tab-pane" id="files" role="tabpanel">
                            <div class="card-body">
                                <h4 class="card-title">Files</h4>
                                <?php 
                                $files = count(json_decode($project->file));
                                ?>
                                {{-- {{dd($files)}} --}}
                        <div class="row">
                              @if ($files > 0)
                                  @foreach (json_decode($project->file) as $row)
                                    <div class="col-md-3 ml-4">
                                    <div class="d-flex flex-row">
                                    <span class="btn btn-circle text-white mt-2 bg-success"><i class="fa fa-file"></i></span>
                                    <div class="comment-text active w-100">
                                        <small> {{pathinfo($row, PATHINFO_FILENAME) }}</small>
                                    </div>
      
                                </div> 
                              </div>
                              @endforeach
                              @else
                                    
                               <div class="col-md-3 ml-4">
                              <small>No record found</small>
                                </div>
                              @endif
                           
                        </div>
                            </div>
                        </div>
                        {{-- tasks  --}}
                        <div class="tab-pane" id="tasks" role="tabpanel">
                            <div class="card-body">
                                <p>tasks</p>
                            </div>
                        </div>
                        {{-- leavs  --}}
                        <div class="tab-pane" id="leavs" role="tabpanel">
                            <div class="card-body">
                                <p>leavs</p>
                            </div>
                        </div>
                        {{-- invoices  --}}
                        <div class="tab-pane" id="invoices" role="tabpanel">
                            <div class="card-body">
                                <p>Time Logs</p>
                            </div>
                        </div>
                        {{-- payments  --}}
                        <div class="tab-pane" id="payments" role="tabpanel">
                            <div class="card-body">
                               sa
                        </div>
                        </div>
                        {{-- settings --}}
                              <div class="tab-pane" id="editProfile" role="tabpanel">
                                        <div class="card-body">
                                <p>edit</p>
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
@endsection

@push('employee-edit-page-script')
{{-- Save Designation --}}
<script>
    $(document).ready(function () {
        $('#pmform').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.project.member.add")}}',
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
