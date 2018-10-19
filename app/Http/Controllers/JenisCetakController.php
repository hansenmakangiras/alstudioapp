<?php

namespace App\Http\Controllers;

use App\Models\JenisCetakan;
use Illuminate\Http\Request;

class JenisCetakController extends Controller
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
        $data = JenisCetakan::orderBy('id', 'DESC')->paginate(10);
//        $data = JenisCetakan::latest()->get();
        return view('jenis-cetak.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis-cetak.create');
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
            'kode_jenis' => 'required',
            'jenis_cetak' => 'required',
        ]);

        $jeniscetak = new JenisCetakan();
        $jeniscetak->kode_jenis = $request->kode_jenis;
        $jeniscetak->jenis_cetak = $request->jenis_cetak;
        $jeniscetak->status_cetak = 1;

        if($jeniscetak->save()){
            return redirect()->route('jenis-cetak.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisCetakan $jenisCetakan)
    {
        return view('jenis-cetak.show',compact('jenisCetakan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisCetakan = JenisCetakan::find($id);
        return view('jenis-cetak.edit',compact('jenisCetakan','id'));
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
            'jenis_cetak' => 'required',
            'ukuran' => 'required',
            'kode_jenis' => 'required',
        ]);

        $jenisCetakan = JenisCetakan::find($id);

        if($jenisCetakan){

            $jenisCetakan->update($request->all());
            return redirect()->route('jenis-cetak.index')
                ->with('Sukses','Jenis cetakan updated successfully');
        }



        return back()->with('Gagal','Jenis cetakan gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jeniscetak = JenisCetakan::find($id);
        if($jeniscetak->delete()){
            return redirect()->route('jenis-cetak.index')
                ->with('Sukses','Jenis Cetakan deleted successfully');
        }


        return back()->with('Gagal','Jenis Cetakan gagal dihapus');
    }
}
