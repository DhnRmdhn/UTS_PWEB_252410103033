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
        return redirect()->route('dashboard', [
            'username' => $request->input('username'),
            'nim' => $request->input('nim'),
        ]);
    }

    public function dashboard(Request $request)
    {
        $tugas = $this->dataTugas();
        $total = count($tugas);
        $selesai = count(array_filter($tugas, fn($t) => $t['status'] == 'Selesai'));
        $belum = array_values(array_filter($tugas, fn($t) => $t['status'] != 'Selesai'));

        return view('dashboard', [
            'username' => $request->query('username'),
            'nim' => $request->query('nim'),
            'jumlahTugas' => $total,
            'selesai' => $selesai,
            'persen' => round($selesai / $total * 100),
            'deadlineTerdekat' => $belum[0]['matkul'] ?? 'Semua selesai',
            'terdekat' => array_slice($belum, 0, 3),
        ]);
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->query('username'),
            'nim' => $request->query('nim'),
            'biodata' => [
                'Program Studi' => 'Informatika',
                'Semester' => '3',
                'Kelas' => 'C',
           ],
        ]);
    }

    public function pengelolaan(Request $request)
    {
        return view('pengelolaan', [
            'username' => $request->query('username'),
            'nim' => $request->query('nim'),
            'tugas' => $this->dataTugas(),
        ]);
    }
    
    private function dataTugas()
    {
        return [
            ['matkul' => 'Pemrograman Website', 'tugas' => 'UTS Laravel', 'deadline' => '10 Nov 2026', 'status' => 'Selesai'],
            ['matkul' => 'Pemrograman Fungsional', 'tugas' => 'Progress Projek Akhir', 'deadline' => '10 Nov 2026', 'status' => 'Dikerjakan'],
            ['matkul' => 'Pertanian Industrial Berkelanjutan', 'tugas' => 'Presentasi', 'deadline' => '10 Nov 2026', 'status' => 'Selesai'],
            ['matkul' => 'Pemrograman Website', 'tugas' => 'Progress Projek Akhir', 'deadline' => '11 Nov 2026', 'status' => 'Dikerjakan'],
            ['matkul' => 'PBO', 'tugas' => 'Progress Projek Akhir', 'deadline' => '12 Nov 2026', 'status' => 'Dikerjakan'],
            ['matkul' => 'ADPL', 'tugas' => 'Sequence Diagram', 'deadline' => '12 Nov 2026', 'status' => 'Dikerjakan'],
            ['matkul' => 'Grafika Komputer', 'tugas' => 'Progress Projek Akhir', 'deadline' => '12 Nov 2026', 'status' => 'Belum'],
            ['matkul' => 'MKSI', 'tugas' => 'Final Projek Akhir', 'deadline' => '13 Nov 2026', 'status' => 'Belum'],
        ];
    }
}