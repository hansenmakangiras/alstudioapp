<?php

namespace App\Http\Controllers;

use App\Models\JenisDisplay;
use App\Models\JenisSatuan;
use Illuminate\Http\Request;

class JenisDisplayController extends Controller
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
        $jenisDisplay = JenisDisplay::orderBy('id', 'DESC')->paginate(10);

        return view('jenis-display.index',compact('jenisDisplay'))
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
        return view('jenis-display.create', compact('satuan'));
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
            'jenis_display' => 'required',
            'hpp' => 'required|integer',
        ]);

//        $jenisDisplay = Bahan::create($request->all()->except('_token'));

        $jenisDisplay = new JenisDisplay();
        $jenisDisplay->jenis_display = $request->jenis_display;
        $jenisDisplay->hpp = $request->hpp;

        if($jenisDisplay->save()){
            return redirect()->route('jenis-display.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  array $jenisDisplay, int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisDisplay $jenisDisplay)
    {
        return view('jenis-display.show',compact('jenisDisplay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisDisplay = JenisDisplay::find($id);
        return view('jenis-display.edit',compact('jenisDisplay','id'));
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
            'jenis_display' => 'required',
            'hpp' => 'required',
        ]);

        $jenisDisplay = JenisDisplay::find($id);

        if($jenisDisplay){
            $jenisDisplay->update($request->all());
            return redirect()->route('jenis-display.index')
                ->with('Sukses','Jenis Display updated successfully');
        }

        return back()->with('Gagal','Jenis Display gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisDisplay = JenisDisplay::find($id);
        if($jenisDisplay->delete()){
            return redirect()->route('jenis-display.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data gagal dihapus');
    }
}
