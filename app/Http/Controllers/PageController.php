<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', [
            'username' => $username
        ]);
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', [
            'username' => $request->query('username'),
            'jumlahTugas' => 4,
            'selesai' => 1,
            'deadlineTerdekat' => 'Pemrograman Website',
        ]);
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->query('username'),
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $tugas = [
            ['matkul' => 'Pemrograman Web', 'tugas' => 'UTS Laravel', 'deadline' => '10 Nov 2026', 'status' => 'Dikerjakan'],
            ['matkul' => 'ADPL', 'tugas' => 'Class Diagram', 'deadline' => '12 Nov 2026', 'status' => 'Belum'],
            ['matkul' => 'PBO', 'tugas' => 'Proyek Agroindustri', 'deadline' => '15 Nov 2026', 'status' => 'Belum'],
            ['matkul' => 'Basis Data', 'tugas' => 'ERD', 'deadline' => '8 Nov 2026', 'status' => 'Selesai'],
        ];

        return view('pengelolaan', [
            'username' => $request->query('username'),
            'tugas' => $tugas,
        ]);
    }
}
