<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
{ 
    $data = [
        'nama' => 'Anggie Armelia', 
        'kelas' => 'D', 
        'npm' => '2217051145' 
    ];
return view('profile', $data); 
}

}

