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
                    <li class="breadcrumb-item"><a href="{{route('admin.contracts')}}">Contracts</a></li>
                    <li class="breadcrumb-item active">Add New Contract</li>
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
                <h4 class="card-title">ADD CONTRACT</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.contract.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <br>
                            <div class="form-row">
                                <div class="col-md-4 mb-4 mt-1">
                                    <label for="validationDefault03">Client <small class="text-danger">*</small></label>
                                   <select class="select2 form-control" style="width: 100%" name="client" >
                                    <option value="" selected>--</option>
                                    @foreach ($clients as $row)
                                        <option value="{{$row->id}}">{{$row->name}} ({{$row->company}})</option>
                                    @endforeach
                                </select>
                                    @error('client')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4 mt-1">
                                   <label for="validationDefault03">Subject <small
                                            class="text-danger">*</small></label>
                                      <input type="text" name="subject" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('subject')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            
                                 <div class="col-md-4 mb-4">
                                   <label for="validationDefault03">Contract Type <a href="#" type="button" data-toggle="modal" data-target="#responsive-modal"
                                            id="addLeadsource" class="btn btn-sm  btn-outline-success"><i
                                                class="fa fa-plus"></i> Add Contract Type </a></label>
                                       <select class="select2 form-control" style="width: 100%" name="contract_type" >
                                    <option value="">--</option>
                                    @foreach ($contractTypes as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                                         @error('contract_type')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                  
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-4">
                                    <label for="validationDefault03">Start Date <small
                                            class="text-danger">*</small></label>
                                      <input type="date" name="start_date" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('start_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                

                                <div class="col-md-4 mb-3" id="deadline_div">
                                    <label for="validationDefault03">End Date</label>
                                    <input type="date" name="end_date" class="form-control" id="validationDefault03"
                                        placeholder="">
                                           @error('end_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3" id="deadline_div">
                                    <label for="validationDefault03">Amount(USD) <small
                                            class="text-danger">*</small></label>
                                    <input type="number" name="amount" class="form-control" id="validationDefault03"
                                        placeholder="">
                                              @error('amount')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                              <div class="form-row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationDefault03">Contract Name </label>
                                      <input type="text" name="contract_name" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('contract_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 mb-4" id="deadline_div">
                                    <label for="validationDefault03">Alternate Address</label>
                                    <textarea name="alternate_address" id="" cols="30" rows="1" class="form-control"></textarea>
                                              @error('alternate_address')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-4">
                                    <label for="validationDefault03">City </label>
                                      <input type="text" name="city" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('city')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="validationDefault03">State </label>
                                      <input type="text" name="state" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('state')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                 <div class="col-md-3 mb-4">
                                    <label for="validationDefault03">Country </label>
                                      <input type="text" name="country" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('country')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="validationDefault03">Postal Code </label>
                                      <input type="number" name="postal_code" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('postal_code')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                             <div class="form-row">
                                <div class="col-md-3 mb-4">
                                    <label for="validationDefault03">Cell </label>
                                      <input type="text" name="cell" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('cell')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="validationDefault03">Office Phone Number </label>
                                      <input type="text" name="office_number" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('office_number')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                            </div>

                              <div class="form-row">
                                <div class="col-md-12 mb-4">
                                    <label for="validationDefault03">Summary</label>
                                    <textarea class="summernote" name="summary"></textarea>
                                    @error('summary')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-4">
                                    <label for="validationDefault03">Notes</label>
                                    <textarea class="summernote" name="note"></textarea>
                                    @error('note')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                        
                           <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="input-file-now-custom-3">Company Logo</label>
                                    <input type="file" name="company_logo" id="input-file-now-custom-3" class="dropify" data-height="200"
                                        data-default-file="{{asset('assets/images/crmLogo.png')}}"  />
                                          @error('company_logo')
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

    <footer class="footer">
        © 2021 Webfabricant
    </footer>

    <!-- End footer -->

</div>
<!-- End Page wrapper  -->
<!-- /.modal -->
<!-- Category modal -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Contract Type</h4>
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
                                    @foreach ($contractTypes as $row)
                                    <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$row->name}}</td>
                                          <td style="text-align: end">
                                                <button onclick="deleteContractType(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true" style="font-size: 12px"></i></button>
                                          </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
            <div class="modal-body">
                <form id="contractTypeForm">
                    @csrf
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="recipient-name" name="name" required>
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
       $('#contractTypeForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.contract.type.store")}}',
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
     
         function deleteContractType(elem) {
        var type_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.contract.type.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                type_id: type_id,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };
</script> 
@endpush

