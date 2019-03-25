<!-- jQuery 3 -->
<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/datatables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/Buttons-1.5.4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/ColReorder-1.5.0/js/colReorder.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/FixedColumns-3.2.5/js/fixedColumns.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/FixedHeader-3.1.4/js/fixedHeader.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/JSZip-2.5.0/jszip.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/pdfmake-0.1.36/pdfmake.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/RowGroup-1.1.0/js/rowGroup.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/RowReorder-1.2.4/js/rowReorder.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/Scroller-1.5.0/js/scroller.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs4/Select-1.2.6/js/select.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/accounting.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.5.0/dist/sweetalert2.all.min.js"></script>-->
<!--{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.js"></script>--}}-->
@stack('js')
<script>
    let url = window.location;

    function calculateHarga(){
        Swal.fire({
            title: 'Apakah anda yakin ingin keluar?',
            text:'Keluar dari aplikasi',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Batal',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin!',
            allowOutsideClick: false,
            allowEscapeKey: false,
        });
    }

    /* for sidebar menu but not for treeview submenu */
    $('ul.sidebar-menu a').filter(function() {
        return this.href == url;
    }).parent().siblings().removeClass('active').end().addClass('active');

    /* for treeview which is like a  */
    $('ul.treeview-menu a').filter(function() {
        return this.href == url;
    }).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active').end().addClass('active');

    /* Auto close alert */
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 3000);

    /* Auto close callout */
    window.setTimeout(function() {
        $(".callout").fadeTo(300, 0).slideUp(300, function(){
            $(this).remove();
        });
    }, 5000);

    $('.select2').select2();
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
    });

    const swalWithCustomButton = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-info btn-flat',
            cancelButton: 'btn btn-danger btn-flat'
        },
        buttonsStyling: false,
    });

    /* Logout Form */
    $('#btnLogout').click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin ingin keluar?',
            text:'Keluar dari aplikasi',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Batal',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin!',
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.value) {
                document.getElementById('logout-form').submit();
            }
        });
    });

    /* Hapus Data Form */
    $('#btnHapus').click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus data ini?',
            text:'Hapus Data',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Batal',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin!',
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.value) {
                document.getElementById('delete-form').submit();
            }
        });
    });
</script>
