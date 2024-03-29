<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //creating function index as called
    public function index()
    {
        /* return 'ini list siswa - cara menyambungkan routes and controller - function and routes are connected'; */
        $data_siswa = \App\Siswa::all()->sortByDesc('created_at'); //addnig namespace and model
        return view('siswa.index', ['data_siswa' => $data_siswa]); //adding associative array
    }

    public function create(Request $request){
        /* return $request -> all(); /* to see all the json input from web view */
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('success','Data inputted sucessfuly!');
    }

    public function edit($id){
        $siswa = \App\Siswa::find($id);
        /* dd($siswa);  check if worked */
        return view('siswa\edit', ['siswa'=> $siswa]);
    }

    public function update(Request $request,$id){
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('success', 'Data Updated!');
    }

    public function delete($id){
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('success','data deleted');
    }

}
