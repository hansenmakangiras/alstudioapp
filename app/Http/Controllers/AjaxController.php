<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\JenisCetakan;
use App\Models\JenisSatuan;
use App\Permission;
use App\Role;
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
}
