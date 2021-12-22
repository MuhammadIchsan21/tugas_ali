<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = Dosen::with(['galleries'])->get();
        return view('pages.home', ['items' => $items]);
    }
}
