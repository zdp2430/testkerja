<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class TamuRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return[
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|ends_with:@gmail.com, @yahoo.com',
            'notelp' => 'required|min:10|phone_number',
            'pesan' => 'required'
        ];
    }
    public function messages(){
        return[
            'nama.required' => 'nama tidak boleh kosong',
            'alamat.required' => 'alamat tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            'email.ends_with' => 'email hanya bisa dengan @gmail.com dan @yahoo.com',
            'notelp.required' => 'nomor telepon tidak boleh kosong',
            'notelp.phone_number' => 'nomor telepon harus menggunakan kode negara, misalnya +62',
            'pesan.required' => 'pesan tidak boleh kosong'
        ];
    } 

}