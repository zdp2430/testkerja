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
            'email' => 'required|ends_with:@gmail.com,@stis.ac.id,@yahoo.com',
            'notelp' => 'required|phone_number|min:10',
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
            'notelp.phone_number' => 'nomor telepon harus menggunakan +62 dan minimal 10 digit',
            'pesan.required' => 'pesan tidak boleh kosong'
        ];
    } 

}