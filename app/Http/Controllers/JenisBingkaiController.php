<?php

namespace App\Http\Controllers;

use App\Models\JenisBingkai;
use App\Models\JenisSatuan;
use Illuminate\Http\Request;

class JenisBingkaiController extends Controller
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
        $jenisBingkai = JenisBingkai::orderBy('id', 'DESC')->paginate(10);

        return view('jenis-bingkai.index',compact('jenisBingkai'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $satuan = JenisSatuan::pluck('satuan','id');
        return view('jenis-bingkai.create', compact('satuan'));
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
            'jenis_bingkai' => 'required',
            'hpp' => 'required|integer',
        ]);

//        $jenisBingkai = Bahan::create($request->all()->except('_token'));

        $jenisBingkai = new JenisBingkai();
        $jenisBingkai->jenis_bingkai = $request->jenis_bingkai;
        $jenisBingkai->hpp = $request->hpp;

        if($jenisBingkai->save()){
            return redirect()->route('jenis-bingkai.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  array $jenisBingkai, int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBingkai $jenisBingkai)
    {
        return view('jenis-bingkai.show',compact('jenisBingkai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisBingkai = JenisBingkai::find($id);
        return view('jenis-bingkai.edit',compact('jenisBingkai','id'));
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
            'jenis_bingkai' => 'required',
            'hpp' => 'required',
        ]);

        $jenisBingkai = JenisBingkai::find($id);

        if($jenisBingkai){
            $jenisBingkai->update($request->all());
            return redirect()->route('jenis-bingkai.index')
                ->with('Sukses','Jenis Bingkai updated successfully');
        }

        return back()->with('Gagal','Jenis Bingkai gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisBingkai = JenisBingkai::find($id);
        if($jenisBingkai->delete()){
            return redirect()->route('jenis-bingkai.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data gagal dihapus');
    }
}
