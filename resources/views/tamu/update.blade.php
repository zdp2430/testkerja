@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
    <div class="form" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 align = "center" class="modal-title" id="exampleModalLabel">Silahkan Diisi</h3>
            </div>
                <form action="/tamu/{{$tamu->id}}/update" method="POST">                
                    {{csrf_field()}}
                    <table align="justify" width="600px">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Nama:</th>
                            <td><input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$tamu->nama}}"></td>
                            <td><h6 style ="color : red ">{{$errors -> first('nama') }}</h6></td>
                        </tr>
                        <tr>
                            <th>Alamat:</th>
                            <td><input name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{$tamu->alamat}}"></td>
                            <td><h6 style ="color : red ">{{$errors -> first('alamat') }}</h6></td>
                        </tr>
                        <tr>
                            <th>No Telpon:</th>
                            <td><input name="notelp" type="text" class="form-control" placeholder="+628xxxxxxxxxx" value="{{$tamu->notelp}}"></td>
                            <td><h6 style ="color : red ">{{$errors -> first('notelp') }}</h6></td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><input name="email" type="text" class="form-control" placeholder="email" value="{{$tamu->email}}"></td>
                            <td><h6 style ="color : red ">{{$errors -> first('email') }}</h6></td>
                        </tr>
                        <tr>
                            <th>Pesan:</th>
                            <td><input name="pesan" type="text" class="form-control" placeholder="pesan" value="{{$tamu->pesan}}"></td>
                            <td><h6 style ="color : red ">{{$errors -> first('pesan') }}</h6></td>
                        </tr>
                    </table>                        
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <a href="/tamu" class="btn btn-secondary">Close</a>
                <button type="submit" class="btn btn-primary" onclick="return  confirm('Anda Yakin Mau Diperbarui ?')">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
        
@endsection
       


