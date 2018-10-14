@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Tambah Role
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Roles
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
            @include('widget.alert')
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
                    <h3 class="box-title">Tambah Roles</h3>
                    {{--<div class="box-tools">--}}
                        {{--<a href="{{ route('users.index') }}" class="btn btn-default btn-sm"><i class="fa--}}
                        {{--fa-arrow-left"></i> Kembali ke list pengguna</a>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control',
                        'id'=>'name'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Assign Permissions : </label>
                        {{--@foreach($permissions as $value)--}}
                            {{--<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}--}}
                                {{--{{ $value->name }}--}}
                            {{--</label>--}}
                            {{--<br/>--}}
                        {{--@endforeach--}}
                        {{ Form::select('permission',$permit,  null, [ 'class'=>'form-control select2',
                        'multiple' => 'multiple', 'data-placeholder'=>'Pilih Permission', 'style' => "width: 100%" ]) }}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--@foreach ($permissions as $permission)--}}
                                    {{--{{ Form::checkbox('permissions[]',  $permission->id, false, ['class'=>'flat-red']--}}
                                    {{--) }}--}}

                                    {{--{{ Form::label($permission->name, ucfirst($permission->name),['class' =>--}}
                                    {{--'flat-red']) }}<br>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-default">Kembali ke list
                            role</a>
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
