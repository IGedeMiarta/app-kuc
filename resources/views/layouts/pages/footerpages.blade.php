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
{{-- sweet alert --}}

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
<script src="{{ asset('/js/app.js') }}"></script>
<!-- Compiled and minified JavaScript -->

<script src="{{ asset('/js/myscript.js') }}"></script>
<!--notification js -->
<script>
    $('#datafaktur').on('click', function() {
        var kd_faktur = $(this).data('faktur');

        $.ajax({
            type: 'GET',
            data: {
                kodefaktur: kd_faktur
            },
            dataType: 'JSON',
            async: true,
            url: "{{ route('piutangtempo') }}",
            success: function(rs) {
                $('#nama').val(rs.data.nama);
                $('#kodecustomer').val(rs.data.kodecustomer);
                $('#kodefakturjual').val(rs.data.kodefakturjual);
                $('#tanggal').val(rs.data.tanggal);
                $('#tanggal2').val(rs.data.tanggal2);
                $('#alamat').val(rs.data.alamat);
                $('#namakota').val(rs.data.namakota);
            }
        })
    })
    $('.users-verif').on('click', function() {
        var userID = $(this).data('userid');

        $.ajax({
            type: 'GET',
            data: {
                id: userID
            },
            dataType: 'JSON',
            async: true,
            url: "{{ route('user.json') }}",
            success: function(rs) {
                $('#id').val(rs.data.id);
                $('#fullname').val(rs.data.fullname);
                $('#email').val(rs.data.email);
                $('#username').val(rs.data.username);
                $('#level').val(rs.data.level);
                $('#status').val(rs.data.status);
            }
        })
    })
</script>
