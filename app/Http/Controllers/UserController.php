<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create($nama = "", $kelas = "", $npm = "")
    { 
        $data = [
            'nama' => 'Anggie Armelia', 
            'kelas' => 'D', 
            'npm' => '2217051145' 
        ];
        
        return view('create_user'); 
    }

    public function store(Request $request)
    {
        // Membuat variabel $data dengan data dari request
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];

        // Mengirim data ke view profile
        return view('profile', $data);
    }
}
