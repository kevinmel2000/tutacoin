<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jual, App\BitcoinRate;
use \Input, \Redirect, \Session;
use App\Http\Requests\JualRequest;
use App\Bank;
use Carbon;
use Mail;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitcoin_rate_jual = BitcoinRate::find(1)->value('rate_jual');
        $bank = [''=>'-- Pilih Bank --'] + Bank::lists('nama_bank', 'nama_bank')->all();
        return view('beranda.jual', [
          'bitcoin_rate_jual' => $bitcoin_rate_jual,
          'bank' => $bank,
          ]);
    }

    public function bitcoin_rate_jual()
    {
      $bitcoin_rate_jual = BitcoinRate::find(1)->value('rate_jual');
      return $bitcoin_rate_jual;
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
    public function store(JualRequest $request)
    {
      $juals = new Jual;
      $juals->tgl_transaksi = Carbon::now();
      $juals->nama_lengkap = Input::get('nama_lengkap');
      $juals->email = Input::get('email');
      $juals->bank = Input::get('bank');
      $juals->no_rekening = Input::get('no_rekening');
      $juals->btc_jual = Input::get('btc_jual');
      $juals->no_hp = Input::get('no_hp');
      $juals->alamat_bitcoin = Input::get('alamat_bitcoin');
      $juals->rupiah_jual = Input::get('btc_jual') * $this->bitcoin_rate_jual();
      $juals->save();

  /*    //send email
      $jual = Jual::findOrFail($juals->id);
        Mail::send('email.order-jual', ['jual' => $jual], function ($m) use ($jual) {
            $m->from('mytuta@programmer.net', 'TutaCOIN');

            $m->to($jual->email, $jual->nama_lengkap)->subject('Jual Bitcoin!');
        });
*/

      Session::flash('message', 'Data Jual Bitcoin telah terkirim, harap baca keterangan dibawah ini');
      Session::flash('no_transaksi', $juals->id);
      Session::flash('tgl_transaksi', $juals->tgl_transaksi);
      Session::flash('nama_lengkap', $juals->nama_lengkap);
      Session::flash('email', $juals->email);
      Session::flash('no_hp', $juals->no_hp);
      Session::flash('bank', $juals->bank);
      Session::flash('no_rekening', $juals->no_rekening);
      Session::flash('alamat_bitcoin', $juals->alamat_bitcoin);
      Session::flash('btc_jual', $juals->btc_jual);
      Session::flash('rupiah_jual', $juals->rupiah_jual);
      return Redirect::to('jual');
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
