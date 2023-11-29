<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.produk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store_form_api(Request $request)
    {
        $parameter = [
            'username' => $request->username,
            'password' => md5($request->password),

        ];
        // dd(json_encode($parameter));
        $client = new Client();
        $url = $request->link;
        // dd($url);
        $response = $client->request('POST', $url, [
            'headers' => ['Content-type: application/x-www-form-urlencoded'],
                'form_params' => [
                    'username' => $request->username,
                    'password' => md5($request->password),

                ],
                'timeout' => 20, // Response timeout
                'connect_timeout' => 20, // Connection timeout
            ]);
        $data = $response->getBody()->getContents();
        $arrayData = json_decode($data, true);
        $data =$arrayData['data'];

        $collection = new Collection($data_package);

        $data_category = $collection->filter(function ($value) {
            return $value['status'] == 1;
        });

        dd($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
