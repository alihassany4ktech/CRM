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
                    <li class="breadcrumb-item"><a href="{{route('admin.contracts')}}">Contracts</a></li>
                    <li class="breadcrumb-item active">Contract Details</li>
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
                        <center class="m-t-20">
                            <img src="{{$contract->client->image == null ? asset('assets/images/users/5.jpg'):asset($contract->client->image)}}"
                                class="img-circle" width="150" />
                            <h4 class="card-title m-t-10">{{$contract->client->name}}</h4>
                            <small>(client)</small>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted p-t-10 db">Company</small>
                        <h6>{{$contract->client->company}}</h6>
                        <small class="text-muted p-t-10 db">Email Address</small>
                        <h6><a class="card-title"
                                href="mailto:{{$contract->client->email}}">{{$contract->client->email}}</a></h6>

                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#overview"
                                role="tab">Overview</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#renewHistory"
                                role="tab">Renew History</a> </li>
                        {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invoices"
                                role="tab">Invoices</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payments"
                                role="tab">Payments</a> </li>
                       <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#editProfile"
                                role="tab">Edit Profile</a> </li> --}}
                        <li class="nav-item"><a class="btn btn-success btn-sm text-white" type="button"
                                data-toggle="modal" data-target="#renew-contract-modal" style="margin-top: 13px"><i
                                    class="fa fa-undo"></i> Renew Contract</a></li>
                                    <li class="nav-item"><a class="btn btn-light btn-sm text-dark ml-2" href="{{route('admin.contract.download',['id'=>$contract->id])}}" style="margin-top: 13px"><i
                                    class="fa fa-file-pdf"></i> Download Pdf</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!--overview -->
                        <div class="tab-pane active" id="overview" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Contract Name</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->contract_name}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Subject</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->subject}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Start Date</strong>
                                        <br>
                                        <small class="text-muted">{{date_format($contract->start_date,"m/d/Y")}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>End Date</strong>
                                        <br>
                                        <small
                                            class="text-muted">{{$contract->end_date != null?  date_format($contract->end_date,"m/d/Y") : 'No End Date'}}</small>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Amount</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->amount}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Cell</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->cell}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Office Number</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->office_number}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <img data-toggle="tooltip" data-original-title="Company Logo"
                                            src="{{$contract->company_logo == null ? asset('assets/images/crmLogo.png') :asset($contract->company_logo)}}"
                                            alt="compay logo" width="60" height="50">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>City</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->city}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>State</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->state}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Country</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->country}}</small>
                                    </div>
                                    <div class="col-md-3 col-xs-6"><strong>Postal Code</strong>
                                        <br>
                                        <small class="text-muted">{{$contract->postal_code}}</small>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="font-medium m-t-30">Contract Type</h5>
                                <p>{{$contract->contract_type->name}}</p>
                                <hr>
                                <h5 class="font-medium m-t-30">Alternate Address</h5>
                                <p>{{$contract->alternate_address}}</p>
                                <hr>
                                <h5 class="font-medium m-t-30">Note</h5>
                                <p>{!!$contract->note!!}</p>
                                <hr>
                                <h5 class="font-medium m-t-30">Summary</h5>
                                <p>{!!$contract->summary!!}</p>
                            </div>
                        </div>
                        {{-- renewHistory  --}}
                        <?php
                            $renewContracts = App\ContractRenew::where('contract_id','=',$contract->id)->get();
                         ?>
                        <div class="tab-pane" id="renewHistory" role="tabpanel">
                            <div class="card-body">
                                <div class="form-row">
                                   @if ($renewContracts->isEmpty())
                                         <small>No History Found</small>
                                    @else 
                                    @foreach ($renewContracts as $row)
                                    <div class="col-md-6">
                                        <div class="d-flex flex-row comment-row active">
                                            <div class="p-2"><span class="round"><img src="{{asset(Auth::guard('admin')->user()->image)}}"
                                                        alt="user" width="50"></span></div>
                                            <div class="comment-text active w-100">
                                                <h6>{{Auth::guard('admin')->user()->name}}: <small class="text-info">renewed this contract: {{(($row->created_at)->format("d-m-y  H:i A"))}}</small> 
                                                    <a type="button" onclick="deleteRenewContract(this)" id="{{$row->id}}" ><i class="icon-close text-danger" data-toggle="tooltip" data-original-title="Delete"></i></a></h5>
                                                <small style="font-size: 12px">New start date: {{date_format($row->start_date,"d-m-Y")}}</small> <br>
                                                <small style="font-size: 12px">New end date : {{date_format($row->end_date,"d-m-Y")}}</small><br>
                                                <small style="font-size: 12px">New amount : {{$row->amount}}</small>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach 
                                   @endif
                                </div>
                            </div>
                        </div>
                        {{-- invoices  --}}
                        <div class="tab-pane" id="invoices" role="tabpanel">
                            <div class="card-body">
                                <p>invoices</p>
                            </div>
                        </div>
                        {{-- payments  --}}
                        <div class="tab-pane" id="payments" role="tabpanel">
                            <div class="card-body">
                                <p>payments</p>
                            </div>
                        </div>
                        {{-- settings --}}
                        <div class="tab-pane" id="editProfile" role="tabpanel">
                            <div class="card-body">
                                <h4 class="card-title">COMPANY DETAILS</h4>
                                {{-- <form method="POST" action="{{route('admin.client.update')}}">
                                @csrf
                                <input type="hidden" name="client_id" value="{{$client->id}}">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Company Name</label>
                                        <input type="text" name="company" class="form-control" id="validationDefault01"
                                            value="{{$client->company}}">
                                        @error('company')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Website</label>
                                        <input type="url" name="website_url" class="form-control"
                                            id="validationDefault02" value="{{$client->website_url}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Address</label>
                                        <textarea name="address" class="form-control" id="" cols="1"
                                            rows="2">{{$client->address}}</textarea>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault03">City</label>
                                        <input type="text" name="city" class="form-control" id="validationDefault03"
                                            value="{{$client->city}}">
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault04">State</label>
                                        <input type="text" name="state" class="form-control" id="validationDefault04"
                                            value="{{$client->state}}">
                                        @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault05">Zip</label>
                                        <input type="text" name="zip" class="form-control" id="validationDefault05"
                                            value="{{$client->zip}}">
                                        @error('zip')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><br>
                                <h4 class="card-title">CLIENT BASIC DETAILS</h4>
                                <hr> <br>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault03">Client Name</label>
                                        <input type="text" name="client_name" class="form-control"
                                            id="validationDefault03" value="{{$client->name}}">
                                        @error('client_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault04">Client Email</label>
                                        <input type="text" name="email" class="form-control" id="validationDefault04"
                                            value="{{$client->email}}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault04">Client Phone</label>
                                        <input type="text" name="phone" class="form-control" id="validationDefault04"
                                            value="{{$client->phone}}">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault05">Client Password</label>
                                        <input type="text" name="client_password" class="form-control"
                                            id="validationDefault05" placeholder="new password">
                                        @error('client_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><br>
                                <h4 class="card-title">CLIENT OTHER DETAILS</h4>
                                <hr> <br>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault03">Skype</label>
                                        <input type="url" name="skyp_url" class="form-control" id="validationDefault03"
                                            value="{{$client->skyp_url}}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault04">Linkedin</label>
                                        <input type="url" name="linkedin_url" class="form-control"
                                            id="validationDefault04" value="{{$client->linkedin_url}}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault05">Twitter</label>
                                        <input type="url" name="twitter_url" class="form-control"
                                            id="validationDefault05" value="{{$client->twitter_url}}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault05">Facebook</label>
                                        <input name="facebook_url" type="url" class="form-control"
                                            id="validationDefault05" value="{{$client->facebook_url}}">
                                    </div>
                                </div>

                                <?php
                                          $roles  = Spatie\Permission\Models\Role::all(); 
                                          $permissions = Spatie\Permission\Models\Permission::all();
                                     ?>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Log In</label>
                                        <select name="login_status" class="selectpicker form-control"
                                            data-style="form-control btn-secondary">
                                            <option value="{{$client->login}}" selected>{{$client->login}}</option>
                                            @if ($client->login == 'Enable')
                                            <option class="Disable">Disable</option>
                                            @else
                                            <option value="Enable">Enable</option>
                                            @endif
                                        </select>
                                        @error('login_status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault01">Role</label>
                                        <select name="role_name" class="selectpicker form-control"
                                            data-style="form-control btn-secondary">
                                            @if ($client->getRoleNames()->isEmpty())
                                            <option disabled selected>No Role</option>
                                            @else
                                            <option value="{{$client->getRoleNames()[0]}}" selected>
                                                {{$client->getRoleNames()[0]}}</option>
                                            @foreach ($roles as $role)
                                            @if ($client->getRoleNames()[0] == $role->name )
                                            <option style="display: none" value="{{$role->name}}">{{$role->name}}
                                            </option>
                                            @else
                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                            @endif
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault04">Email Notifications</label><br>
                                        @if ($client->notification_status == 'yes')
                                        <input name="notification_status" value="Enable" type="radio" id="radio_30"
                                            class="with-gap radio-col-green" checked />
                                        <label for="radio_30">Yes</label>
                                        <input name="notification_status" value="Disable" type="radio" id="radio_31"
                                            class="with-gap radio-col-red" />

                                        <label for="radio_31">No</label>
                                        @error('notification_status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @else
                                        <input name="notification_status" value="yes" type="radio" id="radio_30"
                                            class="with-gap radio-col-green" />
                                        <label for="radio_30">Yes</label>

                                        <input name="notification_status" value="no" type="radio" id="radio_31"
                                            class="with-gap radio-col-red" checked />

                                        <label for="radio_31">No</label>
                                        @error('notification_status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Shipping Address</label>
                                        <textarea name="shipping_address" class="form-control" id="" cols="1"
                                            rows="2">{{$client->shipping_address?$client->shipping_address:''}}</textarea>
                                        @error('shipping_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault03">Note</label>
                                        <textarea class="summernote" name="note"><br>{{$client->note}}</textarea>
                                        @error('note')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <button class="btn btn-success" type="submit">Update Profile</button>
                                </form> --}}

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
<!-- Renew Contract modal -->
<div id="renew-contract-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Renew Contract</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="contractRenewForm">
                    @csrf
                    <input type="hidden" name="contract_id" value="{{$contract->id}}">
                    <div class="form-group row">
                        <label for="startDate" class="col-sm-3 text-right control-label col-form-label">Start
                            Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="start_date"
                                value="{{Carbon\Carbon::parse($contract->start_date)->format('Y-m-d')}}"
                                class="form-control" id="startDate" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="endDate" class="col-sm-3 text-right control-label col-form-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="end_date"
                                value="{{Carbon\Carbon::parse($contract->end_date)->format('Y-m-d')}}"
                                class="form-control" id="endDate" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="startDate" class="col-sm-3 text-right control-label col-form-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="number" name="amount" value="{{$contract->amount}}" class="form-control"
                                id="startDate" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-success waves-effect waves-light"><i
                        class="fa fa-check"></i>
                    Renew</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->
@endsection
@push('lead-store-script')
<script>
    $(document).ready(function () {
        $('#contractRenewForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.contract.renew")}}',
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
       
         function deleteRenewContract(elem) {
        var renew_contract_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.contract.renewcontract.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                renew_contract_id: renew_contract_id,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };
</script>

@endpush
