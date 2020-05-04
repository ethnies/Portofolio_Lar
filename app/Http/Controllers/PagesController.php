<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('index2');
    }

    public function about()
    {
        $nama = 'Fadhli Ranuahrja';
        $first_name = 'Fadhli';
        $middle_name = '';
        $last_name = 'Ranuharja';
        $affiliation = 'Universitas Negeri Padang';
        return view('about', ['depan'=> $first_name, 'tengah'=> $middle_name, 'akhir'=> $last_name, 'affiliasi'=> $affiliation ] );
    
    }

    public function mahasiswa()
    {
      return view('mahasiswa');
    }
}
