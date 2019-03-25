{!! Form::open(array('route' => 'hjp.store','method'=>'POST','class'=>'form-horizontal')) !!}
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
            ('placeholder' => 'Pilih Bahan','class' =>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="confirm" class="col-sm-4 control-label">Ukuran</label>
        <div class="col-sm-8">
{{--            {!! Form::select('ukuran',$ukuran, null, ['class' =>'form-control','placeholder'=>'Pilih Ukuran']) !!}--}}
           <div class="row">
               <div class="col-sm-6">
                   <div class="form-group">
                       <label for="email" class="col-sm-4 control-label">Panjang</label>
                       <div class="col-sm-8">
                           {!! Form::number('panjang', 0, array('placeholder' => 'Panjang','class' =>
                           'form-control')) !!}
                       </div>
                   </div>
               </div>
               <div class="col-sm-6">
                   <div class="form-group">
                       <label for="email" class="col-sm-4 control-label">Lebar</label>
                       <div class="col-sm-8">
                           {!! Form::number('lebar', 0, array('placeholder' => 'Lebar','class' =>
                           'form-control')) !!}
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
    <div class="form-group">
        <label for="confirm" class="col-sm-4 control-label">Tipe Pelanggan</label>
        <div class="col-sm-8">
            {!! Form::select('tipe_pelanggan_id',$tipePelanggan, null, ['class' =>'form-control']) !!}
        </div>
    </div>
    {{--<div class="form-group">--}}
        {{--<label for="name" class="col-sm-4 control-label">Harga Jual (Rp)</label>--}}
        {{--<div class="col-sm-8">--}}
            {{--{!! Form::number('harga_jual', 0, array('placeholder' => 'Harga Jual','class' =>--}}
        {{--'form-control')) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="email" class="col-sm-4 control-label">Jumlah Minimum</label>--}}
        {{--<div class="col-sm-8">--}}
            {{--{!! Form::number('min_qty', 0, array('placeholder' => 'Jumlah Minimum','class' =>--}}
            {{--'form-control')) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@include('forms.btn-cekharga')--}}
</div>
{!! Form::close() !!}
@push('js')
    <script>
    </script>
@endpush
