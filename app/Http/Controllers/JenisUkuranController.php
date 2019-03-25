<?php

namespace App\Http\Controllers;

use App\Models\JenisSatuan;
use App\Models\JenisUkuran;
use App\Models\Produk;
use Illuminate\Http\Request;

class JenisUkuranController extends Controller
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
        $jenisUkuran = JenisUkuran::orderBy('id', 'DESC')->paginate(10);

        return view('jenis-ukuran.index',compact('jenisUkuran'))
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
        $produk = Produk::pluck('kategori','id');
        return view('jenis-ukuran.create', compact('satuan','produk'));
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
            'produk_id' => 'required|integer',
            'panjang' => 'required|integer',
            'lebar' => 'required|integer',
            'satuan_id' => 'required|integer',
//            'harga' => 'required|integer',
        ]);

//        $jenisUkuran = Bahan::create($request->all()->except('_token'));

        $jenisUkuran = new JenisUkuran();
        $jenisUkuran->ukuran = $request->panjang.'x'.$request->lebar;
        $jenisUkuran->panjang = $request->panjang;
        $jenisUkuran->produk_id = $request->produk_id;
        $jenisUkuran->lebar = $request->lebar;
        $jenisUkuran->satuan_id = $request->satuan_id;
        $jenisUkuran->harga = $request->harga;

        if($jenisUkuran->save()){
            return redirect()->route('jenis-ukuran.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  array $jenisUkuran, int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisUkuran $jenisUkuran)
    {
        return view('jenis-ukuran.show',compact('jenisUkuran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisUkuran = JenisUkuran::find($id);
        $produk = Produk::pluck('kategori','id');
        $satuan = JenisSatuan::pluck('satuan','id');
        return view('jenis-ukuran.edit',compact('jenisUkuran','id','produk','satuan'));
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
            'produk_id' => 'required|integer',
            'panjang' => 'required|integer',
            'lebar' => 'required|integer',
            'satuan_id' => 'required|integer',
//            'harga' => 'required|integer',
        ]);

        $jenisUkuran = JenisUkuran::find($id);

        if($jenisUkuran){
            $jenisUkuran->update($request->all());
            return redirect()->route('jenis-ukuran.index')
                ->with('Sukses','Jenis Ukuran updated successfully');
        }

        return back()->with('Gagal','Jenis Ukuran gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisUkuran = JenisUkuran::find($id);
        if($jenisUkuran->delete()){
            return redirect()->route('jenis-ukuran.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data gagal dihapus');
    }
}
