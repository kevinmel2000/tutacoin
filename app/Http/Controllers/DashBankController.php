<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bank;
use Input, Session, Redirect;

class DashBankController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bank = Bank::all();
      return view('dashboard.berkas.bank.index', ['bank' => $bank]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berkas.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $bank = new Bank;
      $bank->nama_bank = Input::get('nama_bank');
      $bank->save();

      Session::flash('message', 'Menambah data bank sukses!');
      return Redirect::to('dashboard/berkas/bank');
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
      $bank = Bank::find($id);
      return view('dashboard.berkas.bank.edit', [
        'bank' => $bank
        ]);
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
      $bank = Bank::find($id);
      $bank->nama_bank = Input::get('nama_bank');
      $bank->save();

      Session::flash('message', 'Ganti Data Bank Sukses');
      return Redirect::to('dashboard/berkas/bank');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bank = Bank::find($id);
      $bank->delete();
      Session::flash('message', 'Menghapus Data bank Sukses');
      return Redirect::to('dashboard/berkas/bank');
    }
}
