<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas; // Pastikan ini ada
// use App\Http\Request\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create($nama = "", $kelas = "", $npm = "")
    { 
        return view('create_user', [
            'kelas' => Kelas::all(), // Mengambil semua data kelas dari database
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);
    
        $user = UserModel::create($validatedData);
    
        $user->load('kelas');
    
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
    
    }