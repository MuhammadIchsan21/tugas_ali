<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $namadosen)
    {
        $item = Dosen::with(['galleries'])
        ->where('namadosen', $namadosen)
        ->firstOrFail();
        return view('pages.detail', [
            'item' => $item
        ]);
    }
}
