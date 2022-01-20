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
                    <li class="breadcrumb-item"><a href="{{route('admin.notice-boards')}}">Notice Board</a></li>
                    <li class="breadcrumb-item active">Update Notice</li>
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
                          <h4 class="card-title">UPDATE NOTICE</h4>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.notice-board.update')}}">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$notice->id}}">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                          <label for="validationDefault01">Notice Heading<small class="text-danger"> *</small></label>
                                          <input type="text" name="heading" class="form-control" id="validationDefault01" value="{{$notice->heading}}">
                                              @error('heading')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                      
                              
                                    </div>
                                      <div class="form-row">
                                    <div class="col-md-4 mb-3" style="margin-top: 38px">
                                     <input name="to" type="radio" id="radio_30" value="Employee" @if($notice->to == 'Employee') checked @endif class="with-gap radio-col-green"/>
                                                <label for="radio_30" class="text-success">To Employee</label>
                                                <input name="to" type="radio" id="radio_32" value="Individual Employee"  @if($notice->to == 'Individual Employee') checked @endif class="with-gap radio-col-red"/>
                                                <label for="radio_32" class="text-danger">To Individual Employee</label>
                                                <input name="to" type="radio" value="Client" id="radio_31" class="with-gap radio-col-orange" @if($notice->to == 'Client') checked @endif  />
                                                <label for="radio_31" style="color: orange">To Clients</label>
                  
                                                
                                </div>
                                    </div>
                                    <div class="form-row" id="departmenet">
                                        <div class="col-md-12 mb-5">
                                          <label for="validationDefault01">Department</label>
                                          <select class="select2 form-control" style="width: 100%" name="department" >
                                                <option value="" selected>--</option>
                    
                                        @foreach ($departments as $row)
                                            <option value="{{$row->id}}" {{ isset($notice->department_id) && $notice->department_id == $row->id ? 'selected' : '' }}>{{$row->name}}</option>
                                        @endforeach
                                          </select>
                                              @error('department')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="form-row" id="employee">
                                        <div class="col-md-12 mb-5">
                                          <label for="validationDefault01">Employee</label>
                                          <select class="select2 form-control" style="width: 100%" name="employee" >
                                                <option value="" selected>--</option>
                    
                                        @foreach ($employees as $row)
                                            <option value="{{$row->id}}" {{ isset($notice->user_id) && $notice->user_id == $row->id ? 'selected' : '' }}>{{$row->name}}</option>
                                        @endforeach
                                          </select>
                                              @error('employee')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                          <label for="validationDefault03">Notice Details</label>
                                           <textarea class="summernote" name="description">{{$notice->description}}</textarea>
                                             @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                              
                                    </div>
                                  <br>
                                    <button class="btn btn-success" type="submit"><i class="ti-check"></i> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2021 Webfabricant
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection

@push('noticeboard-page-script')
<script>
    $(document).ready(function(){
            if($('#radio_30').prop("checked") == true){
                $('#departmenet').show();
                $('#employee').hide();
            }
            else if($('#radio_32').prop("checked") == true){
                $('#departmenet').hide();
                $('#employee').show();
            }else{
                 $('#departmenet').hide();
                $('#employee').hide();
            }
        $('#radio_30').click(function(){
            if($(this).prop("checked") == true){
                $('#departmenet').show();
                 $('#employee').hide();
            }
        });

           $('#radio_31').click(function(){
            if($(this).prop("checked") == true){
                $('#departmenet').hide();
                 $('#employee').hide();
            }
        });

           $('#radio_32').click(function(){
            if($(this).prop("checked") == true){
                $('#departmenet').hide();
                $('#employee').show();
            }
        });
    });
</script>
@endpush
