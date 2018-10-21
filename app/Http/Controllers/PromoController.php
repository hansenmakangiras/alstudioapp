<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    function __construct()
    {
//        $this->middleware('permission:managePelanggan');
//        $this->middleware('permission:createPelanggan', ['only' => ['create','store']]);
//        $this->middleware('permission:editPelanggan', ['only' => ['edit','update']]);
//        $this->middleware('permission:deletePelanggan', ['only' => ['destroy']]);
        $this->middleware('role:Admin|Kasir|Superadmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promo = Promo::paginate(10);
        return view('promo.index',compact('promo'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $arrPromo = \App\Helper\AppHelper::generatePromoCode(10,6,'ALS','FAS',9,'abcdefghijklmn','',true,'AS');
        $promocode = str_random(6);
        $arrJenisPelanggan = Pelanggan::getArrJenisPelanggan();
        return view('promo.create',compact('arrPelanggan','arrJenisPelanggan','promocode'));
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
            'kode' => 'required',
            'namapromo' => 'required',
            'deskripsi' => 'required',
            'expire_date' => 'required',
            'tipe_pelanggan' => 'required',
        ]);
        $input = $request->all();

//        dd($input);
        $promo = new Promo();
        $promo->create($input);


        return redirect()->route('promo.index')
            ->with('Sukses','Promo created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        return view('promo.show',compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
//        $promo  = Promo::find($promo->id);
        $arrJenisPelanggan = Pelanggan::getArrJenisPelanggan();
        return view('promo.edit', compact('arrJenisPelanggan','promo'));
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
            'kode' => 'required',
            'namapromo' => 'required',
            'deskripsi' => 'required',
            'expire_date' => 'required',
            'tipe_pelanggan' => 'required',
        ]);
        $input = $request->all();

        $promo = Promo::find($id);
        $promo->update($input);

        return redirect()->route('promo.index')
            ->with('Sukses','Promo updated successfully');
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

    /**
     * Generate promo code.
     *
     * @param  int  $count, int $length
     * @return \Illuminate\Http\Response
     */
    public function generateCoupons($count, $length = 6)
    {
        $coupons = [];
        while(count($coupons) < $count) {
            do {
                $coupon = strtoupper(str_random($length));
            } while (in_array($coupon, $coupons));
            $coupons[] = $coupon;
        }

        $existing = Promo::whereIn('kode', $coupons)->count();
        if ($existing > 0)
            $coupons += $this->generateCoupons($existing, $length);

        return (count($coupons) == 1) ? $coupons[0] : $coupons;
    }
}
