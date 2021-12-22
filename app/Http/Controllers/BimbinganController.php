<?php

namespace App\Http\Controllers;

use App\Bimbingan;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function index($id)
    {
        $item = Bimbingan::with(['dosen_list', 'user']);
        return view('pages.bimbingan', [
            'item' => $item
        ]);
        dd($item);
    }

    public function create()
    {
        return view('pages.bimbingan');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nim' => 'required',
        'iddosen' => 'required',
        'uraianbimbingan' => 'required',
        'jenisbimbingan' => 'required',
        'tanggalbimbingan' => 'required',
        'statusbimbingan' => 'required',
        ]);
        Bimbingan::create([
            'nim' => request('nim'),
            'iddosen' => request('iddosen'),
            'uraianbimbingan' => request('uraianbimbingan'),
            'jenisbimbingan' => request('jenisbimbingan'),
            'tanggalbimbingan' => request('tanggalbimbingan'),
            'statusbimbingan' => request('statusbimbingan'),
        ]);
        return view('pages.success');
    }
}
