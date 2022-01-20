@extends('dashboard.admin.layouts.includes')
@section('content')
{{-- <style>
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


 
</style> --}}
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">

        <!-- Bread crumb and right sidebar toggle -->

        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Finance</a></li>
                    <li class="breadcrumb-item "><a href="{{route('admin.expenses')}}">Expenses</a> </li>
                    <li class="breadcrumb-item">Add Expense</li>
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
                <h4 class="card-title">ADD EXPENSE</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.expense.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <br>
                            <div class="form-row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationDefault03">Choose Member <small class="text-danger">*</small></label>
                                       <select class="select2 form-control member" style="width: 100%" name="member">
                                    <option value="">--</option>
                                    @foreach ($members as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>

                                    @endforeach
                                </select>
                                    @error('member')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="validationDefault04">Project</label>
                                     <select class="select2 form-control" style="width: 100%" name="project" id="projects">
                                    <option value="">--</option>
                                    {{-- @foreach ($projects as $row)
                                        <option value="{{$row->id}}">{{$row->project_name}}</option>
                                    @endforeach --}}
                                </select>
                                    @error('project')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationDefault03">Item Name <small
                                            class="text-danger">*</small></label>
                                      <input type="text" name="itam_name" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                         @error('itam_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                 <div class="col-md-6 mb-4">
                                    <label for="validationDefault04">Purchased From  </label>
                                    <input type="text" name="purchase_from" class="form-control" id="validationDefault03"
                                        placeholder="" >
                                    @error('purchase_from')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationDefault03">Purchase Date <small
                                            class="text-danger">*</small></label>
                                      <input type="date" name="pruchase_date" class="form-control" id="validationDefault03">
                                         @error('pruchase_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              
                                 <div class="col-md-6 mb-4">
                                    <label for="validationDefault04">Expense Category   <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" id="addLeadsource"
                                            class="btn btn-sm  btn-outline-success"><i class="ti-plus"></i></a> </label>
                                           <select class="select2 form-control" style="width: 100%" name="expense_category" >
                                    <option value="">--</option>
                                    @foreach ($expensesCategories as $row)
                                        <option value="{{$row->id}}">{{$row->category_name}}</option>
                                    @endforeach
                                </select>
                                    @error('expense_category')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-6 mb-4">
                                    <label for="validationDefault03">Price <small
                                            class="text-danger">*</small></label>
                                      <input type="number" name="price" min="0.1" step="0.1" class="form-control" id="validationDefault03"
                                        placeholder="">
                                         @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                 <div class="col-md-6 mb-4">
                                    <label for="validationDefault04">Currency  </label>
                                      <select class="form-control" name="currency" id="">
                                        @foreach($currencies as $row)
                                            <option value="{{ $row->id }}">{{ $row->currency_symbol.' ('.$row->currency_code.')' }}
                                            </option>
                                            @endforeach
                                    </select>
                                            @error('currency')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                        <div class="col-md-6" style="margin-left: -12px">
                                            <label>Bill</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div>

                                <div class="col-md-4 mb-3" style="margin-top: 38px">
                                     <input name="expense_or_bill" type="radio" id="radio_30" value="add_expense" class="with-gap radio-col-green" checked/>
                                                <label for="radio_30" class="text-success">Add Expense</label>
                                                <input name="expense_or_bill" type="radio" value="pay_bill" id="radio_31" class="with-gap radio-col-orange"  />
                                                <label for="radio_31" style="color: orange">Pay Bill</label>
                                              
                                                
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
                <h4 class="modal-title text-white" id="exampleModalLabel1">Add Expense Category</h4>
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
                                    @foreach ($expensesCategories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->category_name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteExpenseCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="ti-close"
                                            aria-hidden="true" style="font-size: 12px"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
            <div class="modal-body">

                <form id="expenseCategoryForm">
                    @csrf
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Add Category Name <small class="text-danger">*</small></label>
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
@endsection
@push('expense-create-page-script')

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.member').change(function () {
            var id = $(this).val();
            $.ajax({
                url: "{{ route('admin.fetch.member') }}",
                method: "POST",
                dataType: "json",

                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },

                success: function (data) {
                    var select = $('#projects');
                   $('option', select).remove();
                   for (i = 0; i < data.length; i++)
                        { 
                            $('#projects').append($('<option>',
                            {
                                value: data[i]['id'],
                                text : data[i]['project_name'] 
                            }));
                        }
                }
            });
        });


    });

</script>


<script>
    $(document).ready(function(){
       $('#expenseCategoryForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.expense.category.store")}}',
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
     
         function deleteExpenseCategory(elem) {
        var category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.expense.category.delete') }}",
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
@endpush

