<?php

namespace App\Http\Controllers;

use App\Models\TipePelanggan;
use Illuminate\Http\Request;

class TipePelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Kasir|Admin|Superadmin|Cetak|Foto');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipePelanggan = TipePelanggan::orderBy('id', 'DESC')->paginate(10);

        return view('tipepelanggan.index',compact('tipePelanggan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipepelanggan.create');
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
            'statusbyr' => 'required',
        ]);

//        $tipePelanggan = Bahan::create($request->all()->except('_token'));

        $tipePelanggan = TipePelanggan::create($request->all());

        if($tipePelanggan->save()){
            return redirect()->route('tipe-pelanggan.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipePelanggan = TipePelanggan::find($id);
        return view('tipepelanggan.show',compact('id','tipePelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipePelanggan = TipePelanggan::find($id);
        return view('tipepelanggan.edit',compact('tipePelanggan','id'));
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
            'statusbyr' => 'required',
        ]);

        $tipePelanggan = TipePelanggan::find($id);

        if($tipePelanggan){
            $tipePelanggan->update($request->all());
            return redirect()->route('tipe-pelanggan.index')
                ->with('Sukses','Data updated successfully');
        }

        return back()->with('Gagal','Data failed to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipePelanggan = TipePelanggan::find($id);
        if($tipePelanggan->delete()){
            return redirect()->route('tipe-pelanggan.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data failed to update');
    }
}
