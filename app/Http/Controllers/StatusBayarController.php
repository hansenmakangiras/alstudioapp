<?php

namespace App\Http\Controllers;

use App\Models\StatusBayar;
use Illuminate\Http\Request;

class StatusBayarController extends Controller
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
        $statusBayar = StatusBayar::orderBy('id', 'DESC')->paginate(10);

        return view('statusbayar.index',compact('statusBayar'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statusbayar.create');
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

//        $statusBayar = Bahan::create($request->all()->except('_token'));

        $statusBayar = StatusBayar::create($request->all());

        if($statusBayar->save()){
            return redirect()->route('status-bayar.index')->with('Sukses','Data berhasil disimpan ke dalam database');
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
        $statusBayar = StatusBayar::find($id);
        return view('statusbayar.show',compact('id','statusBayar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statusBayar = StatusBayar::find($id);
        return view('statusbayar.edit',compact('statusBayar','id'));
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

        $statusBayar = StatusBayar::find($id);

        if($statusBayar){
            $statusBayar->update($request->all());
            return redirect()->route('status-bayar.index')
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
        $statusBayar = StatusBayar::find($id);
        if($statusBayar->delete()){
            return redirect()->route('status-bayar.index')
                ->with('Sukses','Data deleted successfully');
        }


        return back()->with('Gagal','Data failed to update');
    }
}
