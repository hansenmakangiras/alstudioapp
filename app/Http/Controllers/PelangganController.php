<?php

namespace App\Http\Controllers;

use App\Models\StatusBayar;
use App\Models\Pelanggan;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:viewPelanggan');
        $this->middleware('permission:createPelanggan', ['only' => ['create','store']]);
        $this->middleware('permission:editPelanggan', ['only' => ['edit','update']]);
        $this->middleware('permission:deletePelanggan', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrPelanggan = StatusBayar::getSelectStatus();
        return view('pelanggan.create',compact('arrPelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'namapel' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'tgl_ambil' => 'required',
            'status_bayar' => 'required'
        ]);
        $input = $request->all();

        $pelanggan = new Pelanggan();
        $pelanggan->create($input);

        return redirect()->route('pelanggan.index')
            ->with('Sukses','Pelanggan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bahan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.show',compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'namapel' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'tgl_ambil' => 'required',
            'status_bayar' => 'required'
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
     * @param  \App\Bahan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        Pelanggan::find($pelanggan->id)->delete();
        return redirect()->route('pelanggan.index')
            ->with('Sukses','Pelanggan deleted successfully');
    }
}
