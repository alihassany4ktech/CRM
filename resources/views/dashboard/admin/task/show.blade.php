@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
    .inputWrapper {
        height: 25px;
        line-height: 26px;
        text-align: center;
        margin-top: 10px;
        width: 100px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border-radius: 3px;
        /*Using a background color, but you can use a background image to represent a button*/
        background-color: #f1c967;
        background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
        background: linear-gradient(to right, #bd7f0a, #f1c967);
    }

    .fileInput {
        cursor: pointer;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 99;
        /*This makes the button huge. If you want a bigger button, increase the font size*/
        font-size: 50px;
        /*Opacity settings for all browsers*/
        opacity: 0;
        -moz-opacity: 0;
        filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
    }

    /* input[type="file"] {
  display: block;
} */
    .imageThumb {
        height: 100px;
        width: 150px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;

    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;

    }

    .remove {
        display: block;
        background: rgb(129, 197, 224);
        /* border: 1px solid rgb(243, 133, 133); */
        color: white;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
    }

    .remove:hover {
        background: rgb(231, 83, 83);

    }

    .labels {
        background-color: indigo;
        color: white;
        padding: 0.5rem;
        font-family: sans-serif;
        border-radius: 0.3rem;
        cursor: pointer;
        margin-top: 1rem;
    }

    #kuchbe {
        height: 25px;
        line-height: 26px;
        color: white;
        text-align: center;
        margin-top: 10px;
        width: 100px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border-radius: 3px;
        font-size: 13px;
        /*Using a background color, but you can use a background image to represent a button*/


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
                    <li class="breadcrumb-item"><a href="{{route('admin.tasks')}}">Tasks</a></li>
                    <li class="breadcrumb-item active">Task Details</li>
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
            <div class="col-lg-12 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Overview</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#members" role="tab">Assignee</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#files" role="tab">Files</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#labels" role="tab">Labels</a> </li>
                        {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#leavs" role="tab">Leavs</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invoices" role="tab">Time Logs</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payments" role="tab">Documents</a> </li>
                        <li class="nav-item"> <a class="nav-link bg-light" data-toggle="tab" href="#editProfile" role="tab">Edit Profile</a> </li> --}}
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--profile -->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <h3 class="mt-3" style="text-align: center">Title: {{$task->title}}</h3>
                            <p style="text-align: center">Category: {{$task->category->category_name}}</p>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Estimate Hours</strong> <small
                                            style="color:#05a0fa">{{$task->hour}} hour</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r ">
                                        <strong>Estimate Minutes</strong> <small class="text-success">{{$task->mins}} mins</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r">
                                        <strong>isPrivate</strong> <small class="text-danger">{{$task->isPrivate == 1 ? 'Yes': 'No'}}</small>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Start Date</strong>
                                        <br>
                                        <small class="text-muted">{{date_format($task->start_date,"d/m/Y")}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>End Date</strong>
                                        <br>
                                        <small
                                            class="text-muted">{{date_format($task->due_date,"d/m/Y")}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Priority</strong>
                                        <br>
                                        <small class="text-muted">{{$task->priority}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Status</strong>
                                        <br>
                                        <small class="text-muted">{{$task->status}}</small>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="font-medium m-t-30">Description</h5>
                                <p>{!!$task->description!!}</p>
                            </div>
                        </div>
                        {{-- members  --}}
                        <div class="tab-pane" id="members" role="tabpanel">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <h4 class="card-title">ADD TASK ASSIGNEE</h4>
                                        <form id="assigneeform">    
                                            @csrf
                                            <input type="hidden" name="task_id" value="{{$task->id}}">
                                            <label for="validationDefault05">Add Task Assignee
                                                <small class="text-danger">*</small>
                                            </label>
                                            <select class="select2 m-b-10 select2-multiple" name="assignTo[]"
                                                class="form-control" style="width: 100%" multiple="multiple"
                                                data-placeholder="Choose" required>
                                                @foreach ($assignees as $row)
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
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
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
                                            @foreach ($task->users as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td><img src="{{asset($row->image) }}" alt="user"
                                                        class="img-circle" width="30" height="30"> {{$row->name}}
                                                </td>
                                                <td>{{$row->hourly_rate}}</td>
                                                <td>
                                                    @if ($row->getRoleNames()->isEmpty())
                                                    No Role
                                                    @else
                                                    {{$row->getRoleNames()[0]}}
                                                    @endif
                                                </td>
                                                <td class="">
                                                    <a href="{{route('admin.task.delete.assignee' , ['id'=>$row->id])}}"
                                                        id="deleteAssignee" type="button" class="btn btn-sm btn-danger"
                                                        data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
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
                                <a href="{{route('admin.task.add.file',['id'=>$task->id])}}" type="button"
                            class="btn btn-outline-success t-10 float-right" style="margin-right: 10px;font-size: 12px"><i
                                class="fa fa-plus" style="font-size: 12px"></i> Add More File</a>
                                <h4 class="card-title">Files</h4>
                                <div class="row">
                                    @if (count($task->files) > 0)
                                    @foreach ($task->files as $row)
                                    <div class="col-md-3 ml-4">
                                        <div class="d-flex flex-row">
                                           
                                            <button onclick="downloadFile(this)" id="{{$row->id}}"
                                                class="btn btn-sm btn-circle text-white mt-2 bg-success ml-2"
                                                data-toggle="tooltip" title="Download"><i class="fa fa-download"
                                                    style="font-size: 12px"></i></button>
                                            <button onclick="deleteFile(this)" id="{{$row->id}}"
                                                class="btn btn-sm btn-circle text-white mt-2 bg-danger ml-2"
                                                data-toggle="tooltip" title="Delete"><i class="fa fa-times"
                                                    style="font-size: 12px"></i></button>
                                            <div class="comment-text active w-100">
                                                <p> {{pathinfo($row->filename, PATHINFO_FILENAME) }}
                                                     @if ($row->link != null) &nbsp;
                                                <a href="{{$row->link}}" data-toggle="tooltip" title="File Link"  target="_blank"><i class="fa fa-link"
                                                    style="font-size: 12px"></i></a> 
                                            @endif
                                             
                                                </p>
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
                        {{-- labels  --}}
                        <div class="tab-pane" id="labels" role="tabpanel">
                            <div class="card-body">
                                   <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <h4 class="card-title">ADD TASK LABEL</h4>
                                        <form id="lableform">    
                                            @csrf
                                            <input type="hidden" name="task_id" value="{{$task->id}}">
                                            <label for="validationDefault05">Add Task Label
                                                <small class="text-danger">*</small>
                                            </label>
                                            <select class="select2 m-b-10 select2-multiple" name="label[]"
                                                class="form-control" style="width: 100%" multiple="multiple"
                                                data-placeholder="Choose" required>
                                                @foreach ($labels as $key => $value)
                                                             @if(isset($task->labels[$key] ))
                                                            <option value="{{$value->id}}" {{$task->labels[$key]->id == $value->id ? 'disabled' : ''}} >{{$value->label_name}} (already selected)</option>
                                                            @else
                                                                  <option value="{{$value->id}}">{{$value->label_name}}</option>
                                                            @endif
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
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width: 5px">#</th>
                                                <th style="width: 10px">Name</th>
                                                <th>Description</th>
                                                <th style="text-align: end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($task->labels as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td style="width: 10px"><span class="badge text-white p-2" style="background:{{$row->color}};">{{$row->label_name}}</span> </td>
                                                 <td >{!!ucwords($row->description)!!}</td>
                                                
                                                <td style="text-align: end">
                                                    <a href="{{route('admin.task.delete.label' , ['id'=>$row->id])}}"
                                                        id="deleteLabel" type="button" class="btn btn-sm btn-danger"
                                                        data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
<script>
    $(document).ready(function () {
        $('#assigneeform').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.task.assignee.add")}}',
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
    $(document).ready(function () {
        $('#lableform').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.task.label.add")}}',
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
    function downloadFile(elem) {
        var file_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.task.file.download') }}",
            method: "POST",
            dataType: "json",
            data: {
                _token: "{{ csrf_token() }}",
                file_id: file_id,
            },
            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };

</script>
<script>
    function deleteFile(elem) {
        var file_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.task.file.delete') }}",
            method: "POST",
            dataType: "json",
            data: {
                _token: "{{ csrf_token() }}",
                file_id: file_id,
            },
            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };

</script>
@endpush
