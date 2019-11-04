<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //creating function index as called
    public function index()
    {
        /* return 'ini list siswa - cara menyambungkan routes and controller - function and routes are connected'; */
        return view('siswa.index');
    }
}
