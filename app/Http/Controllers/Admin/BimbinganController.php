<?php

namespace App\Http\Controllers\Admin;

use App\Bimbingan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $items = Bimbingan::with([
            'dosen_list', 'user'
        ])->get();
        // dd($items);
        // datanya ada cuma ada kesalahan di db biasanya
        // traval id 1 udh ke hapus jadi error, klo mau cek dd
        return view('pages.admin.bimbingan.index', [
            'items' => $items
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $item = Bimbingan::with(['user', 'dosen_list'])->findOrFail($id);

        return view('pages.admin.bimbingan.detail', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
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
        $item = Bimbingan::findOrFail($id);
        $item->delete();
        return redirect()->route('bimbingan.index');
    }
}
