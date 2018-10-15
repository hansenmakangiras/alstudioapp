@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Permission
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Permission
            <small>Management</small>
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
        <div class="col-xs-6">
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
                    <h3 class="box-title">Update Permission - {{ $permission->name }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($permission, ['method' => 'PATCH','route' => ['permissions.update', $permission->id]]) !!}
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Permission Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('permissions.index') }}" class="btn btn-default">Kembali ke list
                            Permission</a>
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
