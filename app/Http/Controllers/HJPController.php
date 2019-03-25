<?php

namespace App\Http\Controllers;

use App\Models\HJP;
use App\Models\Produk;
use Illuminate\Http\Request;

class HJPController extends Controller
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
        $hjp = HJP::orderBy('id', 'DESC')->paginate(10);
        $produk = Produk::pluck('kategori','id');

        return view('hjp.index',compact('hjp','produk'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::pluck('kategori','id');
        return view('hjp.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bahan_id' => 'required|integer',
            'mesin_id' => 'required|integer',
            'harga_jual' => 'required|integer',
            'min_qty' => 'required|integer',
//            'finishing_id' => 'required|integer',
        ]);

        $hjp = new HJP();
        $hjp->produk_id = $request->input('produk_id');
        $hjp->bahan_id = $request->input('bahan_id');
        $hjp->mesin_id = $request->input('mesin_id');
        $hjp->tipe_pelanggan_id = $request->input('tipe_pelanggan_id');
        $hjp->harga_jual = $request->input('harga_jual');
        $hjp->min_qty = $request->input('min_qty');
        $hjp->ukuran = 0;

        if($request->input('produk_id') == 1){
            $request->validate([
                'potong_id' => 'required|integer',
            ]);

            $hjp->potong_id = $request->input('finishing_id');
            if($hjp->save()){
                return redirect()->route('hjp.index')->with('Success','Data HJP berhasi di simpan ke database');
            }
            return redirect()->route('hjp.create')->with('Error','Data HJP Gagal disimpan ke database');
        }elseif($request->input('produk_id') == 2 || $request->input('produk_id') == 3 || $request->input('produk_id') == 5 || $request->input('produk_id') == 6){

            if($hjp->save()){
                return redirect()->route('hjp.index')->with('Success','Data HJP berhasi di simpan ke database');
            }
            return redirect()->route('hjp.create')->with('Error','Data HJP Gagal disimpan ke database');

        }elseif($request->input('produk_id') == 4){
            $request->validate([
//                'finishing_id' => 'required|integer',
                'potong_id' => 'required|integer',
            ]);

            $hjp->potong_id = $request->input('potong_id');
//            $hjp->potong_id = $request->input('potong_id');

            if($hjp->save()){
                return redirect()->route('hjp.index')->with('Success','Data HJP berhasi di simpan ke database');
            }

            return redirect()->route('hjp.create')->with('Error','Data HJP Gagal disimpan ke database');
        }elseif($request->input('produk_id') == 7){
            $request->validate([
                'bingkai_id' => 'required|integer',
                'potong_id' => 'required|integer',
            ]);

            $hjp->bingkai_id = $request->input('bingkai_id');
            $hjp->potong_id = $request->input('potong_id');

            if($hjp->save()){
                return redirect()->route('hjp.index')->with('Success','Data HJP berhasi di simpan ke database');
            }

            return redirect()->route('hjp.create')->with('Error','Data HJP Gagal disimpan ke database');
        }else{
            return redirect()->route('hjp.create');
        }

//        dd($request->all());
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
