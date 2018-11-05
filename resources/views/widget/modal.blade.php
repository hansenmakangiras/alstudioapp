<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-tambah-jenis">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jenis Cetakan</h4>
            </div>
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
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal form-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>

            </div>
            <div class="modal-body" id="modal-bodyku">
            </div>
            <div class="modal-footer" id="modal-footerq">
            </div>
        </div>
    </div>
</div>
<!-- end of modal ------------------------------>
