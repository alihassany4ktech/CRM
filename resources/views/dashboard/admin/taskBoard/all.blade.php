@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
    .dropdown-menu {
        min-width: 5.4rem !important;
    }

    .grid-stack>.grid-stack-item>.grid-stack-item-content {
        margin: 0;
        position: absolute;
        top: 0;
        left: 10px;
        right: 10px;
        bottom: 0;
        width: 286%;
        z-index: 0 !important;
        overflow-x: hidden;
        overflow-y: auto;
    }

    @media only screen and (max-width: 600px) {
        .grid-stack>.grid-stack-item>.grid-stack-item-content {
            margin: 0;
            position: absolute;
            top: 0;
            left: 10px;
            right: 10px;
            bottom: 0;
            width: auto;
            z-index: 0 !important;
            overflow-x: hidden;
            overflow-y: auto;
        }
    }

    @media only screen and (max-width: 800px) {
        .grid-stack>.grid-stack-item>.grid-stack-item-content {
            margin: 0;
            position: absolute;
            top: 0;
            left: 10px;
            right: 10px;
            bottom: 0;
            width: auto;
            z-index: 0 !important;
            overflow-x: hidden;
            overflow-y: auto;
        }
    }

</style>
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
                    <li class="breadcrumb-item active">Task Board</li>
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
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> <i class="ti-clipboard"></i> Task Board</h4>
                        <a href=""  id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" id="addLeadsource"type="button"
                            class="btn btn-outline-primary m-t-10 float-right"
                            style="margin-right: 10px;font-size: 12px"><i class="ti-plus"
                                aria-hidden="true"  style="font-size: 12px"></i> Add Task Category</a>

                        <a href="{{route('admin.task.create')}}" type="button"
                            class="btn btn-outline-success m-t-10 float-right"
                            style="margin-right: 10px;font-size: 12px">
                            <i class="ti-plus" style="font-size: 12px"></i> Add New Task</a>
                            
                        <div class="row" style="margin-top: 100px">
                            <div class="col-md-6">
                                <h6 class="card-title text-success">COMPLETED </h4>
                                <div class="dropdown">
                                    <a href="#" type="button" class="text-inverse  float-right" style="margin-top: -37px"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti-settings" style="font-sixe:10px"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:0px">
                                        <a class="dropdown-item text-dark" href="{{route('admin.create.completed.task')}}" style="font-size: 12px">
                                            New Task</a>
                                    </div>
                                </div>
                           <div class="table-responsive m-t-30">
                                            <table class="table product-overview">
                                                <thead>
                                                    <tr>
                                                      <th>#</th>
                                                      <th>Task</th>
                                                      <th>Due Date</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                             @if ($completeTasks->isEmpty())
                                                      <tr><td colspan="4"><small>Record Not Found</small></td></tr>
                                                       @else    
                                    @foreach ($completeTasks as $key=>$value)
                                    <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$value->title}}</td>
                                          <td>{{$value->due_date}}</td>
                                          <td>
                                                 <a href="{{route('admin.task.show',['id'=>$value->id])}}" class="text-inverse p-r-10" type="button" data-toggle="tooltip" title="View"><i class="ti-eye"></i></a>
                                                <a href="{{route('admin.task.edit',['id'=>$value->id])}}" class="text-inverse p-r-10" type="button" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                                <a href="{{route('admin.task.delete',['id'=>$value->id])}}" class="text-inverse" title="Delete" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close"></i></a>

                                          
                                    </tr>
                                    @endforeach
                                                      @endif
                                                </tbody>
                                            </table>
                                        </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="card-title text-danger">INCOMPLETE</h6>
                                <div class="dropdown">
                                    <a href="#" type="button" class="text-inverse float-right" style="margin-top: -37px"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti-settings"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:0px">
                                        <a class="dropdown-item text-dark" href="{{route('admin.create.incomplete.task')}}" style="font-size: 12px">
                                            New Task</a>

                                    </div>
                                </div>
                                <div class="table-responsive m-t-30">
                                            <table class="table product-overview">
                                                <thead>
                                                    <tr>
                                                      <th>#</th>
                                                      <th>Task</th>
                                                      <th>Due Date</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                      @if ($inCompleteTasks->isEmpty())
                                                      <tr><td colspan="4"><small>Record Not Found</small></td></tr>
                                                       @else    
                                    @foreach ($inCompleteTasks as $key=>$value)
                                    <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$value->title}}</td>
                                          <td>{{$value->due_date}}</td>
                                          <td>
                                                <a href="{{route('admin.task.show',['id'=>$value->id])}}" class="text-inverse p-r-10" type="button" data-toggle="tooltip" title="View"><i class="ti-eye"></i></a>
                                                <a href="{{route('admin.task.edit',['id'=>$value->id])}}" class="text-inverse p-r-10" type="button" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>
                                                <a href="{{route('admin.task.delete',['id'=>$value->id])}}" class="text-inverse" title="Delete" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close"></i></a>
                                          </td>

                                          
                                    </tr>
                                    @endforeach
                                                      @endif
                          
                                                  
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- COMPLETED --}}
        <!-- footer -->
        <footer class="footer">
            © 2021 Webfabricant
        </footer>
                {{-- <td class="">
                                            <div class="dropdown">
                                                <button class="btn btn-light" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cogs" style="font-size: 10px"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.task.show',['id'=>$value->id])}}"
                                                        type="button" style="font-size: 12px;cursor: pointer"><i
                                                            class="fa fa-eye" style="font-size: 12px"></i> View</a>
                                                    <a class="dropdown-item text-dark" type="button"
                                                        style="font-size: 12px; cursor: pointer;"
                                                        href="{{route('admin.task.edit',['id'=>$value->id])}}"><i
                                                            class="fa fa-edit" style="font-size: 12px"></i> Edit</a>
                                                    <a class="dropdown-item text-dark"
                                                        href="{{route('admin.task.delete',['id'=>$value->id])}}"
                                                        type="button" style="font-size: 12px" id="delete"><i class="fa fa-times"
                                                            style="font-size: 12px"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td> --}}
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    <!-- Category modal -->
<div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Task Category</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
                  <div class="modal-body">
                       <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->category_name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteTaskCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-close"
                                            aria-hidden="true" style="font-size: 12px"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
            <div class="modal-body">

                <form id="formTaskCategory">
                    @csrf
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="recipient-name" name="category_name">
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
    @endsection
@push('lead-store-script')

<script>
    $(document).ready(function(){
       $('#formTaskCategory').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.task.category.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
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
     
         function deleteTaskCategory(elem) {
        var category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.task.category.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                category_id: category_id,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };
</script>

@endpush