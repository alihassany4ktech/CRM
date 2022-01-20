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
                    <li class="breadcrumb-item"><a href="{{route('admin.products')}}">Products</a></li>
                    <li class="breadcrumb-item active">Add New Product</li>
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
                          <h4 class="card-title">ADD PRODUCTS</h4>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.product.store')}}">
                                      @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Name <small class="text-danger">*</small></label>
                                          <input type="text" name="name" class="form-control" id="validationDefault01">
                                              @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault02">Price <small class="text-danger">*</small></label>
                                          <input type="number" min="1" name="price" class="form-control" id="validationDefault02">
                                           @error('price')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Product Category <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal2" id="addLeadsource"
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a></label>
                                          <select class="select2 form-control" style="width: 100%" name="category" >
                                                <option value="" selected>Select Category</option>
                    
                                        @foreach ($productCategories as $row)
                                            <option value="{{$row->id}}">{{$row->category_name}}</option>
                                        @endforeach
                                          </select>
                                              @error('category')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault02">Product Sub Category <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal3" id="addLeadsource"
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a></label>
                                           <select class="select2 form-control" style="width: 100%" name="subCategory" >
                                                <option value="" selected>Select Sub Category</option>
                                                 @foreach ($productSubCategories as $row)
                                            <option value="{{$row->id}}">{{$row->sub_category_name}}</option>
                                        @endforeach
                                          </select>
                                         @error('subCategory')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                           <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Tax <a href="#" id="addLeadsource" data-toggle="modal"
                                            data-target="#responsive-modal4" id="addLeadsource"
                                            class="btn btn-xs  btn-outline-success"><i class="ti-plus"></i></a></label>
                   
                                              <select class="select2 m-b-10 select2-multiple" name="tax[]" class="form-control" style="width: 100%" multiple="multiple" data-placeholder="Choose" >     
                                                @foreach ($taxes as $row)
                                                            <option value="{{$row->id}}">{{$row->tax_name}} {{$row->rate_percent}}%</option>
                                                        @endforeach
                                                  
                                                </select>
                                              @error('tax')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">HSN/SAC Code</label>
                                          <input type="text" name="code" class="form-control" id="validationDefault01">
                                              @error('code')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                          <label for="validationDefault03">Description</label>
                                           <textarea class="summernote" name="description"></textarea>
                                             @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                              
                                    </div>
                                    <div class="form-row">
                                          <div class="col-md-2 mb-3" style="margin-top: 38px">
                                                <input type="checkbox" id="md_checkbox_1" class="chk-col-red" name="can_client_purchase"/>
                                          <label for="md_checkbox_1">Client can purchase</label>
                                          </div>
                                    </div>
                                    <button class="btn btn-success" type="submit"><i class="ti-check"></i> Save</button>
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
<!-- Category modal -->
<div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Product Category</h4>
                <button type="button text-white" style="color: white" class="close" data-dismiss="modal" aria-label="Close"><span
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
                                 
                                    @foreach ($productCategories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->category_name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteProductCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger"><i class="ti-close"
                                            aria-hidden="true" style="font-size: 12px"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
            <div class="modal-body">

                <form id="ProductCategoryForm">
                    @csrf
                    <div class="form-group">
                         <label for="recipient-name" class="control-label">Name <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" id="recipient-name" name="category_name" required>
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
<!-- Sub Category modal -->
<div id="responsive-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Product Sub Category</h4>
                <button type="button text-white" style="color: white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
                  <div class="modal-body">
                      <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sub Category</th>
                                        <th>Category</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($productSubCategories as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->sub_category_name}}</td>
                                    <td>{{$row->category->category_name}}</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteProductSubCategory(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger">
                                        <i class="ti-close" aria-hidden="true" style="font-size: 12px"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
            <div class="modal-body">
            <form id="subCategoryForm">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Category</label>
                        <select class="select2 form-control" style="width: 100%" name="category" required>
                              <option value="" selected>Select Category</option>
                              @foreach ($productCategories as $row)
                                  <option value="{{$row->id}}">{{$row->category_name}}</option>
                              @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Sub Category Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="sub_category_name">
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

<!-- Tax modal -->
<div id="responsive-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLabel1">Tax</h4>
                <button type="button" style="color: white" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
                  <div class="modal-body">
                      <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tax Name</th>
                                        <th>Rate %</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    @foreach ($taxes as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->tax_name}}</td>
                                    <td>{{$row->rate_percent}}%</td>
                                  <td style="text-align: end">
                                    <button onclick="deleteTax(this)" id="{{$row->id}}" type="button" class="btn btn-sm btn-danger">
                                        <i class="ti-close" aria-hidden="true" style="font-size: 12px"></i></i></button>
                                </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
            <div class="modal-body">
            <form id="productTaxForm">
                    @csrf
                    <div class="form-group">
                       
                        <label for="recipient-name" class="control-label">Tax Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="tax_name" required>
                       </div>
                        <div class="form-group">
                        <label for="recipient-name" class="control-label">Rate</label>
                        <input type="number" min="1" class="form-control" id="recipient-name" name="rate_percent" required>
                   
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

@push('product-page-script')
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
<script>
     
         function deleteProductCategory(elem) {
        var category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.product.category.delete') }}",
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

{{-- sub category --}}
<script>
    $(document).ready(function(){
       $('#subCategoryForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.product.subCategory.store")}}',
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
     
         function deleteProductSubCategory(elem) {
        var sub_category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.product.subCategory.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                sub_category_id: sub_category_id,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };
</script>
{{-- Tax --}}
<script>
    $(document).ready(function(){
       $('#productTaxForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.product.tax.store")}}',
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
     
         function deleteTax(elem) {
        var tax_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.product.tax.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                tax_id: tax_id,
            },

            success: function (data) {
                toastr.error(data.success);
                window.location.reload();
            }
        });
    };
</script>
@endpush
