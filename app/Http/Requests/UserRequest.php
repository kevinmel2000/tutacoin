<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use \Auth;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      switch($this->method())
      {
      case 'GET':
      case 'DELETE':
      {
          return [];
      }
      case 'POST':
      case 'PUT':
        return [
            'name' => 'required',
      			'email' => 'required|email|unique:users,email,' . Auth::id(),
      			'password' => 'min:6|max:30|confirmed',
        ];
      case 'PATCH':
      default:break;
  }
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email salah.',
            'email.unique' => 'Email sudah ada yang punya',
        ];
    }
}
