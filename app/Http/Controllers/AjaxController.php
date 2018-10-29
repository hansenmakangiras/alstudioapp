<?php

namespace App\Http\Controllers;

use App\Models\JenisCetakan;
use App\Models\JenisPaket;
use App\Models\Order;
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
        if ($request->ajax())
            $order = Order::select();
        return DataTables::of($order)
//                ->editColumn('status_bayar', '{{ }}')
            ->addColumn('action', function ($order) {
//                    return '<a href="'.route('order.edit', $order->id).'" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>';
                return '<div class="btn-group">
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
                    </div>';
            })
            ->make(true);

    }

    public function getMasterData()
    {
        $users = User::select();

        return Datatables::of($users)
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

                return response()->json(['items' => $jenis]);
            }

            return response()->json(['msg' => 'Not Found'],404);
        }

        return response()->json(['msg' => 'Method not found'],403);
    }
}
