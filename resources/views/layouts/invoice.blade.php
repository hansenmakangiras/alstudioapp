<!DOCTYPE html>
<html>
<head>
    @include('layouts.partials.meta')
</head>

<body class="hold-transition {{ env('SKIN_THEME') }} sidebar-mini">
<div class="wrapper">
@include('layouts.partials.header')

<!-- Left side column. contains the logo and sidebar -->
@include('layouts.partials.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content-header')

    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
    </div>

    <!-- Main content -->
        <section class="invoice">
            @yield('content')

        </section>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018-2020 <a href="https://adminlte.io">AL Studio</a>.</strong> All rights
        reserved.
    </footer>
    @if (env('CONTROL_SIDEBAR') === true)
        @include('layouts.partials.control-sidebar')
    @endif

</div>
<!-- ./wrapper -->

@include('layouts.partials.scripts')
</body>
</html>

