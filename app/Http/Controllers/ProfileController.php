<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
{ 
    $data = [ 
        'nama' => $request->input('nama'), 
        'kelas' => $request->input('kelas'), 
        'npm' => $request->input('npm'), 
        ]; 
return view('profile', $data); 
}

}

