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

            <!-- Main content -->
            <section class="content">
                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.partials.footer')
        @if (env('CONTROL_SIDEBAR') === true)
            @include('layouts.partials.control-sidebar')
        @endif

    </div>
    <!-- ./wrapper -->

@include('layouts.partials.scripts')
</body>
</html>

