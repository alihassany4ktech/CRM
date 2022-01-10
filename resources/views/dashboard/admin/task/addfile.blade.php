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
                    <li class="breadcrumb-item"><a href="{{route('admin.tasks')}}">Tasks</a></li>
                    <li class="breadcrumb-item active">Add File</li>
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
                <h4 class="card-title">ADD TASK FILES</h4>
                <div class="card">
                      
                    <div class="card-body">
                        <form action="{{route('admin.task.file.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="task_id"value="{{$id}}">
                            <div class="form-row" id="filerow">
                                  
                                <div class="col-md-12">    
                                          <a  id="fbtn" type="button" class="btn btn-sm btn-success m-t-10 float-right text-white ml-2" 
                                          style="font-size: 12px"><i class="fa fa-link" style="font-size: 12px"></i> Add File Link</a>
                                          
                                   
                                          <label class="bg-success" id="kuchbe" for="files">Choose files</label>
                                          <hr />
                                          <input type="file" id="files" name="files[]" multiple autocomplete="off" style="display: none" />
                                   
                                </div>
                            </div><br>
                            <div class="form-row" id="fileLink1">
                                         <div class="col-md-12">
                                               <a  id="faddbtn" type="button" class="btn btn-sm btn-success m-t-10 float-right text-white" 
                                          style="font-size: 12px"><i class="fa fa-link" style="font-size: 12px"></i> Add File</a>
                                         </div>
                                   </div>
                                   
                             <div class="form-row" id="fileLink">
                                   
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">File Name<small
                                            class="text-danger">*</small></label>
                                      <input type="text" name="filename" class="form-control" id="validationDefault03"
                                        placeholder="required">
                                         @error('filename')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                

                                <div class="col-md-6 mb-3" id="deadline_div">
                                      
                                    <label for="validationDefault03">Add file link <small
                                            class="text-danger">*</small></label>
                                    <input type="url"  placeholder="https://example.com" pattern="https://.*" size="30" name="link" class="form-control">
                                        
                                </div>
                                
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Upload</button>
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
@endsection
@push('lead-store-script')


<script>
  $(document).ready(function () {
           $('#fileLink').hide();
           $('#fileLink1').hide()
           $('#fbtn').on('click',function(){
                 $('#fileLink').toggle();
                 $('#filerow').hide();
                  $('#fileLink1').show()
           });
           $('#faddbtn').on('click',function(){
            $('#fileLink').hide();
            $('#filerow').show();
            $('#fileLink1').hide()
           });
        });
</script>
<script>
     
         function deleteProjectCategory(elem) {
        var category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.project.category.delete') }}",
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


      <script>
        $(document).ready(function () {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function (e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });

    </script>
@endpush

