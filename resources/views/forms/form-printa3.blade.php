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
        <label for="confirm" class="col-sm-4 control-label">Sisi</label>
        <div class="col-sm-8">
            {!! Form::select('sisi',['1 Sisi','2 Sisi'], null, array
        ('class' =>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="confirm" class="col-sm-4 control-label">Laminating</label>
        <div class="col-sm-8">
            {!! Form::select('finishing_id',$finishing, null, array
        ('placeholder' => 'Pilih Finishing','class' =>'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="confirm" class="col-sm-4 control-label">Sisi Laminating</label>
        <div class="col-sm-8">
            {!! Form::select('sisi_laminating',['0 Sisi','1 Sisi','2 Sisi'], null, ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="confirm" class="col-sm-4 control-label">Cutting</label>
        <div class="col-sm-8">
            {!! Form::select('potong_id',$potong, null, ['class' =>'form-control']) !!}
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
{!! Form::close() !!}
