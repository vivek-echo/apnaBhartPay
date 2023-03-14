<?php

namespace App\Http\Controllers\InnerPannel\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        
        return view('InnerPannel.Dashboard.Dashboard');
    }
}
