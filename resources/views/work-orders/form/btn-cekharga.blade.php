<div class="form-group">
    <label for="email" class="col-sm-4 control-label"></label>
    <div class="col-sm-4">
        <a onclick="calculateHarga();" id="btnCalculate" href="#" class="btn btn-success btn-block">Cek Harga</a>
    </div>
    <div id="tots" class="col-sm-4">
        {!! Form::text('tots',null,['class'=>'form-control','disabled']) !!}
    </div>
    {{--<a href="{{ route('pelanggan.index') }}" class="btn btn-default">Kembali</a>--}}
</div>
@push('js')
    <script>

        // $('#btnCalculate').click(function (e) {
        //     e.preventDefault();
        //     calculateHarga();
        // });
    </script>
@endpush
