@extends('dashboard.admin.layouts.includes')
@section('content')
<style>
      input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
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
                    <li class="breadcrumb-item"><a href="{{route('admin.leads')}}">Leads</a></li>
                    <li class="breadcrumb-item active">lead Details</li>
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
                        <center class="m-t-20"> <img
                                src="{{asset($lead->image == '0') ? asset('assets/images/users/5.jpg'):asset($lead->image)}}"
                                class="img-circle" width="150" />
                            <h4 class="card-title m-t-10">{{$lead->client_name}}</h4>
                           <small><a class="card-title" href="mailto:{{$lead->client_email}}">{{$lead->client_email}}</a></small> 
                        </center>
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
                                role="tab">Profile</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#projects"
                                role="tab">Proposal</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invoices"
                                role="tab">Files</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payments" role="tab">Follow
                                Up</a> </li>
                        <li class="nav-item"> <a class="nav-link text-info" style="text-decoration: none" data-toggle="tab" href="#editProfile"
                                role="tab">Edit Profile</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!--profile -->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Company</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->company_name}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Numbers</strong>
                                        <br>
                                        <small class="text-muted">cell: {{$lead->cell}}<br /> office: {{$lead->office}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Address</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->address}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>website</strong>
                                        <br>
                                        <small class="text-muted"><a href="{{$lead->website}}" target="_blank">{{$lead->website}}</a></small>
                                    </div>
                                </div> <br>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>City</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->city}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>State</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->state}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Country</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->country}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Postal Code</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->postal_code}}</small>
                                    </div>
                                </div> <br>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Lead Value</strong>
                                        <br>
                                        <small class="text-muted">${{$lead->value}}</small>
                                    </div>
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Lead Category</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->category->name}}</small>
                                    </div>
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Status</strong>
                                        <br>
                                        <small class="text-muted">{{$lead->status}}</small>
                                    </div>

                                </div> <br>
                                <hr>
                               <h5 class="font-medium m-t-30">Lead Agent</h5>
                                <p class="m-t-30">
                                      <img src="{{asset($lead->client->image)}}"
                                                class="img-circle elevation-2" alt="client"
                                                style="height: 35px;width:35px">
                                            {{ucwords($lead->client->name)}}
                                      </p>
                                <hr>
                                <h5 class="font-medium m-t-30">Note</h5>
                                <p>{!!$lead->note!!}</p>
                                <hr>
                            </div>
                        </div>
                        {{-- projects  --}}
                        <div class="tab-pane" id="projects" role="tabpanel">
                            <div class="card-body">
                                <p>Proposal</p>
                            </div>
                        </div>
                        {{-- invoices  --}}
                        <div class="tab-pane" id="invoices" role="tabpanel">
                            <div class="card-body">
                                <p>Files</p>
                            </div>
                        </div>
                        {{-- payments  --}}
                        <div class="tab-pane" id="payments" role="tabpanel">
                            <div class="card-body">
                                <p>Follow Up</p>
                            </div>
                        </div>
                        {{-- editProfile --}}
                        <div class="tab-pane" id="editProfile" role="tabpanel">
                            <div class="card-body">
                                <h4 class="card-title">COMPANY DETAILS</h4>
                                <form id="leadForm">
                                    @csrf
                                    <input type="hidden" name="lead_id" value="{{$lead->id}}">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Company Name</label>
                                            <input type="text" name="company_name" class="form-control"
                                                id="validationDefault01" value="{{$lead->company_name}}">
                                            @error('company_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">Website</label>
                                            <input type="url" name="website" class="form-control"
                                                id="validationDefault02" value="{{$lead->website}}" required>
                                        </div>
                                    </div> <br>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationDefault01">Address</label>
                                            <textarea name="address" class="form-control" id="" cols="1"
                                                rows="2">{{$lead->address}}</textarea>
                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>

                                    </div><br>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault03">Mobile</label>
                                            <input type="text" name="cell" class="form-control" id="validationDefault03"
                                                value="{{$lead->cell}}">
                                            @error('cell')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault04">Office Phone Number</label>
                                            <input type="text" name="office" class="form-control"
                                                id="validationDefault04" value="{{$lead->office}}">
                                            @error('office')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault05">City</label>
                                            <input type="text" name="city" class="form-control" id="validationDefault05"
                                                value="{{$lead->city}}">
                                            @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div> <br>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault05">State</label>
                                            <input type="text" name="state" class="form-control"
                                                id="validationDefault05" value="{{$lead->state}}">
                                            @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault05">Country</label>
                                            <input type="text" name="country" class="form-control"
                                                id="validationDefault05" value="{{$lead->country}}">
                                            @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault05">Postal Code</label>
                                            <input type="text" name="postal_code" class="form-control"
                                                id="validationDefault05" value="{{$lead->postal_code}}">
                                            @error('postal_code')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <h4 class="card-title">LEAD DETAILS</h4>
                                    <hr> <br>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault03">Choose Agents
                                                <a href="#" id="addLeadsource" data-toggle="modal"
                                                    data-target="#responsive-modal3"
                                                    class="btn btn-sm  btn-outline-success"><i class="fa fa-plus"></i>
                                                    Add Lead Agent</a>
                                            </label>
                                            <select class="select2 form-control" style="width: 100%" name="agent_id"
                                                required>
                                                
                                                @foreach ($agents as $row)
                                                {{-- @if ($row->user->name == $lead->lead_agent->user->name) --}}
                                                     <option value="{{$row->id}}">{{$row->user->name}}</option>
                                                {{-- @endif --}}
                                               
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
                                                    class="btn btn-sm  btn-outline-success"><i class="fa fa-plus"></i>
                                                    Add Lead
                                                    Source</a>
                                            </label>
                                            <select class="select2 form-control" style="width: 100%" name="source"
                                                required>
                                                
                                                @foreach ($sources as $row)
                                                {{-- @if ($row-type == $lead->lead_source->type) --}}
                                                <option value="{{$row->id}}" selected>{{$row->type}}</option>
                                                {{-- @endif --}}
                                                @endforeach
                                            </select>
                                            @error('source')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault04">Lead Category
                                                <a href="#" type="button" data-toggle="modal"
                                                    data-target="#responsive-modal" id="addLeadsource"
                                                    class="btn btn-sm  btn-outline-success"><i
                                                        class="fa fa-plus"></i></a>
                                            </label>
                                            <select class="select2 form-control" style="width: 100%" name="category_id"
                                                required>
                                                @foreach ($categories as $row)
                                                {{-- @if ($row-name == $lead->category->name) --}}
                                                <option value="{{$row->id}}" selected>{{$row->name}}</option>
                                                {{-- @endif --}}
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> <br>
                                    <div class="form-row">

                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault03">Lead Name</label>
                                            <input type="text" name="client_name" class="form-control"
                                                id="validationDefault03" value="{{$lead->client_name}}">
                                            @error('client_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault04">Lead Email</label>
                                            <input type="text" name="client_email" class="form-control"
                                                id="validationDefault04" value="{{$lead->client_email}}">
                                            @error('client_email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div><br>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault03">Lead Value</label>
                                            <input type="number"  min="1"  name="value" class="form-control"
                                                id="validationDefault03" value="{{$lead->value}}" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                             <label for="validationDefault04">Next Follow Up</label>
                                    <select class="form-control" name="next_follow_up" id="" required>
                                          @if ($lead->next_follow_up == 'Yes')
                                              <option value="Yes" selected>Yes</option>
                                        <option value="No">No</option>
                                          @else
                                              <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                          @endif
                                        
                                    </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault05">Status</label>
                                          <select class="form-control" name="status" id="">
                                                @if ($lead->staus = 'pending')
                                                    <option value="pending" selected>pending</option>
                                                            <option value="inprocess">inprocess</option>
                                                            <option value="converted">converted</option>
                                                @elseif($lead->staus = 'inprocess')
                                                     <option value="pending">pending</option>
                                                            <option value="inprocess" selected>inprocess</option>
                                                            <option value="converted">converted</option>
                                                            @else 
                                                             <option value="pending" >pending</option>
                                                            <option value="inprocess">inprocess</option>
                                                            <option value="converted" selected>converted</option>
                                                @endif
                                        
                                    </select>
                                        </div>

                                    </div> <br>


                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationDefault03">Note</label>
                                            <textarea class="summernote" name="note"><br>{{$lead->note}}</textarea>
                                            @error('note')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <button class="btn btn-success" type="submit">Update</button>
                                </form>

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
                                    <button onclick="deleteCategory(this)" id="{{$row->id}}" type="button"
                                        class="btn btn-sms btn-danger"><i class="fa fa-trash"
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
                                    <button onclick="deleteAgent(this)" id="{{$row->id}}" type="button"
                                        class="btn btn-sms btn-danger"><i class="fa fa-trash"
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
                        <select class="select2 form-control" style="width: 100%" name="user_id" required>
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
