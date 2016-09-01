<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JualRequest extends Request
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
        return [
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'btc_jual' => 'required|numeric|min:0.00000001',
            'no_hp' => 'required',
            'alamat_bitcoin' => 'required',
            'bank' => 'required',
            'no_rekening' => 'required',
        ];
      case 'PUT':
      case 'PATCH':
      default:break;
      }
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Nama Lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format Email tidak sesuai',
            'btc_jual.required' => 'BTC harus diisi',
            'btc_jual.numeric' => 'BTC harus disi dengan angka',
            'btc_jual.min' => 'Minimal BTC harus 0.00000001',
            'no_hp.required' => 'No. HP harus diisi',
            'alamat_bitcoin.required' => 'Alamat Bitcoin harus diisi',
            'bank.required' => 'Bank harus diisi',
            'no_rekening.required' => 'No Rekening harus diisi',
        ];
    }
}
