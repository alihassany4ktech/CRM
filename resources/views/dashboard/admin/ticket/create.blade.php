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
                    <li class="breadcrumb-item"><a href="{{route('admin.tickets')}}">Tickets</a></li>
                    <li class="breadcrumb-item active">Create Ticket</li>
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
                          <h4 class="card-title">CREATE TICKET</h4>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.product.store')}}">
                                      @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Ticket Subject <small class="text-danger">*</small></label>
                                          <input type="text" name="name" class="form-control" id="validationDefault01">
                                              @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault02">Mobile</label>
                                          <input type="string"  name="mobile" class="form-control" id="validationDefault02">
                                           @error('mobile')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Agent <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" 
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a></label>
                                        <select class="select2 form-control" style="width: 100%" name="agent" >
                                                 <option value="">Select Agent</option>
                        
                                          </select>
                                              @error('agent')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault02">Type  <a href="#"  data-toggle="modal"
                                            data-target="#responsive-modal3" id="addLeadsource"
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a></label>
                                            <select class="select2 form-control" style="width: 100%" name="type" >
                                                <option value="" selected>--</option>
                                                 @foreach ($ticketTypes as $row)
                                                     <option value="{{$row->id}}">{{$row->type}}</option>
                                                 @endforeach
                                          </select>
                                         @error('type')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                           <div class="col-md-5 mb-3">
                                          <label for="validationDefault01">Channel Name <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal4" id="addLeadsource"
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a></label>
                   
                                          <select class="select2 form-control" style="width: 100%" name="channel_name" >
                                                <option value="" selected>--</option>
                                                @foreach ($ticketChannels as $row)
                                                    <option value="{{$row->id}}">{{$row->channel_name}}</option>
                                                @endforeach
                                          </select>
                                              @error('channel_name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-5 mb-3">
                                          <label for="validationDefault01">Requester Name</label>
                                          <select class="select2 form-control" style="width: 100%" name="requester_name" >
                                                <option value="" selected>--</option>
                                          @foreach ($users as $row)
                                              <option value="{{$row->id}}">{{$row->name}}</option>
                                          @endforeach
                                          </select>
                                              @error('requester_name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-2">
                                              <label for="">Select Me</label>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                          <div class="col-md-2">
                                                <label for="validationDefault01">Tags</label>
                                          <div class="tags-default">
                                          <input type="text" class="form-control" name="tags" data-role="tagsinput"
                                            placeholder="enter multiple tags" />

                                          </div>
                                              @error('tags')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                          </div>
                                    <div class="col-md-6 mb-3" style="">
                                    <label for="validationDefault03">Priority</label> <br>
                                     <input name="priority_status" type="radio" id="radio_30" value="High" class="with-gap radio-col-green" checked/>
                                                <label for="radio_30" class="text-success">High</label>
                                                <input name="priority_status" type="radio" value="Medium" id="radio_31" class="with-gap radio-col-orange"  />
                                                <label for="radio_31" style="color: orange">Medium</label>
                                                 <input name="priority_status" type="radio" value="Low" id="radio_32" class="with-gap radio-col-red" />
                                                <label for="radio_32" class="text-danger">Low</label>
                                                 <input name="priority_status" type="radio" value="Urgent" id="radio_33" class="with-gap radio-col-black" />
                                                <label for="radio_33" class="text-dark">Urgent</label>
                                                
                                </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                          <label for="validationDefault03">Ticket Description <small class="text-danger">*</small></label>
                                           <textarea class="summernote" name="description"></textarea>
                                             @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                              
                                    </div>
                                  <br>
                                    <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Save</button>
                                    <button type="reset" class="btn btn-info">Rest</button>
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
<!-- Add New Agents modal -->
<div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add New Agents</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="ProductCategoryForm">
                  @csrf
                  <div class="form-group">
                         <label for="recipient-name" class="control-label">Choose Agents <small class="text-danger">*</small></label>
                        <select class="select2 m-b-10 select2-multiple" name="agent[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                              @foreach ($employees as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach                  
                        </select>
                  </div>
                  <div class="form-group">
                        <label for="recipient-name" class="control-label">Assign Group <small class="text-danger">*</small></label>
                        
                        <select class="select2 form-control" style="width: 100%" name="group"  required>
                              <option value="" selected>--</option>
                              <option value="Incomplete">Sales</option>
                              <option value="Completed">Code</option>
                              <option value="Completed">Management</option>
                        </select>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-check"></i>Save</button>
            </div>
             </form>
        </div>
    </div>
</div>
<!-- Ticket Type modal -->
<div id="responsive-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add New Ticket Type</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form id="ticketTypeForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Ticket Type</label>
                        <input type="text" name="tiket_type" class="form-control" required>
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
<!-- Channel  modal -->
<div id="responsive-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add New Ticket Channel</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form id="ticketChannelForm">
                    @csrf
                    
                        <div class="form-group">
                        <label for="recipient-name" class="control-label">Channel Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="channel_name" required>
                   
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

@push('tickect-page-script')
{{-- category --}}
<script>
    $(document).ready(function(){
       $('#ProductCategoryForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.product.category.store")}}',
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
{{-- Type --}}
<script>
    $(document).ready(function(){
       $('#ticketTypeForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.ticket.type.store")}}',
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
{{-- Channel --}}
<script>
    $(document).ready(function(){
       $('#ticketChannelForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.ticket.channel.store")}}',
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
@endpush
