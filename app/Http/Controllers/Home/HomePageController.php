<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;

class HomePageController extends Controller
{
    public function index(){
            
        return view('Home.HomePage');
    }
}