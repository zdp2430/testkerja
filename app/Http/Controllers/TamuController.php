<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Propaganistas\LaravelPhone\PhoneNumber;
use App\Http\Request\TamuRequest;

class TamuController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_tamu = \App\Tamu::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
            $data_tamu = \App\Tamu::where('alamat', 'LIKE', '%'.$request->cari.'%')->get();
            $data_tamu = \App\Tamu::where('notelp', 'LIKE', '%'.$request->cari.'%')->get();
            $data_tamu = \App\Tamu::where('email', 'LIKE', '%'.$request->cari.'%')->get();
            $data_tamu = \App\Tamu::where('pesan', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else
        {
            $data_tamu = \App\Tamu::all();
        }
        
        return view('tamu.index', ['data_tamu' => $data_tamu]);
    }

    public function create(TamuRequest $request)
    {
        // $isoCode = $request->iso_code;
        // $phone = $request->notelp;
        // $data = [
        //     'phone' => $request->notelp,
        //     'iso_code' => $request->iso_code
        // ];
        // $rules = [
        //     'iso_code' => 'required',
        //     'phone' => 'required|phone:'.$isoCode
        // ];
        \App\Tamu::create($request->all());
        return redirect('/tamu')->with('sukses', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $tamu = \App\Tamu::find($id);
        return view('tamu/update', ['tamu' => $tamu]);
    }

    public function update(TamuRequest $request, $id)
    {
        $tamu = \App\Tamu::find($id);
        $tamu->update($request->all());
        return redirect('/tamu')->with('sukses', 'Data Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $tamu = \App\Tamu::find($id);
        $tamu->delete($tamu);
        return redirect('/tamu')->with('sukses', 'Data Berhasil Dihapus');
    }

    public function search(Request $request, $id)
    {
        $tamu = \App\Tamu::find($id);
        $tamu->search($tamu);
        return redirect('/search')->with('sukses', 'Data Berhasil Ditemukan');

    }

    public function store(Request $request)
    {
        $isoCode = $request->iso_code;
        $phone = $request->notelp;
        $data = [
            'phone' => $request->notelp,
            'iso_code' => $request->iso_code
        ];
        $rules = [
            'iso_code' => 'required',
            'phone' => 'required|phone:'.$isoCode
        ];
        
        // $validator = Validator::make($data, $rules);
        // if ($validator->fails()) {
        //     return $validator->messages();
        // }
        
        return PhoneNumber::make($phone, $isoCode);
    }

    public function bos()
    {
        $data_tamu = \App\Tamu::all();
        return view('tamu.tambahdata', ['data_tamu' => $data_tamu]);
    }
}
