<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        // return view('index');

        $siswa = DB::table('siswa')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['siswa' => $siswa]);
    }
}
