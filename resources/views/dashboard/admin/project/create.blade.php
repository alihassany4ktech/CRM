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
                    <li class="breadcrumb-item"><a href="{{route('admin.projects')}}">Projects</a></li>
                    <li class="breadcrumb-item active">Add New Project</li>
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
                <h4 class="card-title">ADD PROJECT</h4>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PROJECT INFO</h4>
                        <form>
                            @csrf
                            <hr> <br>
                            <div class="form-row">
                                <div class="col-md-4 mb-3 mt-1">
                                    <label for="validationDefault03">Project Name <small class="text-danger">*</small></label>
                                    <input type="text" name="project_name" class="form-control" id="validationDefault03"
                                        placeholder="Name" required>
                                    @error('project_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault04">Project Category
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" id="addLeadsource"
                                            class="btn btn-sm  btn-outline-success"><i class="fa fa-plus"></i></a>
                                    </label>
                                     <select class="select2 form-control" style="width: 100%" name="project_category" required>
                                    <option>Select Category</option>
                                    @foreach ($projectsCategories as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                                    @error('source')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <?php 
                                $departments = App\Department::all();
                                 ?>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault04">Department 
                                        <a href="#" type="button" data-toggle="modal" data-target="#responsive-modal"
                                            id="addLeadsource" class="btn btn-sm  btn-outline-success"><i
                                                class="fa fa-plus"></i></a>
                                    </label>
                                     <select class="select2 form-control" style="width: 100%" name="department" required>
                                    <option>--</option>
                                    @foreach ($departments as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Start Date <small
                                            class="text-danger">*</small></label>
                                      <input type="date" name="start_date" class="form-control" id="validationDefault03"
                                        placeholder="" required>
                                </div>

                                <div class="col-md-4 mb-3" id="deadline_div">
                                    <label for="validationDefault03">Deadline <small
                                            class="text-danger">*</small></label>
                                    <input type="date" name="deadline" class="form-control" id="validationDefault03"
                                        placeholder="" required>
                                </div>
                                <div class="col-md-4 mb-3" style="margin-top: 38px">
                                    <input type="checkbox"  name="d_line" id="d_line" class="filled-in chk-col-light-blue" />
                                    <label for="d_line">Add project without deadline?</label>
                                </div>
                            </div>
                            <?php
                              $employees = App\User::where('type','=','Employee')->get();
                              $customers = App\User::where('type','=','Customer')->get();
                              $departments = App\Department::all();
                             ?>
                            <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                    <label for="validationDefault05">Add Project Members
                                           <small class="text-danger">*</small>
                                    </label>
                                    <select class="select2 m-b-10 select2-multiple" name="employee[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                                        @foreach ($employees as $row)
                                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                  
                                                </select>
                        
                                </div>
                            </div>
                                               <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault03">Project Summary</label>
                                    <textarea class="summernote" name="project_summary"></textarea>
                                    @error('project_summary')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault03">Note</label>
                                    <textarea class="summernote" name="note"></textarea>
                                    @error('note')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <h4 class="card-title">CLIENT INFO</h4>
                             <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                    <label for="validationDefault05">Select Client
                                    </label>
                                    <select class="select2 m-b-10 select2-multiple" name="customer[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                          @foreach ($customers as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                          @endforeach
                                                  
                                    </select>
                                </div>
                                      <div class="col-md-4 mb-3" style="margin-top: 38px">
                                    <input type="checkbox"  name="manage_task" id="manage_task" class="filled-in chk-col-light-blue" />
                                    <label for="manage_task">Client can manage tasks of this project</label>
                                </div>
                                <div class="col-md-4 mb-3" style="margin-top: 38px;display:none" id="task_notification" >
                                    <input type="checkbox"  name="task_notification" id="t_noti" class="filled-in chk-col-light-blue" checked/>
                                    <label for="t_noti">Send task notification to client?</label>
                                </div>
                            </div>
                            <h4 class="card-title">BUDGET INFO</h4>
                                <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                    <label for="validationDefault05">Project Budget
                                    </label>
                                       <input type="text" name="project_budget" class="form-control" id="validationDefault03"
                                        placeholder="" required>
                                </div>
                                     
                                    <div class="col-md-4 mb-3">
                                    <label for="validationDefault05">Currency
                                    </label>
                                       <select class="form-control" name="currency" id="">
                                        <option value="No Started">Dollers (USD)</option>
                                        <option value="In Progress">Pounds (GBS)</option>
                                        <option value="On Hold">Euros (EUR)</option>
                                        <option value="Canceled">Rupee (INR)</option>
                                    </select>
                                </div>
                                    <div class="col-md-4 mb-3">
                                    <label for="validationDefault05"> Hours Allocated</label>
                                       <input type="text" name="hours_allocated" class="form-control" id="validationDefault03"
                                        placeholder="" required>
                                </div>
                                 
                            </div>
                            <div class="form-row">
                                  <div class="col-md-4 mb-3">
                                    <label for="validationDefault04">Project Status</label>
                                    <select class="form-control" name="project_status" id="">
                                        <option value="No Started">No Started</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="On Hold">On Hold</option>
                                        <option value="Canceled">Canceled</option>
                                        <option value="Finished">Finished</option>
                                        <option value="Under Review">Under Review</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                  <div class="col-md-12">
                                        <input type="file" id="input-file-now" class="dropify" />
                                  </div>
                            </div><br>
                            <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Save</button>
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


<!-- Department modal -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
<!-- Category modal -->
<div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Project Category</h4>
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
                            @foreach ($projectsCategories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteProjectCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-body">

                <form id="formProjectyCategory">
                    @csrf
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
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
@push('lead-store-script')
<script>
    $(document).ready(function(){
        $('#d_line').click(function(){
            if($(this).prop("checked") == true){
                console.log("Checkbox is checked.");
                $('#deadline_div').hide();
            }
            else if($(this).prop("checked") == false){
                console.log("Checkbox is unchecked.");
                $('#deadline_div').show();
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
       $('#formProjectyCategory').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.project.category.store")}}',
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
<script>
    $(document).ready(function(){
          if($('#manage_task').prop("checked") == true){
                $('#task_notification').show();
            }
            else if($('#manage_task').prop("checked") == false){
                $('#task_notification').hide();
            }
        $('#manage_task').click(function(){
            if($(this).prop("checked") == true){
                $('#task_notification').show();
            }
            else if($(this).prop("checked") == false){
                $('#task_notification').hide();
            }
        });
    });
</script>

<script>
     
         function deleteProjectCategory(elem) {
        var category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.project.category.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                category_id: category_id,
            },

            success: function (data) {
                toastr.error(data.success);
            }
        });
    };
</script>
@endpush

