@extends('dashboard.user.client.layouts.includes')
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
                    <li class="breadcrumb-item"><a href="{{route('client.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('client.projects')}}">Projects</a></li>
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
                        <div class="d-flex flex-wrap">
                              <div>
                                    <h2 class="card-title">Members</h2>
                              </div>
                              <div class="ml-auto">
                                    <ul class="list-inline">
                                          <li>
                                                <span class="btn btn-sm btn-circle  btn-success text-white">{{count($project->members)}}</span> 
                                          </li>
                                          
                                    </ul>
                              </div>
                        </div>
                        <div>
                              @foreach ($project->members as $row)
                              <img data-toggle="tooltip" data-original-title="{{ ucwords($row->user->name) }}" src="{{asset($row->user->image) }}" alt="user"
                              class="img-circle" width="40" height="40">
                              @endforeach  
                        </div>
                        <div class="row mt-4">
                        <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body" style="background-color: #ffffff">
                                <div class="d-flex flex-row">
                                    <span class="btn btn-sm btn-circle  btn-success text-white">0</span> 
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="m-b-0 font-light"> Open Tasks</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body" style="background-color: ffffff">
                                <div class="d-flex flex-row">
                                    <span class="btn btn-sm btn-circle  btn-danger text-white">{{$daysLeft}}</span> 
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="m-b-0 font-light"> Days Left</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body" style="background-color: ffffff">
                                <div class="d-flex flex-row">
                                    <span class="btn btn-sm btn-circle  btn-primary text-white">0</span> 
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="m-b-0 font-light">Hours Logged</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                   <div class="card-header">
                                <h5 class="card-title m-b-0">Activity Timeline</h5>
                            </div>
                            <div class="row">
                                    <div class="col-md-12 p-20">
                                        <ul class="list-unstyled">
                                            <li class="media">
                                                <i class="fa fa-circle m-r-5 text-success"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">{{$project->project_name}} project details saved.</h6> <small>2 weeks ago</small>
                                                </div>
                                            </li>
                                      
                                        </ul>
                                    </div>
                         </div>
                  </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Overview</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#milestones" role="tab">Milestones</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#files" role="tab">Files</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#expenses" role="tab">Expenses</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invoices" role="tab">Invoices</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#timelog" role="tab">Time Logs</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payments" role="tab">Payments</a> </li>                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--profile -->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <h3 class="mt-3" style="text-align: center">Projects #{{ $project->id }} - {{ucwords($project->project_name)}}</h3>
                            <p style="text-align: center">Category: {{$project->category->name}}</p>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Project Budget</strong> <small
                                            style="color:#05a0fa">${{$project->project_budget}}</small>
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
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Client Name</strong>
                                        <br>
                                        <small class="text-muted">{{$project->client->name}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Client Email</strong>
                                        <br>
                                        <small
                                            class="text-muted">
                                            <a 
                                href="mailto:{{$project->client->email}}">{{$project->client->email}}</a>
                                          </small>
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
                        {{-- milestones  --}}
                         <div class="tab-pane" id="milestones" role="tabpanel">
                            <div class="card-body">
                                <p>milestones</p>
                            </div>
                        </div>
                        {{-- files  --}}
                        <div class="tab-pane" id="files" role="tabpanel">
                            <div class="card-body">
                                <a href="{{route('client.project.add.file',['id'=>$project->id])}}" type="button"
                            class="btn btn-outline-success t-10 float-right" style="margin-right: 10px;font-size: 12px"><i
                                class="ti-plus" style="font-size: 12px"></i> Add More File</a>
                                <h4 class="card-title">Files</h4>
                                <div class="row">
                                    @if (count($project->files) > 0)
                                    @foreach ($project->files as $row)
                                    <div class="col-md-3 ml-4">
                                        <div class="d-flex flex-row">
                                           
                                            @if ($row->link == null)
                                                <button onclick="downloadFile(this)" id="{{$row->id}}"
                                                class="btn btn-sm btn-circle text-white mt-2 bg-success ml-2"
                                                data-toggle="tooltip" title="Download"><i class="ti-download"
                                                    style="font-size: 12px"></i></button>
                                            @endif

                                                      @if ($row->user_id == Auth::guard('web')->user()->id)
                                                      <button onclick="deleteFile(this)" id="{{$row->id}}"
                                                class="btn btn-sm btn-circle text-white mt-2 bg-danger ml-2"
                                                data-toggle="tooltip" title="Delete"><i class="ti-close"
                                                    style="font-size: 12px"></i></button>
                                                          
                                                      @endif

                                            <div class="comment-text active w-100">
                                                <p> {{pathinfo($row->filename, PATHINFO_FILENAME) }} 
                                                     @if ($row->link != null) &nbsp;
                                                <a href="{{$row->link}}" data-toggle="tooltip" title="File Link"  target="_blank"><i class="ti-link"
                                                    style="font-size: 12px"></i></a> 
                                            @endif
                                             <br><small class="text-success" style="font-size: 10px">{{$row->created_at->diffForHumans()}}</small>
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
                        {{-- expenses  --}}
                        <div class="tab-pane" id="expenses" role="tabpanel">
                            <div class="card-body">
                                 <h4 class="card-title">Expenses </h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Purchased From</th>
                                                <th>Employees</th>
                                                <th>Purchase Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($project->expenses as $row)
                                                <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$row->item_name}}</td>
                                                <td>${{$row->price}} </td>
                                                <td>{{$row->purchase_from != null ? $row->purchase_from : 'No Data'}}</td>
                                                
                                                <td>{{$row->user->name}}</td>
                                                 <td>{{ $row->purchase_date !=null ? $row->purchase_date->format('d-m-Y'):'No Date'}}</td>
                                                <td><small class="label"
                                                style="background-color: #edf9f7;color:#33cea8">{{$row->status}}</small></td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- invoices  --}}
                        <div class="tab-pane" id="invoices" role="tabpanel">
                            <div class="card-body">
                                <p>invoices</p>
                            </div>
                        </div>
                        {{-- timelog  --}}
                        <div class="tab-pane" id="timelog" role="tabpanel">
                            <div class="card-body">
                                <p>Time Logs</p>
                            </div>
                        </div>
                        {{-- payments  --}}
                        <div class="tab-pane" id="payments" role="tabpanel">
                            <div class="card-body">
                                payments
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
@push('client-product-details-script')
<script>
    function downloadFile(elem) {
        var file_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.project.file.download') }}",
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
            url: "{{ route('client.project.file.delete') }}",
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
