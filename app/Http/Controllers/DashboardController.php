<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use App\Models\IbuHamilQuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'a') {
            $total_data = IbuHamil::count();
            $total_quisioner = IbuHamilQuisioner::count();
            return view('admin.index', compact('total_data', 'total_quisioner'));
        } else {
            return redirect()->route('form-quisioner');
        }
    }
}