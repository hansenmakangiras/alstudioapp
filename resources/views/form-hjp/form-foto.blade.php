{{--{!! Form::open(array('route' => 'hjp.store','method'=>'POST','class'=>'form-horizontal')) !!}--}}
<fieldset>
    <div class="box-body">
        <div class="form-group">
            <label for="confirm" class="col-sm-4 control-label">Mesin</label>
            <div class="col-sm-8">
                {!! Form::select('mesin_id',$mesin, null, array
                ('placeholder' => 'Pilih Mesin','class' =>'form-control','autofocus')) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="confirm" class="col-sm-4 control-label">Bahan</label>
            <div class="col-sm-8">
                {!! Form::select('bahan_id',$bahan, null, array
                ('placeholder' => 'Pilih Bahan','class' =>'form-control select2','style'=>'width: 100%;')) !!}
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="confirm" class="col-sm-4 control-label">Ukuran (cm)</label>--}}
            {{--<div class="col-sm-8">--}}
                {{--{!! Form::select('sisi',['2x3','3x4','4x6','6x6','6x9'], null, ['class' =>'form-control select2','style'=>'width: 100%;']) !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            <label for="confirm" class="col-sm-4 control-label">Tipe Pelanggan</label>
            <div class="col-sm-8">
                {!! Form::select('tipe_pelanggan_id',$tipePelanggan, null, ['class' =>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="confirm" class="col-sm-4 control-label">Bingkai</label>
            <div class="col-sm-8">
                {!! Form::select('bingkai_id',['Tanpa Bingkai','Dengan Bingkai'], 0, ['class' =>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="confirm" class="col-sm-4 control-label">Cutting</label>
            <div class="col-sm-8">
                {!! Form::select('potong_id',$potong, null, ['class' =>'form-control select2','style'=>'width: 100%;']) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-4 control-label">Harga Jual (Rp)</label>
            <div class="col-sm-8">
                {!! Form::number('harga_jual', 0, array('placeholder' => 'Harga Jual','class' =>
            'form-control')) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-4 control-label">Jumlah Minimum</label>
            <div class="col-sm-8">
                {!! Form::number('min_qty', 0, array('placeholder' => 'Jumlah Minimum','class' =>
                'form-control')) !!}
            </div>
        </div>
        @include('forms.btn-cekharga')
    </div>
</fieldset>
@push('js')
    <script>
        $(function () {

        })
    </script>
@endpush
{{--{!! Form::close() !!}--}}
