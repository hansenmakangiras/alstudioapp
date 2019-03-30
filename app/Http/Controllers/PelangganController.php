<?php

namespace App\Http\Controllers;

use App\Bahan;
use App\Models\Pelanggan;
use App\Models\StatusBayar;
use App\Models\TipePelanggan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PelangganController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('permission:managePelanggan');
//        $this->middleware('permission:createPelanggan', ['only' => ['create','store']]);
//        $this->middleware('permission:editPelanggan', ['only' => ['edit','update']]);
//        $this->middleware('permission:deletePelanggan', ['only' => ['destroy']]);
//        $this->middleware('role:Admin|Kasir|Superadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pelanggan = Pelanggan::paginate(10);
        return view('pelanggan.index',compact('pelanggan'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
//        $arrPromo = \App\Helper\AppHelper::generatePromoCode(10,6,'ALS','FAS',9,'abcdefghijklmn','',true,'AS');
//        $arrPromo = Promo::pluck('kode','id')->all();
        $arrJenisPelanggan = TipePelanggan::getArrayPelanggan();
        return view('pelanggan.create',compact('arrJenisPelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'namapel' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'email' => 'required|email|unique:pelanggan',
//            'status_pelanggan' => 'required',
            'jenis_pelanggan' => 'required'
        ]);
        $input = $request->all();

        $pelanggan = new Pelanggan();
        $pelanggan->status = 1;
        $pelanggan->create($input);

        return redirect()->route('pelanggan.index')
            ->with('Sukses','Pelanggan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  Bahan  $pelanggan
     * @return Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.show',compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pelanggan $pelanggan
     * @return Response
     */
    public function edit(Pelanggan $pelanggan)
    {
//        $pelanggan = Pelanggan::find($id);
        $arrPelanggan = StatusBayar::getSelectStatus();
        return view('pelanggan.edit', compact('arrPelanggan','pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'namapel' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'tgl_ambil' => 'required',
            'status_pelanggan' => 'required',
            'jenis_pelanggan' => 'required'
        ]);
        $input = $request->all();

        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($input);

        return redirect()->route('pelanggan.index')
            ->with('Sukses','Pelanggan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bahan  $pelanggan
     * @return Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        Pelanggan::find($pelanggan->id)->delete();
        return redirect()->route('pelanggan.index')
            ->with('Sukses','Pelanggan deleted successfully');
    }
}
