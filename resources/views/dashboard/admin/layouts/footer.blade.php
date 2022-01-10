 </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
     <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/dff/dff.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{asset('assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{asset('assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/plugins/c3-master/c3.min.js')}}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('assets/js/dashboard2.js')}}"></script>
     <!-- jQuery file upload -->
    <script src="{{asset('assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
       <!-- This is data table -->
    <script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/plugins/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
     <script>
      $(document).ready(function () {
        // Basic
        $(".dropify").dropify();

        // Translated
        $(".dropify-fr").dropify({
          messages: {
            default: "Glissez-déposez un fichier ici ou cliquez",
            replace: "Glissez-déposez un fichier ou cliquez pour remplacer",
            remove: "Supprimer",
            error: "Désolé, le fichier trop volumineux",
          },
        });

        // Used events
        var drEvent = $("#input-file-events").dropify();

        drEvent.on("dropify.beforeClear", function (event, element) {
          return confirm(
            'Do you really want to delete "' + element.file.name + '" ?'
          );
        });

        drEvent.on("dropify.afterClear", function (event, element) {
          alert("File deleted");
        });

        drEvent.on("dropify.errors", function (event, element) {
          console.log("Has Errors");
        });

        var drDestroy = $("#input-file-to-destroy").dropify();
        drDestroy = drDestroy.data("dropify");
        $("#toggleDropify").on("click", function (e) {
          e.preventDefault();
          if (drDestroy.isDropified()) {
            drDestroy.destroy();
          } else {
            drDestroy.init();
          }
        });
      });
    </script>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <script>
        @if(Session::has('messege'))
          toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>
<script>
    $(document).ready(function () {
        $('#adminForm').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("admin.profile.update")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                      toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                    if (data.success) {
                        toastr.success(data.success);
                    } else {
                        toastr.error(data.error[0]);
                    }
                }
            });
        });
    });

</script>
<script>
    $(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            //templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
        <!-- Sweet-Alert  -->
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Style switcher -->

    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
     <script>
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

    <script>
         $(document).on("click", "#archivep", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you sure?",
                  text: "Do you want to archive this project.",
                  icon: "warning",
                buttons: ["No, cancel please!", "Yes, archive it!"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

     <script>
         $(document).on("click", "#restore", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you sure?",
                  text: "Do you want to revert this project.",
                  icon: "warning",
                buttons: ["No, cancel please!", "Yes, revert it!"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

     <script>
         $(document).on("click", "#deleteMember", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you sure?",
                  text: "This will remove the member from the project.",
                  icon: "warning",
                buttons: ["No, cancel please!", "Yes, delete it!"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

  <script>
         $(document).on("click", "#deleteAssignee", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you sure?",
                  text: "This will remove the Assignee from the Task.",
                  icon: "warning",
                buttons: ["No, cancel please!", "Yes, delete it!"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

      <script>
         $(document).on("click", "#deleteLabel", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you sure?",
                  text: "This will remove the Label from the Task.",
                  icon: "warning",
                buttons: ["No, cancel please!", "Yes, delete it!"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
{{-- all leads page script --}}

{{-- get leadc id --}}

<script>
    function getLeadId(elem) {
        var lead_id = $(elem).attr("id");
        $('#leadId').val(lead_id);
    }

</script>

{{-- follow up form --}}

<script>
    $(document).ready(function(){
       
       $('#followUpForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.lead.folowUp.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                 success: function (data) {
                  if (data.success) {
                        toastr.success(data.success);
                    }

                }
            });
        });
    });
</script>


{{-- change lead status --}}
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.changeStatus').change(function () {
            var leadStatusId = $(this).val();
            var leadId = $(this).attr('id');
            $.ajax({
                url: "{{ route('admin.lead.change.status') }}",
                method: "POST",
                dataType: "json",

                data: {
                    _token: "{{ csrf_token() }}",
                    leadStatusId: leadStatusId,
                    leadId: leadId,
                },

                success: function (data) {
                    toastr.success(data.success);
                }
            });
        });


    });

</script>

    
    {{-- lead show update script --}}
<script>
    $(document).ready(function () {

        $('#leadForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.lead.update")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                    } else {
                        toastr.error(data[0]);
                    }
                }
            });
        });


    });

</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function deleteCategory(elem) {
        var category_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.lead.category.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                category_id: category_id,
            },

            success: function (data) {
                toastr.error(data.success);
            }
        });
    };

</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function deleteAgent(elem) {
        var agent_id = $(elem).attr("id");
        $.ajax({
            url: "{{ route('admin.lead.agent.delete') }}",
            method: "POST",
            dataType: "json",

            data: {
                _token: "{{ csrf_token() }}",
                agent_id: agent_id,
            },

            success: function (data) {
                toastr.error(data.success);
            }
        });
    };

</script>
<script>
    $(document).ready(function () {

        $('#categoryForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.lead.category.store")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                    }

                }
            });
        });


    });

</script>

<script>
    $(document).ready(function () {

        $('#leadSource').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.lead.source.store")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                    } else {
                        toastr.error(data[0]);
                    }

                }
            });
        });


    });

</script>

<script>
    $(document).ready(function () {

        $('#agentForm').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.lead.agent.store")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                    } 

                }
            });
        });


    });

</script> 
{{-- Save Department --}}
<script>
    $(document).ready(function(){
       $('#departmentForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.employee.department.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                 success: function (data) {
                  if (data.success) {
                        toastr.success(data.success);
                    }
                }
            });
     });
    });
</script>
{{-- Save Designation --}}
<script>
    $(document).ready(function(){
       $('#designationForm').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.employee.designation.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                 success: function (data) {
                  if (data.success) {
                        toastr.success(data.success);
                    }
                }
            });
     });
    });
</script>
@stack('lead-creat-page-script')
 {{-- lead store --}}
 @stack('lead-store-script')
 {{-- employe create page script --}}
 @stack('employee-create-page-script')
 @stack('employee-edit-page-script')
</body>
</html>