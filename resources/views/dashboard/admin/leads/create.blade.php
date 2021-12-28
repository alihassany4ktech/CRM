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
                    <li class="breadcrumb-item"><a href="{{route('admin.leads')}}">Leads</a></li>
                    <li class="breadcrumb-item active">Add New Lead</li>
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
                <h4 class="card-title">ADD LEAD INFO</h4>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">COMPANY DETAILS</h4>
                        <form id="leadForm">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">Company Name</label>
                                    <input type="text" name="company_name" class="form-control" id="validationDefault01"
                                        placeholder="y4ktec">
                                    @error('company_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02">Website</label>
                                    <input type="url" name="website" class="form-control" id="validationDefault02"
                                        placeholder="https://www.test.com" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault01">Address</label>
                                    <textarea name="address" class="form-control" id="" cols="1" rows="2"
                                        placeholder="write..."></textarea>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault03">Moblile</label>
                                    <input type="text" name="cell" class="form-control" id="validationDefault03"
                                        placeholder="+..">
                                    @error('cell')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault03">Office Phone Number</label>
                                    <input type="text" name="office" class="form-control" id="validationDefault03"
                                        placeholder="111-222-333">
                                    @error('office')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault03">City</label>
                                    <input type="text" name="city" class="form-control" id="validationDefault03"
                                        placeholder="City">
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">State</label>
                                    <input type="text" name="state" class="form-control" id="validationDefault04"
                                        placeholder="State">
                                    @error('state')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Country</label>
                                    <input type="text" name="country" class="form-control" id="validationDefault04"
                                        placeholder="country">
                                    @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Postal code</label>
                                    <input type="text" name="postal_code" class="form-control" id="validationDefault05"
                                        placeholder="postal code">
                                    @error('postal_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> <br>
                            <h4 class="card-title">LEAD DETAILS</h4>
                            <hr> <br>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Choose Agents
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal3" class="btn btn-sm  btn-outline-success"><i
                                                class="fa fa-plus"></i> Add Lead Agent</a>
                                    </label>
                                       <select class="select2 form-control" style="width: 100%" name="agent_id" required>
                                    <option>Choose Agent</option>
                                    @foreach ($agents as $row)
                                        <option value="{{$row->id}}">{{$row->user->name}}</option>
                                    @endforeach
                                </select>
                                    @error('agent')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault04">Lead Source
                                        <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" id="addLeadsource"
                                            class="btn btn-sm  btn-outline-success"><i class="fa fa-plus"></i> Add Lead
                                            Source</a>
                                    </label>
                                     <select class="select2 form-control" style="width: 100%" name="source" required>
                                    <option>Select Source</option>
                                    @foreach ($sources as $row)
                                        <option value="{{$row->id}}">{{$row->type}}</option>
                                    @endforeach
                                </select>
                                    @error('source')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault04">Lead Category
                                        <a href="#" type="button" data-toggle="modal" data-target="#responsive-modal"
                                            id="addLeadsource" class="btn btn-sm  btn-outline-success"><i
                                                class="fa fa-plus"></i></a>
                                    </label>
                                     <select class="select2 form-control" style="width: 100%" name="category_id" required>
                                    <option>Select Category</option>
                                    @foreach ($categories as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-1 mb-3" style="margin-top:30px">
                                    <select name="salutation" id="salutation" class="form-control">
                                        <option value="">--</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Name <small
                                            class="text-danger">*</small></label>
                                    <input type="text" name="name" class="form-control" id="validationDefault03"
                                        placeholder="Name" required>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="validationDefault04">Email <small
                                            class="text-danger">*</small></label>
                                    <input type="email" name="email" class="form-control" id="validationDefault04"
                                        placeholder="example@gmail.com" required>
                                         @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Lead Value</label>
                                    <input type="number" min="1"  name="value" class="form-control" id="validationDefault03"
                                        placeholder="1" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault04">Next Follow Up</label>
                                    <select class="form-control" name="next_follow_up" id="">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
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


<!-- leaD Category modal -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Lead Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
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
                            @foreach ($categories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sms btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-body">

                <form id="categoryForm">
                      @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Add Category Name</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" required>
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


<!-- Lead Agent modal -->
<div id="responsive-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Lead Agent</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lead Agent</th>
                                <th style="text-align: end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agents as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->user->name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteAgent(this)" id="{{$row->id}}" type="button" class="btn btn-sms btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-body">

                <form id="agentForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Choose Agents</label>
                             <select class="select2 form-control"  style="width: 100%" name="user_id" required>
                                    <option selected>Choose Agent</option>
                                    @foreach ($users as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
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

<!-- leaD Source modal -->
<div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add New Lead Source</h4>
                <button type="button text-white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <form id="leadSource">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Lead Source</label>
                        <input type="text" class="form-control" id="recipient-name" name="type">
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
       
       $('#leadForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.lead.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                 success: function (data) {
                  if (data.success) {
                        toastr.success(data.success);
                    }else{
                        toastr.error(data[0]);
                    }
                }
            });
     });


    });
</script>
@endpush

