<?php

namespace App\Http\Controllers;

use App\Models\StatusCetak;
use Illuminate\Http\Request;

class StatusCetakController extends Controller
{
    public function __construct()
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
        $statusCetak = StatusCetak::orderBy('id', 'DESC')->paginate(10);

        return view('statuscetak.index',compact('statusCetak'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statuscetak.create');
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
            'statusbyr' => 'required',
        ]);

//        $statusCetak = Bahan::create($request->all()->except('_token'));

        $statusCetak = StatusCetak::create($request->all());

        if($statusCetak->save()){
            return redirect()->route('status-cetak.index')->with('Sukses','Data berhasil disimpan ke dalam database');
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
        $statusCetak = StatusCetak::find($id);
        return view('statuscetak.show',compact('id','statusCetak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statusCetak = StatusCetak::find($id);
        return view('statuscetak.edit',compact('statusCetak','id'));
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
            'statusbyr' => 'required',
        ]);

        $statusCetak = StatusCetak::find($id);

        if($statusCetak){
            $statusCetak->update($request->all());
            return redirect()->route('status-cetak.index')
                ->with('Sukses','Data updated successfully');
        }

        return back()->with('Gagal','Data failed to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statusCetak = StatusCetak::find($id);
        if($statusCetak->delete()){
            return redirect()->route('status-cetak.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data failed to update');
    }
}
