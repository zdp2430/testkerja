@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
						    <div class="panel-heading">
					    	    <h3 class="panel-title">Perbarui Data Tamu</h3>
						    </div>
                            <div class="panel-body">
                                <form action="/tamu/{{$tamu->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$tamu->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$tamu->alamat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Telp</label>
                                        <input name="notelp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+62" value="{{$tamu->notelp}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$tamu->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Pesan</label>
                                        <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$tamu->pesan}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>
                            </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
<!-- @section('content1')
            <h1>Edit Data Tamu</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="/tamu/{{$tamu->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$tamu->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$tamu->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Telp</label>
                            <input name="notelp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+62" value="{{$tamu->notelp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$tamu->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pesan</label>
                            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$tamu->pesan}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
@endsection -->



