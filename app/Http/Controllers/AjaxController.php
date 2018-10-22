<?php

namespace App\Http\Controllers;

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
        if($request->ajax()){
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
        if($request->ajax()){
            $permissions = DB::table('permissions')->get();
            $json = ["data" => $permissions];

            return response()->json($json);
        }
        return abort(404);

    }

    public function getJenisPaket(Request $request)
    {
        if($request->ajax()){
            $jenisPaket = JenisPaket::getJenisPaket($request->id);
        }

        return response()->json($jenisPaket);

    }

    public function getDataPaket(Request $request)
    {
        if($request->ajax()){
            $jenisPaket = JenisPaket::getDataPaket($request->id);
        }

        return response()->json($jenisPaket);

    }

    public function getOrderData(Request $request){
        if($request->ajax())
            $order = Order::select();
            return DataTables::of($order)
                ->addColumn('details_url', function ($order){
                    return route('ajax.getOrderDetail', $order->id);
                })
                ->make(true);

    }

    public function getMasterData()
    {
        $users = User::select();

        return Datatables::of($users)
            ->addColumn('details_url', function($user) {
                return url('eloquent/details-data/' . $user->id);
            })
            ->make(true);
    }

    public function getOrderDetailsData($id)
    {
        $orderDetail = Order::find($id)->orderDetail();

        return Datatables::of($orderDetail)->make(true);
    }
}
