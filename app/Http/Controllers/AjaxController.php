<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Finishing;
use App\Models\JenisCetakan;
use App\Models\JenisDisplay;
use App\Models\JenisPaket;
use App\Models\JenisPotong;
use App\Models\JenisSatuan;
use App\Models\JenisUkuran;
use App\Models\Mesin;
use App\Models\Order;
use App\Models\Produk;
use App\Models\TipePelanggan;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Superadmin|Admin');
    }

    public function getPelanggan(Request $request)
    {
        if ($request->ajax()) {
            $pelanggan = DB::table('pelanggan')
                ->select(['*'])
                ->get();
            $json = ["data" => $pelanggan];
//            dd($pelanggan);
//            return json_encode($pelanggan);
            return response()->json($json);
        }

        return abort(404);

    }

    public function getPermission(Request $request)
    {
        if ($request->ajax()) {
            $permissions = DB::table('permissions')->get();
            $json = ["data" => $permissions];

            return response()->json($json);
        }
        return abort(404);

    }

    public function getJenisPaket(Request $request)
    {
        if ($request->ajax()) {
            $jenisPaket = JenisPaket::getJenisPaket($request->id);
        }

        return response()->json($jenisPaket);

    }

    public function getDataPaket(Request $request)
    {
        if ($request->ajax()) {
            $jenisPaket = JenisPaket::getDataPaket($request->id);
        }

        return response()->json($jenisPaket);

    }

    public function getOrderData(Request $request)
    {
        if ($request->ajax()){
            $order = Order::select();
            $model = Order::query();
        return DataTables::of($model)
            ->editColumn('cetakid', '{{ \App\Models\JenisCetakan::getJenisCetakName((int) $cetakid) }}')
            ->editColumn('jenispaketid', '{{ \App\Models\JenisPaket::getDataPaket($jenispaketid)->nama_paket }}')
            ->editColumn('pelangganid', '{{ \App\Models\Pelanggan::getPelangganName($pelangganid) }}')
            ->editColumn('total_harga', '{{ number_format($total_harga) }}')
            ->editColumn('status_order', '{{ \App\Models\StatusOrder::getStatusOrderName($status_order) }}')
            ->editColumn('status_bayar', '{{ \App\Models\StatusBayar::getStatusName($status_bayar)  }}')
            ->addColumn('action', function ($model) {
                return view('widget._action', [
                    'model' => $model,
                    'url_detail' => route('order.show', $model->id),
                    'url_edit' => route('order.edit', $model->id),
                    'url_delete' => route('order.destroy', $model->id)
                ]);
                /*return '<div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat btn-sm dropdown-toggle"
                        data-toggle="dropdown" aria-expanded="true"> Operasi
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="' . route('order.show', $order->id) . '"><i class="fa fa-chain"></i> Detail</a></li>
                        <li><a href="' . route('order.edit', $order->id) . '"><i class="fa fa-edit"></i> Edit</a></li>
                        <li>
                            <a href="' . route('order.destroy', $order->id) . '"><i class="fa fa-trash" onclick="$
                            (\'#frmdelete\').submit();"></i>
                            Hapus</a>
                            <form id="frmdelete" action="'.route('order.destroy', $order->id).'" method="POST"
                            style="display:none;">
                            </form>
                        </li>

                        <li><a href="' . route('order.proses', $order->id) . '"><i class="fa fa-balance-scale"></i> Proses</a></li>
                      </ul>
                    </div>';*/
            })
            ->rawColumns(['action'])
            ->make(true);
        }

    }

    public function getWorkOrderData(Request $request)
    {
        if ($request->ajax()){
            $order = Order::select();
            $model = Order::query();
            return DataTables::of($model)
//                ->editColumn('cetakid', '{{ \App\Models\JenisCetakan::getJenisCetakName((int) $cetakid) }}')
//                ->editColumn('jenispaketid', '{{ \App\Models\JenisPaket::getDataPaket($jenispaketid)->nama_paket }}')
                ->editColumn('pelangganid', '{{ \App\Models\Pelanggan::getPelangganName($pelangganid) }}')
                ->editColumn('total_harga', '{{ number_format($total_harga) }}')
                ->editColumn('status_order', '<span class="badge bg-red">{{ \App\Models\StatusOrder::getStatusOrderName($status_order) }}</span>')
                ->editColumn('status_bayar', '{{ \App\Models\StatusBayar::getStatusName($status_bayar)  }}')
                ->addColumn('action', function ($model) {
                    return view('widget._action', [
                        'model' => $model,
                        'url_detail' => route('work-order.show', $model->id),
                        'url_edit' => route('work-order.edit', $model->id),
                        'url_delete' => route('work-order.destroy', $model->id)
                    ]);
                    /*return '<div class="btn-group">
                          <button type="button" class="btn btn-warning btn-flat btn-sm dropdown-toggle"
                            data-toggle="dropdown" aria-expanded="true"> Operasi
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="' . route('order.show', $order->id) . '"><i class="fa fa-chain"></i> Detail</a></li>
                            <li><a href="' . route('order.edit', $order->id) . '"><i class="fa fa-edit"></i> Edit</a></li>
                            <li>
                                <a href="' . route('order.destroy', $order->id) . '"><i class="fa fa-trash" onclick="$
                                (\'#frmdelete\').submit();"></i>
                                Hapus</a>
                                <form id="frmdelete" action="'.route('order.destroy', $order->id).'" method="POST"
                                style="display:none;">
                                </form>
                            </li>

                            <li><a href="' . route('order.proses', $order->id) . '"><i class="fa fa-balance-scale"></i> Proses</a></li>
                          </ul>
                        </div>';*/
                })
                ->rawColumns(['action','status_order'])
                ->make(true);
        }

    }

    public function getMasterData()
    {
        $orders = Order::select();

        return Datatables::of($orders)
            ->addColumn('details_url', function ($user) {
                return url('eloquent/details-data/' . $user->id);
            })
            ->make(true);
    }

    public function getOrderDetailsData($id)
    {
        $orderDetail = Order::find($id)->orderDetail();
        return Datatables::of($orderDetail)->make(true);
    }

    public function postJenisCetak(Request $request){
        if($request->ajax()){
            $id = isset($request->id) ? $request->id : 0;
            if($id != 0){
//                $jenis = JenisCetakan::where('produk_id', $id)->get()->toJson();
                $jenis = JenisCetakan::where('produk_id', $id)->get();
                //dd($jenis);
                return response()->json(['items' => $jenis],200);
            }

            return response()->json(['items'=>[],'msg' => 'ID Produk tidak ditemukan'],200);
        }

        return response()->json(['items'=>[],'msg' => 'Method not allowed'],405);
    }

    public function loadForm(Request $request){
        if($request->ajax()){
            $produkid = $request->get('id');
            $mesin = Mesin::pluck('nama_mesin','id')->all();
            $bahan = Bahan::pluck('nama_bahan','id')->all();
            $finishing = Finishing::pluck('jenis_finishing','id')->all();
            $potong = JenisPotong::pluck('jenis_potong','id')->all();
            $ukuran = JenisUkuran::pluck('ukuran','id')->all();
            $satuan = JenisSatuan::pluck('satuan','id')->all();
            $tipePelanggan = TipePelanggan::pluck('tipe','id')->all();
            $display = JenisDisplay::pluck('jenis_display','id')->all();

            if($produkid == 1){
                return view('form-hjp.form-kartunama', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }elseif($produkid == 2 || $produkid == 3 || $produkid == 5 || $produkid == 6){
                return view('form-hjp.form-spanduk', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }elseif($produkid == 4){
                return view('form-hjp.form-sticker', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }elseif($produkid == 7){
                return view('form-hjp.form-foto', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }else{
                return "";
            }

        }
        return response()->json(['items'=>[],'msg' => 'Method not allowed'],405);
    }

    public function loadFormwo(Request $request){
        if($request->ajax()){
            $produkid = $request->get('id');
            $mesin = Mesin::pluck('nama_mesin','id')->all();
            $bahan = Bahan::pluck('nama_bahan','id')->all();
            $finishing = Finishing::pluck('jenis_finishing','id')->all();
            $potong = JenisPotong::pluck('jenis_potong','id')->all();
            $ukuran = JenisUkuran::pluck('ukuran','id')->all();
            $satuan = JenisSatuan::pluck('satuan','id')->all();
            $tipePelanggan = TipePelanggan::pluck('tipe','id')->all();
            $display = JenisDisplay::pluck('jenis_display','id')->all();

            if($produkid == 1){
                return view('work-orders.form.form-kartunama', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }elseif($produkid == 2 || $produkid == 3 || $produkid == 5 || $produkid == 6){
                return view('work-orders.form.form-spanduk', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }elseif($produkid == 4){
                return view('work-orders.form.form-sticker', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }elseif($produkid == 7){
                return view('work-orders.form.form-foto', compact(
                    'mesin','bahan','finishing','potong','display','ukuran','satuan','tipePelanggan'
                ));
            }else{
                return "";
            }

        }
        return response()->json(['items'=>[],'msg' => 'Method not allowed'],405);
    }

    public function calculate(Request $request)
    {
        if($request->ajax()){
            $produkid = $request->get('produk_id');
            $produk = Produk::pluck('nama_produk','id');
            $pro = in_array($produk, $produkid);
            dd($pro);
            return response()->json(['items'=>[],'msg' => 'Ajax Request'],200);
        }
        return response()->json(['items'=>[],'msg' => 'Method not allowed'],405);
    }
}
