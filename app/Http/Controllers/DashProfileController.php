<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use \Auth, \Input, \Session, \Redirect;
use App\Http\Requests\UserRequest;
use Hash;

class DashProfileController extends Controller
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
      $user = User::find(Auth::user()->id);
      return view('dashboard.profile.index', ['user' => $user]);
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
    public function store(Request $request)
    {
        //
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
    public function update(UserRequest $request, $id)
    {
      if($id == 1)
  		{
  			Session::flash('message', 'Tidak dapat mengganti profil di demo TutaCOIN');
  			Session::flash('alert-class', 'alert-danger');
  	            return Redirect::to('dashboard/profile');
  		}
      $users = User::find($id);
      $users->name = Input::get('name');
      $users->email = Input::get('email');
      if(!empty(Input::get('password')))
      {
        $users->password = Hash::make(Input::get('password'));
      }
      $users->save();
      // redirect
      Session::flash('message', 'Sukses mengganti profil');
      return Redirect::to('dashboard/profile');
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
