<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('/plugins/select2/js/select2.min.js') }}"></script>
<!--Data Tables js-->
<script src="{{ asset('/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>

<script>
    $(document).ready(function() {
        //Default data table
        $('#example').DataTable();
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });
        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
<!-- App JS -->
<script src="{{ url('/js/app.js') }}"></script>
<!-- Compiled and minified JavaScript -->

<script src="{{ url('/js/myscript.js') }}"></script>
