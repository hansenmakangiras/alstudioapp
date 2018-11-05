<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\JenisSatuan;
use Illuminate\Http\Request;

class BahanController extends Controller
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
        $bahan = Bahan::orderBy('id', 'DESC')->paginate(10);

        return view('bahan.index',compact('bahan'))
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
        return view('bahan.create', compact('satuan'));
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
            'nama_bahan' => 'required',
            'id_satuan' => 'required|integer',
            'hpp' => 'required',
        ]);

//        $bahan = Bahan::create($request->all()->except('_token'));

        $bahan = new Bahan();
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->id_satuan = $request->id_satuan;
        $bahan->hpp = $request->hpp;

        if($bahan->save()){
            return redirect()->route('bahan.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  array $bahan, int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bahan $bahan,  $id)
    {
        return view('bahan.show',compact('bahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bahan = Bahan::find($id);
        return view('bahan.edit',compact('bahan','id'));
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
            'id_satuan' => 'required',
            'nama_bahan' => 'required',
            'hpp' => 'required',
        ]);

        $bahan = Bahan::find($id);

        if($bahan){

            $bahan->update($request->all());
            return redirect()->route('bahan.index')
                ->with('Sukses','Bahan updated successfully');
        }



        return back()->with('Gagal','Bahan gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahan = Bahan::find($id);
        if($bahan->delete()){
            return redirect()->route('bahan.index')
                ->with('Sukses','Bahan deleted successfully');
        }


        return back()->with('Gagal','Bahan gagal dihapus');
    }
}
