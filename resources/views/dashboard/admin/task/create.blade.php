@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

  #multistep_form fieldset:not(:first-of-type) {
            display: none;
        }

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
                      <li class="breadcrumb-item"><a href="{{route('admin.projects')}}">Work</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.tasks')}}">Tasks</a></li>
                    <li class="breadcrumb-item active">Add New Task</li>
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
        <div class="row">
            <div class="col-12">
                <h4 class="card-title">ADD TASK</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.task.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <br>
                            <div class="form-row">
                                <div class="col-md-6 mb-3 mt-1">
                                    <label for="validationDefault03">Project <small class="text-danger">*</small></label>
                                       <select class="select2 form-control" style="width: 100%" name="project" >
                                    <option value="">--</option>
                                    @foreach ($projects as $row)
                                        <option value="{{$row->id}}">{{$row->project_name}}</option>

                                    @endforeach
                                </select>
                                    @error('project')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault04">Task Category
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" id="addLeadsource"
                                            class="btn btn-sm  btn-outline-success"><i class="ti-plus"></i></a>
                                    </label>
                                     <select class="select2 form-control" style="width: 100%" name="task_category" >
                                    <option value="">No task category added</option>
                                    @foreach ($categories as $row)
                                        <option value="{{$row->id}}">{{$row->category_name}}</option>
                                    @endforeach
                                </select>
                                    @error('task_category')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault03">Title <small
                                            class="text-danger">*</small></label>
                                      <input type="text" name="title" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault03">Description</label>
                                    <textarea class="summernote" name="description"></textarea>
                                    @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-row mt-4">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Start Date <small
                                            class="text-danger">*</small></label>
                                      <input type="date" name="start_date" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('start_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                

                                <div class="col-md-4 mb-3" id="deadline_div">
                                    <label for="validationDefault03">Due Date <small
                                            class="text-danger">*</small></label>
                                    <input type="date" name="duedate" class="form-control" id="validationDefault03"
                                        placeholder="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Assigned To<small class="text-danger"> * you can select multiple</small></label>
                                   <select class="select2 m-b-10 select2-multiple" name="assignTo[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        @foreach ($employees as $row)
                                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                  
                                                </select>
                                    @error('assignTo')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                    <div class="col-md-12 mb-3">
                                    <label for="validationDefault04">Label
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal3" id="addLeadsource"
                                            class="btn btn-sm  btn-outline-success"><i class="ti-plus"></i> Add Task Label</a><small class="text-danger"> * you can select multiple</small>
                                    </label>
                                  
                                <select class="select2 m-b-10 select2-multiple" name="label[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                        @foreach ($labelList as $row)
                                            <option value="{{$row->id}}">{{$row->label_name}}</option>
                                        @endforeach
                                                  
                                        </select>
                                    @error('label')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                              <div class="form-row">
                                <div class="col-md-2 mb-2" style="margin-top: 38px">
                                    <input type="checkbox" id="md_checkbox_1" class="chk-col-red" name="make_private"/>
                                  <label for="md_checkbox_1">Make Prvate <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:100px;"><span class="tooltip-inner2" style="font-size: 12px">Private Tasks are only visible to admin, assignor and assignee.</span></span></span></span></label>
                                </div>
                                 <div class="col-md-2 mb-3" style="margin-top: 38px">
                                    <input type="checkbox" id="md_checkbox_2" class="chk-col-pink" name="billable"/>
                                  <label for="md_checkbox_2">Billable  <span class="mytooltip"> <i class="fa fa-info-circle text-dark" style="font-size: 12px" aria-hidden="true" ></i><span class="tooltip-content5"><span class="tooltip-text3" style="height:100px;"><span class="tooltip-inner2" style="font-size: 12px">Invoice can be generated for this task's time log.</span></span></span></span></label>
                                </div>
                                <div class="col-md-2 mb-3" style="margin-top: 38px">
                                    <input type="checkbox" id="md_checkbox_3" class="chk-col-indigo" name="set_time"/>
                                  <label for="md_checkbox_3">Set time estimate</label>
                                </div>
                                <div class="col-md-3 mb-3" style="margin-top: 35px" id="setTime">
                                    <label>Hour</label>
                                    <input type="number" class="form-control" width="5px" name="hour"/> 
                                  
                                </div>
                                <div class="col-md-3 mb-3" style="margin-top: 35px" id="setMint">
                                    <label>Mins</label>
                                    <input type="number" class="form-control" width="5px" name="mnt"/> 
                                  
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3" style="margin-top: 38px">
                                    <label for="validationDefault04">Status</label>
                                     <select class="select2 form-control" style="width: 100%" name="status" >
                             
                                        <option value="Incomplete">Incomplete</option>
                                        <option value="Completed">Completed</option>
                                    
                                </select>
                                    @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3" style="margin-top: 38px">
                                    <label for="validationDefault03">Priority</label> <br>
                                     <input name="priority_status" type="radio" id="radio_30" value="High" class="with-gap radio-col-green" checked/>
                                                <label for="radio_30" class="text-success">High</label>
                                                <input name="priority_status" type="radio" value="Medium" id="radio_31" class="with-gap radio-col-orange"  />
                                                <label for="radio_31" style="color: orange">Medium</label>
                                                 <input name="priority_status" type="radio" value="Low" id="radio_32" class="with-gap radio-col-red" />
                                                <label for="radio_32" class="text-danger">Low</label>
                                                
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">             
                                    <div class="col-12" style="margin-left: 14px">
                                            <label class="bg-success" id="kuchbe" for="files">Choose files</label>
                                            <hr />
                                            <input type="file" id="files" name="files[]" multiple
                                                autocomplete="off" style="display: none" />
                                    </div>
                                </div>
                            </div>
                         
                            <br>
                            <button class="btn btn-success" type="submit"><i class="ti-check"></i> Save</button>
                            <button type="reset" class="btn btn-info">Rest</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->

    <footer class="footer">
        © 2021 Webfabricant
    </footer>

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
                <button type="button" style="color:white" class="close" data-dismiss="modal" aria-label="Close"><span
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
                                    <button onclick="deleteTaskCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="ti-close"
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
                <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ti-check"></i>
                    Save</button>
            </div>
             </form>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- label modal -->
<div id="responsive-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add Task Label</h4>
                <button type="button" style="color: white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form id="formTaskLabel">
                    @csrf
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="recipient-name" name="name" required>
                    </div>
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Description</label>
                       <textarea name="description" id="" class="form-control" cols="30" rows="1" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Color <small class="text-danger">* Choose any color</small></label>

                         <div class="col-md-3">
                        <input type="color" class="form-control" id="recipient-name" name="color" required>
                         </div>
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
<!-- /.modal -->
@endsection
@push('lead-store-script')
<script>
    $(document).ready(function(){
          $('#setTime').hide();
          $('#setMint').hide();
        $('#md_checkbox_3').click(function(){
            if($(this).prop("checked") == true){
                $('#setTime').show();
                $('#setMint').show();
            }
            else if($(this).prop("checked") == false){
                $('#setTime').hide();
                $('#setMint').hide();
            }
        });
    });
</script>
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
    $(document).ready(function(){
       $('#formTaskLabel').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.task.label.store")}}',
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


      <script>
        $(document).ready(function () {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function (e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });

    </script>
@endpush

