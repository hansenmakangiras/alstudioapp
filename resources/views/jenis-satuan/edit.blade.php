@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Satuan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jenis Satuan
            <small>Data Master</small>
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
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ubah Jenis Satuan - {{ $jenisSatuan->kode }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('satuan.update', $id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="kode">Kode Satuan</label>
                                    <input type="text" class="form-control" id="kode"
                                           placeholder="Masukkan Kode Jenis" name="kode" value="{{ $jenisSatuan->kode }}"
                                           required autofocus>
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                </div>
                                <div class="form-group">
                                    <label for="satuan">Jenis Satuan</label>
                                    <input type="text" class="form-control" id="satuan"
                                           placeholder="Masukkan jenis satuan" name="satuan" value="{{ $jenisSatuan->satuan }}"
                                           required>
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="ukuran">Ukuran Cetakan</label>--}}
                                    {{--<input type="text" class="form-control" id="ukuran" name="ukuran"--}}
                                           {{--placeholder="Masukkan Ukuran Cetakan" value="{{ $jenisSatuan->ukuran--}}
                                     {{--}}">--}}
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="catatan">Catatan</label>--}}
                                    {{--<input type="text" class="form-control" id="catatan" name="deskrips"--}}
                                           {{--placeholder="Tambahkan catatan bila perlu" value="{{--}}
                                    {{--$jenisSatuan->deskripsi--}}
                                     {{--}}">--}}
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="modal-footer text-center">
                            <a href="{{ route('satuan.index') }}" class="btn btn-default"><i class="fa
                        fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')

@endpush
