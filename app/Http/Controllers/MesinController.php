<?php

namespace App\Http\Controllers;

use App\Models\JenisSatuan;
use App\Models\Mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    function __construct()
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
        $mesin = Mesin::orderBy('id', 'DESC')->paginate(10);

        return view('mesin.index',compact('mesin'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $satuan = JenisSatuan::pluck('satuan','id');
        return view('mesin.create');
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
            'nama_mesin' => 'required',
            'tipe_mesin' => 'required',
            'hpp' => 'required',
        ]);

//        $mesin = Bahan::create($request->all()->except('_token'));

        $mesin = new Mesin();
        $mesin->nama_mesin = $request->nama_mesin;
        $mesin->tipe_mesin = $request->tipe_mesin;
        $mesin->hpp = $request->hpp;

        if($mesin->save()){
            return redirect()->route('mesin.index')->with('Sukses','Data berhasil disimpan ke dalam database');
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
        $mesin = Mesin::find($id);
        return view('mesin.show',compact('mesin','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesin = Mesin::find($id);
        $satuan = JenisSatuan::pluck('satuan','id');
        return view('mesin.edit',compact('mesin','id','satuan'));
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
            'nama_mesin' => 'required',
            'tipe_mesin' => 'required',
            'hpp' => 'required',
        ]);

        $mesin = Mesin::find($id);

        if($mesin){
            $mesin->update($request->all());
            return redirect()->route('mesin.index')
                ->with('Sukses','Mesin updated successfully');
        }

        return back()->with('Gagal','Mesin gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
