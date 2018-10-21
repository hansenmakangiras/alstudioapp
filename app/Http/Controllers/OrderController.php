<?php

namespace App\Http\Controllers;

use App\Models\JenisCetakan;
use App\Models\JenisPaket;
use App\Models\Order;
use App\Models\Pelanggan;
use App\Models\StatusBayar;
use App\Models\StatusOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Superadmin|Admin|User');
//        $this->middleware('permission:viewOrder');
//        $this->middleware('permission:addOrder')->except(['create','store']);
//        $this->middleware('permission:editOrder')->except(['update','edit']);
//        $this->middleware('permission:deleteOrder')->except(['update','edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = Order::orderBy('id','DESC')->paginate(10);
        return view('order.index',compact('order'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statusByr = StatusBayar::pluck('statusbyr','id')->all();
        $jeniscetak = JenisCetakan::pluck('jenis_cetak','id')->all();
//        $orderid = $this->generateOrderID();
        $orderid2 = $this->getNextOrderNumber();
        $jenisPaket = JenisPaket::pluck('nama_paket','id')->all();
        $pelanggan = Pelanggan::pluck('namapel','id')->all();
        $statusOrder = StatusOrder::pluck('status_order','id');

        return view('order.create',compact('statusByr','jeniscetak','orderid','jenisPaket','orderid2','pelanggan','statusOrder'));
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
            'jeniscetak' => 'required',
            'pelanggan' => 'required',
            'jenispaket' => 'required',
            'hargajual' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'tglAmbil' => 'date',
            'bts_tgl_ambil' => 'date',
            'status_bayar' => 'required',
            'status_order' => 'required',
        ]);
        $input = $request->all();

        $order = new Order();
        $order->create([
            'orderid' => $input['orderid'],
            'jeniscetakid' => $input['jeniscetak'],
            'idpelanggan' => $input['pelanggan'],
            'jenispaketid' => $input['jenispaket'],
            'jumlah' => $input['jumlah'],
            'harga_jual' => $input['hargajual'],
            'satuan' => $input['satuan'],
            'total_harga' => $input['total_harga'],
            'diskon' => $input['diskon'],
            'keterangan' => $input['keterangan'],
            'tglAmbil' => $input['tglAmbil'],
            'bts_tgl_ambil' => $input['bts_tgl_ambil'],
            'status_bayar' => $input['status_bayar'],
            'status_order' => $input['status_order'],
            'status_aktif' => 1
        ]);

        return redirect()->route('order.index')
            ->with('Sukses','Order created successfully');
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
        $order = Order::find($id);
        $statusByr = StatusBayar::pluck('statusbyr','id')->all();
        $jeniscetak = JenisCetakan::pluck('jenis_cetak','id')->all();
        $orderid = $this->generateOrderID();
        $orderid2 = $this->getNextOrderNumber('ORD-');
        $jenisPaket = JenisPaket::pluck('nama_paket','id')->all();
        $pelanggan = Pelanggan::pluck('namapel','id')->all();

        return view('order.create',compact('statusByr','jeniscetak','orderid','jenisPaket','orderid2','pelanggan','order'));
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
            'jeniscetak' => 'required',
            'pelanggan' => 'required',
            'jenispaket' => 'required',
            'hargajual' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'tglAmbil' => 'date',
            'bts_tgl_ambil' => 'date',
//            'status_bayar' => 'required',
        ]);
        $input = $request->all();

        $order = Order::find($id);
        $order->update([
            'orderid' => $input['orderid'],
            'jeniscetakid' => $input['jeniscetak'],
            'idpelanggan' => $input['pelanggan'],
            'jenispaketid' => $input['jenispaket'],
            'jumlah' => $input['jumlah'],
            'harga_jual' => $input['hargajual'],
            'satuan' => $input['satuan'],
            'total_harga' => $input['total_harga'],
            'diskon' => $input['diskon'],
            'keterangan' => $input['keterangan'],
            'tglAmbil' => $input['tglAmbil'],
            'bts_tgl_ambil' => $input['bts_tgl_ambil'],
            'status_bayar' => $input['status_bayar'],
            'status_order' => $input['status_order'],
            'status_aktif' => 1
        ]);

        return redirect()->route('order.index')
            ->with('Sukses','Order updated successfully');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function proses($id)
    {
        //
    }

    /**
     * Generate auto orderid
     *
     * @return
     */
    private function generateOrderID()
    {
        $orderObj = \DB::table('order')->select('orderid')->latest('id')->first();
        if ($orderObj) {
            $orderid = $orderObj->orderid;
            $removed1char = substr($orderid, 1);
            $generateOrder_nr = $stpad = '#' . str_pad($removed1char + 1, 8, "0", STR_PAD_LEFT);
        } else {
            $generateOrder_nr = '#' . str_pad(1, 8, "0", STR_PAD_LEFT);
        }
        return $generateOrder_nr;
    }



    private function getNextOrderNumber($substr = 'ORD')
    {
        // Get the last created order
        $lastOrder = Order::orderBy('created_at', 'desc')->first();


        if ( ! $lastOrder )
            // We get here if there is no order at all
            // If there is no number set it to 0, which will be 1 at the end.

            $number = 0;
        else
            $number = substr($lastOrder->orderid, 3);

        // If we have ORD000001 in the database then we only want the number
        // So the substr returns this 000001

        // Add the string in front and higher up the number.
        // the %05d part makes sure that there are always 6 numbers in the string.
        // so it adds the missing zero's when needed.

        return $substr . sprintf('%06d', intval($number) + 1);
    }

    public function prosesCetak(Request $request)
    {
        return view('order.proses-cetak');
    }

    public function postProsesCetak(Request $request)
    {
        return view('order.proses-cetak');
    }

    public function prosesFoto(Request $request)
    {
        return view('order.proses-foto');
    }

    public function postProsesFoto(Request $request)
    {
        return view('order.proses-foto');
    }
}
