<?php

namespace App\Http\Controllers;

use App\Models\JenisSatuan;
use Illuminate\Http\Request;

class JenisSatuanController extends Controller
{
    function __construct()
    {
//        $this->middleware('permission:viewJenisCetak');
//        $this->middleware('permission:Manage Cetakan');
//        $this->middleware('permission:addJenisCetak', ['only' => ['create','store']]);
//        $this->middleware('permission:editJenisCetak', ['only' => ['edit','update']]);
//        $this->middleware('permission:deleteJenisCetak', ['only' => ['destroy']]);
        $this->middleware('role:Kasir|Admin|Superadmin|Cetak|Foto');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JenisSatuan::orderBy('id', 'DESC')->paginate(10);
//        $data = JenisCetakan::latest()->get();
        return view('jenis-satuan.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis-satuan.create');
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
            'kode' => 'required',
            'satuan' => 'required',
        ]);

        $jenisSatuan = new JenisSatuan();
        $jenisSatuan->kode = $request->kode;
        $jenisSatuan->satuan = $request->satuan;

        if($jenisSatuan->save()){
            return redirect()->route('satuan.index')->with('Sukses','Data berhasil disimpan ke dalam database');
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
        return view('jenis-satuan.show',compact('jenisCetakan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisSatuan = JenisSatuan::find($id);
        return view('jenis-satuan.edit',compact('jenisSatuan','id'));
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
            'kode' => 'required',
            'satuan' => 'required',
        ]);

        $jenisSatuan = JenisSatuan::find($id);

        if($jenisSatuan){

            $jenisSatuan->update($request->all());
            return redirect()->route('satuan.index')
                ->with('Sukses','Jenis satuan updated successfully');
        }



        return back()->with('Gagal','Jenis satuan gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisSatuan = JenisSatuan::find($id);
        if($jenisSatuan->delete()){
            return redirect()->route('satuan.index')
                ->with('Sukses','Jenis Satuan deleted successfully');
        }


        return back()->with('Gagal','Jenis Satuan gagal dihapus');
    }
}
