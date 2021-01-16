<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $barang = Barang::paginate(15);
        return response()->json([$barang]);
    }
    public function store(Request $request)
    {
        $barang= Barang::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Barang was created!',
            'data' => $barang
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->qty = $request->qty;
        $barang->save();
        return response()->json([
            'status' => 'ok',
            'message' => 'Barang was Update!',
            'data' => $barang
        ], 200);
    }

    public function destroy($id)
    {
        $barang = Barang::find($id)->delete();
        return response()->json([
            'status' => 'ok',
            'message' => 'Barang was Delete!',
        ], 200);
        
    }

}
