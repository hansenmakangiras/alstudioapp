<?php

namespace App\Http\Controllers;

use App\Models\JenisPotong;
use App\Models\JenisSatuan;
use Illuminate\Http\Request;

class JenisPotongController extends Controller
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
        $jenisPotong = JenisPotong::orderBy('id', 'DESC')->paginate(10);

        return view('jenis-potong.index',compact('jenisPotong'))
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
        return view('jenis-potong.create', compact('satuan'));
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
            'jenis_potong' => 'required',
            'id_satuan' => 'required|integer',
            'hpp' => 'required|integer',
        ]);

//        $jenisPotong = Bahan::create($request->all()->except('_token'));

        $jenisPotong = new JenisPotong();
        $jenisPotong->jenis_potong = $request->jenis_potong;
        $jenisPotong->id_satuan = $request->id_satuan;
        $jenisPotong->hpp = $request->hpp;

        if($jenisPotong->save()){
            return redirect()->route('jenis-potong.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  array $jenisPotong, int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPotong $jenisPotong)
    {
        return view('jenis-potong.show',compact('jenisPotong'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisPotong = JenisPotong::find($id);
        $satuan = JenisSatuan::pluck('satuan','id');
        return view('jenis-potong.edit',compact('jenisPotong','id','satuan'));
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
            'jenis_potong' => 'required',
            'id_satuan' => 'required|integer',
            'hpp' => 'required',
        ]);

        $jenisPotong = JenisPotong::find($id);

        if($jenisPotong){
            $jenisPotong->update($request->all());
            return redirect()->route('jenis-potong.index')
                ->with('Sukses','Jenis Potong updated successfully');
        }

        return back()->with('Gagal','Jenis Potong gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisPotong = JenisPotong::find($id);
        if($jenisPotong->delete()){
            return redirect()->route('jenis-potong.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data gagal dihapus');
    }
}
