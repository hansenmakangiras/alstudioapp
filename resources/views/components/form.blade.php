@component()
    <form role="form" method="POST" action="{{ route('jenis-cetak.store') }}">
        @csrf
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
                    <label for="jeniscetak">Jenis Cetakan</label>
                    <input type="text" class="form-control" id="jeniscetak"
                           placeholder="Masukkan jenis cetakan" name="jenis-cetak" required
                           autofocus>
                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                </div>
                <div class="form-group">
                    <label for="ukuran">Ukuran Cetakan</label>
                    <input type="text" class="form-control" id="ukuran"
                           placeholder="Masukkan Ukuran Cetakan">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default pull-left"
                    data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endcomponent
