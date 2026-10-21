<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Jasmine Azzahra',
            'kelas' => 'XI RPL ',
            'jurusan' => 'Rekayasa Perangkat Lunak',    
            'sekolah' => 'SMK AL AZHAR SEMPU',
            'alamat' => 'Panjen',
            'hobi' => 'Membaca, mendengarkan lagu',
            'cita_cita' => 'Web Developer',

            
                ];

        return view('profil', $data);

    }
}
