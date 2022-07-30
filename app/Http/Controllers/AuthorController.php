<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $data = array(
            'list'=>DB::table('pegawai')->get()
        );
        return view('author', $data);
    }
}
