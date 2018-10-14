<!-- Main row -->
<div class="row">
    <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
                <div class="box-tools">
                    <a href="{{ route('jenis-cetak.create') }}" class="btn btn-default btn-sm"><i class="fa
                        fa-plus"></i> Tambah Jenis</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Jenis Cetakan</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $val)
                        <tr>
                            <td>{{ $val->id }}</td>
                            <td>{{ $val->jenis_cetak }}
                            </td>
                            <td>
                                <a href="{{ route('jenis-cetak.edit',$val->id) }}" class="btn btn-flat btn-primary
                                btn-sm"><i
                                        class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row (main row) -->
