<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<!-- Vector map JavaScript -->
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ asset('/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('/js/index2.js') }}"></script>
<!-- App JS -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/plugins/select2/js/select2.min.js') }}"></script>
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
