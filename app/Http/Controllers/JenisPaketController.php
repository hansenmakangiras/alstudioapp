<?php

namespace App\Http\Controllers;

use App\Models\JenisCetakan;
use App\Models\JenisPaket;
use DB;
use Illuminate\Http\Request;

class JenisPaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:User|Admin|Superadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jenispaket = JenisPaket::latest()->paginate(10);
        return view('jenispaket.index',compact('jenispaket'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jeniscetak = JenisCetakan::pluck('jenis_cetak','id')->all();
        return view('jenispaket.create',compact('jeniscetak'));
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
            'jeniscetak' => 'required',
            'nama_paket' => 'required',
//            'jumlah' => 'required',
//            'satuan' => 'required',
            'harga_jual' => 'required'
        ]);
        $input = $request->all();

        $jenispaket = new JenisPaket();
        $jenispaket->create([
            'id_jenis_cetak' => $input['jeniscetak'],
            'nama_paket' => $input['nama_paket'],
            'ukuran' => $input['ukuran'],
            'deskripsi' => $input['deskripsi'],
//            'jumlah' => $input['jumlah'],
            'harga_jual' => $input['harga_jual'],
//            'satuan' => $input['satuan'],
            'status' => 1
        ]);

        return redirect()->route('jenispaket.index')
            ->with('Sukses','Jenis Paket created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPaket $jenispaket)
    {
        return view('jenispaket.show',compact('jenispaket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPaket $jenispaket)
    {
        $jeniscetak = JenisCetakan::pluck('jenis_cetak','id')->all();
        return view('jenispaket.edit', compact('jeniscetak','jenispaket'));
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
            'jeniscetak' => 'required',
            'nama_paket' => 'required',
//            'jumlah' => 'required',
//            'satuan' => 'required',
            'harga_jual' => 'required'
        ]);
        $input = $request->all();

        $jenispaket = JenisPaket::find($id);
        $jenispaket->update($input);

        return redirect()->route('jenispaket.index')
            ->with('Sukses','Jenis paket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPaket $jenispaket)
    {
        Pelanggan::find($jenispaket->id)->delete();
        return redirect()->route('jenispaket.index')
            ->with('Sukses','Jenis paket deleted successfully');
    }
}
