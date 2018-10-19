@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Tambah Pengguna
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Users
            <small>Data Pengguna</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            {{--<div class="callout callout-info">--}}
                {{--<h4>Reminder!</h4>--}}
                {{--Instructions for how to use modals are available on the--}}
                {{--<a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>--}}
            {{--</div>--}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah Pengguna</h3>
                    {{--<div class="box-tools">--}}
                        {{--<a href="{{ route('users.index') }}" class="btn btn-default btn-sm"><i class="fa--}}
                        {{--fa-arrow-left"></i> Kembali ke list pengguna</a>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="name">Username</label>
                        {!! Form::text('username', null, array('placeholder' => 'Username','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="confirm">Confirm Password</label>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="roles">Role</label>
                        {{--@foreach ($roles as $role)--}}
                            {{--{!! Form::checkbox('roles[]',  $role->id ) !!}--}}
                            {{--{!! Form::label($role->name, ucfirst($role->name)) !!}<br>--}}
                        {{--@endforeach--}}
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('users.index') }}" class="btn btn-default">Kembali ke list
                            pengguna</a>
                    </div>
                </div>
            {!! Form::close() !!}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')

    <script>

    </script>
@endpush
