<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\status;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = product::with('kategori')->whereHas('status', function ($query) {
            $query->where('nama_status', 'bisa dijual');
        })->get();
        $kategori = category::all();
        $status = status::all();
        return view('pages.produk.index', ['produk' => $produk, 'kategori' => $kategori, 'status' => $status]);
    }

    public function store_form_api(Request $request)
    {
        $client = new Client();
        $url = $request->link;
        $response = $client->request('POST', $url, [
            'headers' => ['Content-type: application/x-www-form-urlencoded'],
            'form_params' => [
                'username' => $request->username,
                'password' => md5($request->password),

            ],
            'timeout' => 20,
            'connect_timeout' => 20,
        ]);
        $data = $response->getBody()->getContents();
        $arrayData = json_decode($data, true);
        $data = $arrayData['data'];

        $kategori = collect($data)->groupBy('kategori')->keys()->toArray();
        $status = collect($data)->groupBy('status')->keys()->toArray();

        foreach ($kategori as $Kategori) {
            category::create([
                'nama_kategori' => $Kategori
            ]);
        }

        foreach ($status as $Status) {
            status::create([
                'nama_status' => $Status
            ]);
        }

        foreach ($data as $produk) {

            $namaKategori = category::where('nama_kategori', $produk['kategori'])->first();
            $namaStatus = status::where('nama_status', $produk['status'])->first();
            product::create([
                'nama_produk' => $produk['nama_produk'],
                'harga' => $produk['harga'],
                'kategori_id' => $namaKategori->id_kategori,
                'status_id' => $namaStatus->id_status
            ]);
        }

        return redirect('/produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'status' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/produk')->with('error', 'Gagal Menambahkan Data');
        }
        product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori_id' => $request->kategori,
            'status_id' => $request->status
        ]);
        return redirect('/produk')->with('success', 'Berhasil Menambahkan Data');;
    }

    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/produk')->with('error', 'Gagal Merubah Data');
        }

        product::where('id_produk', $id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori_id' => $request->kategori,
            'status_id' => $request->status
        ]);
        return redirect('/produk')->with('success', 'Berhasil Merubah Data');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::where('id_produk', $id)->delete();
        return redirect('/produk')->with('success', 'Berhasil Menghapus Data');
    }
}
