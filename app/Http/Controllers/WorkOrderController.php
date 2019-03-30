<?php

namespace App\Http\Controllers;

use App\Models\JenisCetakan;
use App\Models\JenisPaket;
use App\Models\JenisSatuan;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Promo;
use App\Models\StatusBayar;
use App\Models\StatusOrder;
use App\Models\TipePelanggan;
use App\Models\WorkOrder;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Superadmin|Admin|User');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workOrder = WorkOrder::orderBy('id','DESC')->paginate(10);
        return view('work-orders.index',compact('workOrder'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $produk = Produk::pluck('kategori','id');
        $pelanggan = Pelanggan::pluck('namapel','id');

        return view('work-orders.create',compact(
            'produk','pelanggan'
        )) ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        request()->validate([
            'orderid' => 'required',
            'pelangganid' => 'required',
            'hjp_id' => 'required',
            'status_bayar' => 'required',
            'status_order' => 'required',
            'total_harga' => 'required',
            'total_harga' => 'date',
            'total_order' => 'required',
        ]);

        $input = $request->all();

        $cariWO = WorkOrder::where('produkid',$input['produkid'])->with('HargaJualProduk')->first();
        if(!$cariWO){
            $workOrder = new WorkOrder();
            $workOrder->create([
                'orderid' => $input['orderid'],
                'hjp_id' => $input['jeniscetak'],
                'pelangganid' => $input['pelanggan'],
                'jenispaketid' => $input['jenispaket'],
                'promoid' => $input['promo'],
                'total_harga' => $input['total_harga'],
            ]);

            if($workOrder){
                $cariOrder = Order::where('orderid',$input['orderid'])->with('orderDetail')->first();

                $cariOrder->orderDetail()->create([
                    'orderid' => $input['orderid'],
                    'panjang' => $input['panjang'],
                    'lebar' => $input['lebar'],
                    'qty' => $input['qty'],
                    'harga_jual' => $input['hargajual'],
                    'satuan' => $input['satuan'],
                    'promo' => $input['promo'] ?? 1,
                    'keterangan' => $input['keterangan'],
                    'tgl_ambil' => $input['tgl_ambil'],
                    'status_bayar' => $input['status_bayar'] ?? 1,
                    'status_order' => $input['status_order'] ?? 1,
                ]);

                return redirect()->route('work-orders.create', compact('cariOrder'))
                    ->with('Sukses','Order created successfully');

            }
            return redirect()->route('work-orders.index')
                ->with('Gagal','Order Failed save to database');
        }

        $cari->orderDetail()->create([
            'orderid' => $cari->orderid,
            'panjang' => $input['panjang'],
            'lebar' => $input['lebar'],
            'qty' => $input['qty'],
            'harga_jual' => $input['hargajual'],
            'satuan' => $input['satuan'],
            'promo' => $input['promo'],
            'keterangan' => $input['keterangan'],
            'tgl_ambil' => $input['tgl_ambil'],
            'status_bayar' => $input['status_bayar'],
            'status_order' => $input['status_order'],
        ]);

        return redirect()->route('work-orders.index')
            ->with('Sukses','Order created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Order $order)
    {
        return view('work-orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $statusByr = StatusBayar::pluck('statusbyr','id')->all();
        $jeniscetak = JenisCetakan::with('produk')->pluck('jenis_cetak','id')->all();
//        $produk = Produk::with('jenisCetak')->get()->toArray();
        $orderid = $this->getNextOrderNumber();
        $jenisPaket = JenisPaket::pluck('nama_paket','id')->all();
        $pelanggan = Pelanggan::pluck('namapel','id')->all();
        $statusOrder = StatusOrder::pluck('status_order','id');
//        $arrOrder = Order::pluck('orderid','orderid')->all();
        $produk = Produk::pluck('kategori','id')->all();
//        $order = Order::orderBy('id','DESC')->with('orderDetail')->paginate(10);
        $order = Order::find($id)->with('orderDetail')->get();
//        if(!$arrOrder){
//            $arrOrder = [$orderid2 => $orderid2];
//        }
        $arrPromo = Promo::pluck('kode','id')->all();
        $arrJenisPelanggan = TipePelanggan::getArrayPelanggan();

        return view('work-orders.edit',compact(
            'statusByr',
            'jeniscetak',
            'orderid',
            'jenisPaket',
            'pelanggan',
            'statusOrder',
            'arrPromo',
            'arrJenisPelanggan',
            'produk',
            'order',
            'id'
        ));
//        ))->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
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

        return redirect()->route('work-orders.index')
            ->with('Sukses','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function proses(Request $request)
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
        $orderObj = DB::table('order')->select('orderid')->latest('id')->first();
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
        return view('work-orders.proses-cetak');
    }

    public function postProsesCetak(Request $request)
    {
        return view('work-orders.proses-cetak');
    }

    public function prosesFoto(Request $request)
    {
        return view('work-orders.proses-foto');
    }

    public function postProsesFoto(Request $request)
    {
        return view('work-orders.proses-foto');
    }

    public function getForm(Request $request){
        $satuan = JenisSatuan::pluck('satuan','id')->all();
        return view('forms.order-form', compact('satuan'));
    }

}
