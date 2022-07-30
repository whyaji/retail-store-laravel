<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'list'=>DB::table('barangs')->get()
        );
        return view('index', $data);
    }
}
