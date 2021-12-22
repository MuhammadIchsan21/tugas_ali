<?php

namespace App\Http\Controllers\Admin;

use App\Bimbingan;
use App\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'dosen' => Dosen::count(),
            'bimbingan' => Bimbingan::count(),
        ]);
    }
}
