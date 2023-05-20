<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArkatamaLaravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pengguna = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '1234567890',
                'role' => 'Admin',
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '9876543210',
                'role' => 'User',
            ],
            [
                'id' => 3,
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '9876543210',
                'role' => 'User',
            ],
            [
                'id' => 4,
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '9876543210',
                'role' => 'User',
            ],
            [
                'id' => 5,
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '9876543210',
                'role' => 'Admin',
            ],
            [
                'id' => 6,
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '9876543210',
                'role' => 'Admin',
            ],
            
            // Tambahkan data pengguna lainnya
        ];

        return view('data_pengguna', compact('data_pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_pengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('edit_pengguna');
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
        //
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
}
