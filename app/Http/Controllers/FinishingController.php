<?php

namespace App\Http\Controllers;

use App\Models\Finishing;
use App\Models\JenisSatuan;
use Illuminate\Http\Request;

class FinishingController extends Controller
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
        $finishing = Finishing::orderBy('id', 'DESC')->paginate(10);

        return view('finishing.index',compact('finishing'))
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
        return view('finishing.create', compact('satuan'));
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
            'jenis_finishing' => 'required',
            'id_satuan' => 'required|integer',
            'hpp' => 'required|integer',
        ]);

//        $finishing = Bahan::create($request->all()->except('_token'));

        $finishing = new Finishing();
        $finishing->jenis_finishing = $request->jenis_finishing;
        $finishing->id_satuan = $request->id_satuan;
        $finishing->hpp = $request->hpp;

        if($finishing->save()){
            return redirect()->route('finishing.index')->with('Sukses','Data berhasil disimpan ke dalam database');
        }

        return back()->with('Gagal','Data gagal disimpan ke database');
    }

    /**
     * Display the specified resource.
     *
     * @param  array $finishing, int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Finishing $finishing)
    {
        return view('finishing.show',compact('finishing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finishing = Finishing::find($id);
        $satuan = JenisSatuan::pluck('satuan','id');
        return view('finishing.edit',compact('finishing','id','satuan'));
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
            'jenis_finishing' => 'required',
            'id_satuan' => 'required|integer',
            'hpp' => 'required',
        ]);

        $finishing = Finishing::find($id);

        if($finishing){
            $finishing->update($request->all());
            return redirect()->route('finishing.index')
                ->with('Sukses','Finishing updated successfully');
        }

        return back()->with('Gagal','Finishing gagal di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finishing = Finishing::find($id);
        if($finishing->delete()){
            return redirect()->route('finishing.index')
                ->with('Sukses','Finishing deleted successfully');
        }


        return back()->with('Gagal','Finishing gagal dihapus');
    }
}
