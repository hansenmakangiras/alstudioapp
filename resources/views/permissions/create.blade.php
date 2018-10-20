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
            Create Permission
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
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add Permission</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control',
                        'id'=>'name'))
                         !!}
                    </div>
                    <div class="form-group">
                        @if(!$roles->isEmpty())
                        <label for="email">Assign Permissions to Roles : </label>
                        {{ Form::select('roles[]',$selectRoles,  null, [ 'class'=>'form-control select2',
                        'data-placeholder'=>'Pilih Permission', 'style' => "width: 100%",'multiple' => 'multiple' ]) }}
                        @endif
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
