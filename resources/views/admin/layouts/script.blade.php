    <script src="{{  asset('assets\js\vendors\jquery-3.2.1.min.js') }}"></script>
    <script src="{{  asset('assets\js\vendors\bootstrap.bundle.min.js') }}"></script>
    <script src="{{  asset('assets\js\vendors\jquery.sparkline.min.js') }}"></script>
    <script src="{{  asset('assets\js\vendors\selectize.min.js') }}"></script>
    <script src="{{  asset('assets\js\vendors\jquery.tablesorter.min.js') }}"></script>
    <script src="{{  asset('assets\js\vendors\circle-progress.min.js') }}"></script>
    <script src="{{  asset('assets\plugins\rating\jquery.rating-stars.js') }}"></script>
    <!-- Fullside-menu Js-->
    <script src="{{  asset('assets\plugins\fullside-menu\jquery.slimscroll.min.js') }}"></script>
    <script src="{{  asset('assets\plugins\fullside-menu\waves.min.js') }}"></script>
    <!-- Dashboard Core -->
    <script src="{{  asset('assets\js\index1.js') }}"></script>
    <!--Morris.js Charts Plugin -->
    <script src="{{  asset('assets\plugins\morris\raphael-min.js') }}"></script>
    <script src="{{  asset('assets\plugins\morris\morris.js') }}"></script>
    <!-- Custom scroll bar Js-->
    <script src="{{  asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Custom Js-->
    <script src="{{  asset('assets\js\custom.js') }}"></script>
    <script src="{{  asset('assets\plugins\select2\select2.full.min.js') }}"></script>
    <!-- Timepicker js -->
    <script src="{{  asset('assets\plugins\time-picker\jquery.timepicker.js') }}"></script>
    <script src="{{  asset('assets\plugins\time-picker\toggles.min.js') }}"></script>
    <!-- Datepicker js -->
    <script src="{{  asset('assets\plugins\date-picker\spectrum.js') }}"></script>
    <script src="{{  asset('assets\plugins\date-picker\jquery-ui.js') }}"></script>
    <script src="{{  asset('assets\plugins\input-mask\jquery.maskedinput.js') }}"></script>
    <!-- Inline js -->
    <script src="{{  asset('assets\js\select2.js') }}"></script>
    <!-- file uploads js -->
    <script src="{{  asset('assets\plugins\fileuploads\js\dropify.min.js') }}"></script>
    <script src="{{  asset('assets\plugins\datatable\jquery.dataTables.min.js') }}"></script>
    <script src="{{  asset('assets\plugins\datatable\dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{  asset('js\backend_js\myJS.js') }}"></script>
    <script src="{{  asset('js\backend_js\sweetAlert.js') }}"></script>
    
    <script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (2M max).'
        }
    });
    </script>
    
    <script>
    $(function(e) {
        $('#example').DataTable();
    });
    </script>