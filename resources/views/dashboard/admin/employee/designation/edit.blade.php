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
                    <li class="breadcrumb-item"><a href="{{route('admin.designations')}}">HR</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.designations')}}">Designations</a></li>
                    <li class="breadcrumb-item active">Update Designation</li>
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
                <h4 class="card-title">UPDATE DESIGNATIONS</h4>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.designation.update')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$designation->id}}">
                            <div class="form-row mt-2">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault03">Designation <small
                                            class="text-danger">*</small> </label>
                                    <input type="text" value="{{$designation->name}}" name="name" class="form-control" id="validationDefault03" required>
                                </div>
                            </div>
                            <?php
                              $employees = App\User::where('type','=','Employee')->where('designation_id','!=',$designation->id)->get();
                             ?>
                            <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                    <label for="validationDefault05">Add Employee</label>
                                    <select class="select2 m-b-10 select2-multiple" name="employee[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                                        @foreach ($employees as $row)
                                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                  
                                                </select>
                                                <small class="text-info">select employee</small>
                                </div>
                            </div>
                            <button class="btn btn-success mt-5" type="submit"><i class="fa fa-check"></i> Update</button>
                        </form>
                        <hr>
                        <h4 class="card-title">MEMBERS</h4>
                        <div class="row">
                              @if ($designation->members->isEmpty())
                               <div class="col-md-3 ml-4">
                              <small>No record found</small>
                                </div>
                              @else
                                       @foreach ($designation  ->members as $row)
                                  <div class="col-md-3 ml-4">
                                    <div class="d-flex flex-row">
                                    <span class="round" style=" margin-top:11px; background-color: white"><img src="{{asset($row->image)}}" alt="user" width="50"></span>
                                    <div class="comment-text active w-100">
                                        <h6>{{$row->name}}</h6>
                                        <small>{{$row->email}}</small>
                                     
                                    </div>
                                </div> 
                              </div>
                              @endforeach 
                              @endif
                           
                        </div>
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

@endpush