 </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    {{-- <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
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
    <!-- ============================================================== -->
   
<!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

     <!-- jQuery file upload -->
    <script src="{{asset('assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
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
            @if(session()->has('error'))
                                    
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
  		    toastr.error("{{ session('error') }}");       
            @endif
         </script>

          <script>
            @if(session()->has('message'))
                                    
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
  		    toastr.success("{{ session('message') }}");       
            @endif
         </script>
         <script>
    $(document).ready(function () {
        $('#superAdminForm').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("superAdmin.profile.update")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
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
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:00 GMT -->
</html>