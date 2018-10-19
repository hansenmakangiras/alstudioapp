@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Cetakan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jenis Cetakan
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
                    <h3 class="box-title">Ubah Jenis Cetakan - {{ $jenisCetakan->jenis_cetak }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('jenis-cetak.update', $id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="jeniscetak">Kode Jenis</label>
                                    <input type="text" class="form-control" id="kodejenis"
                                           placeholder="Masukkan Kode Jenis" name="kode_jenis" value="{{ $jenisCetakan->kode_jenis }}"
                                           required autofocus>
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                </div>
                                <div class="form-group">
                                    <label for="jeniscetak">Jenis Cetakan</label>
                                    <input type="text" class="form-control" id="jeniscetak"
                                           placeholder="Masukkan jenis cetakan" name="jenis_cetak" value="{{ $jenisCetakan->jenis_cetak }}"
                                           required>
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="ukuran">Ukuran Cetakan</label>--}}
                                    {{--<input type="text" class="form-control" id="ukuran" name="ukuran"--}}
                                           {{--placeholder="Masukkan Ukuran Cetakan" value="{{ $jenisCetakan->ukuran--}}
                                     {{--}}">--}}
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="catatan">Catatan</label>--}}
                                    {{--<input type="text" class="form-control" id="catatan" name="deskrips"--}}
                                           {{--placeholder="Tambahkan catatan bila perlu" value="{{--}}
                                    {{--$jenisCetakan->deskripsi--}}
                                     {{--}}">--}}
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                {{--</div>--}}
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="modal-footer text-center">
                            <a href="{{ route('jenis-cetak.index') }}" class="btn btn-default"><i class="fa
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
