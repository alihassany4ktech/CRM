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
                    <li class="breadcrumb-item"><a href="{{route('admin.clients')}}">Clients</a></li>
                    <li class="breadcrumb-item active">Add New Client</li>
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
                          <h4 class="card-title">ADD CLIENT INFO</h4>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">COMPANY DETAILS</h4>
                                <form method="POST" action="{{route('admin.client.save')}}">
                                      @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Company Name</label>
                                          <input type="text" name="company" class="form-control" id="validationDefault01" value="{{$lead->company_name}}" placeholder="y4ktec" >
                                              @error('company')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault02">Website</label>
                                          <input type="url"  name="website_url" class="form-control" value="{{$lead->website}}"  id="validationDefault02" placeholder="https://www.test.com" required>
                                        </div>
                                    </div>
                                      <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                          <label for="validationDefault01">Address</label>
                                          <textarea name="address" class="form-control" id="" cols="1" rows="2" placeholder="write...">{{$lead->address}}</textarea>
                                             @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                          
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault03">City</label>
                                          <input type="text" name="city" class="form-control"value="{{$lead->city}}"  id="validationDefault03" placeholder="City">
                                          @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault04">State</label>
                                          <input type="text" name="state" class="form-control" value="{{$lead->state}}"  id="validationDefault04" placeholder="State">
                                          @error('state')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault05">Zip</label> 
                                          <input type="text" name="zip" class="form-control" value="{{$lead->postal_code}}" id="validationDefault05" placeholder="Zip">
                                          @error('zip')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div> <br>
                                     <h4 class="card-title">CLIENT BASIC DETAILS</h4>
                                     <hr> <br>
                                      <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault03">Client Name</label>
                                          <input type="text" name="client_name" class="form-control" value="{{$lead->client_name}}" id="validationDefault03" placeholder="client name">
                                          @error('client_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault04">Client Email</label>
                                          <input type="text" name="email" class="form-control" value="{{$lead->client_email}}"  id="validationDefault04" placeholder="client email">
                                             @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault04">Client Phone</label>
                                          <input type="text" name="phone" class="form-control" value="{{$lead->cell}}" id="validationDefault04" placeholder="client phone">
                                             @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault05">Client Password</label>
                                          <input type="text" name="client_password" class="form-control" id="validationDefault05" placeholder="client password">
                                             @error('client_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div> 
                                    <br>
                                     <h4 class="card-title">CLIENT OTHER DETAILS</h4>
                                     <hr> <br>
                                       <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault03">Skype</label>
                                          <input type="url"  name="skyp_url" class="form-control" id="validationDefault03" placeholder="skype url" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault04">Linkedin</label>
                                          <input type="url"   name="linkedin_url" class="form-control" id="validationDefault04" placeholder="linkedin url" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault05">Twitter</label>
                                          <input type="url"  name="twitter_url" class="form-control" id="validationDefault05" placeholder="twitter url" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault05">Facebook</label>
                                          <input name="facebook_url"  type="url" class="form-control" id="validationDefault05" placeholder="facebook url" required>
                                        </div>
                                    </div> 
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                        <label for="validationDefault05">Role</label>
                                        <select name="role_name"  class="selectpicker form-control" data-style="form-control btn-secondary">
                                            @foreach ($roles as $row)
                                                            <option value="{{$row->name}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                          @error('role_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                        <label for="validationDefault05">Log In</label>
                                        <select name="login_status"  class="selectpicker form-control" data-style="form-control btn-secondary">
                                            <option value="Enable">Enable</option>
                                            <option class="Disable">Disable</option>
                                        </select>
                                          @error('login_status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="validationDefault04">Email Notifications</label><br>
                                          <input name="notification_status" type="radio" id="radio_30" class="with-gap radio-col-green" />
                                                <label for="radio_30">Yes</label>
                                                <input name="notification_status" type="radio" id="radio_31" class="with-gap radio-col-red" checked />
                                                <label for="radio_31">No</label>
                                                    @error('notification_status')
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
@endsection
