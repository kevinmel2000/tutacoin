<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BitcoinRate;

class BerandaController extends Controller
{

    public function beranda()
    {
      $bitcoin_rate = BitcoinRate::find(1);
        return view('beranda.beranda',[
          'bitcoin_rate' => $bitcoin_rate,
          ]);
    }
    public function tentang()
    {
        return view('beranda.tentang');
    }
}
