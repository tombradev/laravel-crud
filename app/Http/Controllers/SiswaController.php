<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //creating function index as called
    public function index()
    {
        /* return 'ini list siswa - cara menyambungkan routes and controller - function and routes are connected'; */
        $data_siswa = \App\Siswa::all(); //addnig namespace and model
        return view('siswa.index', ['data_siswa' => $data_siswa]); //adding associative array
    }

    public function create(){
        return 'form submitted';
    }
}
