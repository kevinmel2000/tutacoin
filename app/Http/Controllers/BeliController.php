<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Beli, App\BitcoinRate;
use \Input, \Redirect, \Session;
use App\Http\Requests\BeliRequest;
use App\Bank;
use Carbon;
use Mail;

class BeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bitcoin_rate_beli = BitcoinRate::find(1)->value('rate_beli');
      $bank = [''=>'-- Pilih Bank --'] + Bank::lists('nama_bank', 'nama_bank')->all();
      return view('beranda.beli', [
        'bitcoin_rate_beli' => $bitcoin_rate_beli,
        'bank' => $bank,
      ]);
    }

    public function bitcoin_rate_beli()
    {
      $bitcoin_rate_beli = BitcoinRate::find(1)->value('rate_beli');
      return $bitcoin_rate_beli;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeliRequest $request)
    {
      $beli = new Beli;
      $beli->tgl_transaksi = Carbon::now();
      $beli->nama_lengkap = Input::get('nama_lengkap');
      $beli->email = Input::get('email');
      $beli->bank = Input::get('bank');
      $beli->no_rekening = Input::get('no_rekening');
      $beli->btc_beli = Input::get('btc_beli');
      $beli->no_hp = Input::get('no_hp');
      $beli->alamat_bitcoin = Input::get('alamat_bitcoin');
      $beli->rupiah_beli = Input::get('btc_beli') * $this->bitcoin_rate_beli();
      $beli->save();

  /*    //send email
      $beli = Beli::findOrFail($beli->id);
        Mail::send('email.order-beli', ['beli' => $beli], function ($m) use ($beli) {
            $m->from('mytuta@programmer.net', 'TutaCOIN');

            $m->to($beli->email, $beli->nama_lengkap)->subject('Beli Bitcoin!');
        });
*/
      Session::flash('message', 'Data Beli Bitcoin telah terkirim, , harap baca keterangan dibawah ini');
      Session::flash('no_transaksi', $beli->id);
      Session::flash('tgl_transaksi', $beli->tgl_transaksi);
      Session::flash('nama_lengkap', $beli->nama_lengkap);
      Session::flash('email', $beli->email);
      Session::flash('no_hp', $beli->no_hp);
      Session::flash('bank', $beli->bank);
      Session::flash('no_rekening', $beli->no_rekening);
      Session::flash('alamat_bitcoin', $beli->alamat_bitcoin);
      Session::flash('btc_beli', $beli->btc_beli);
      Session::flash('rupiah_beli', $beli->rupiah_beli);
      return Redirect::to('beli');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
