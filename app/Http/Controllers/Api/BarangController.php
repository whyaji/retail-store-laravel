<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BarangResource;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return response([
            'total' => $barang->count(),
            'messages' => 'Retrieved successfuly',
            'data' => BarangResource::collection($barang)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_golongan' => 'required',
            'barcode' => 'required',
            'nama_barang' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'diskon' => 'required',
            'stock_barang' => 'required',
            'brg_golongan_nama_golongan' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $barang = Barang::create($request->all());
        return response(['data' => new BarangResource($barang), 'message' => 'Package has been created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kode_barang
     * @return \Illuminate\Http\Response
     */
    public function show($kode_barang)
    {
        $barangs =  Barang::where('kode_barang',$kode_barang)->first();
        if ($barangs != null) {
            return response(['project' => new BarangResource($barangs), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kode_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_barang)
    {
        $validator = Validator::make($request->all(), [
            'nama_golongan' => 'required',
            'barcode' => 'required',
            'nama_barang' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'diskon' => 'required',
            'stock_barang' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $barang = Barang::where('kode_barang',$kode_barang)->first();
        if ($barang != null) {
            $barang->update($request->all());
            return response(['data' => new BarangResource($barang), 'message' => 'Package has been updated!'], 202);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kode_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_barang)
    {
        $barang = Barang::where('kode_barang',$kode_barang)->first();
        if ($barang != null) {
            $barang->delete();
            return response(['message' => 'Package has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}
