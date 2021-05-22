@extends('layouts.default')
@section('content')
	<div class="col-md-6">
        <form action="#" method="post">
            {{ csrf_field() }} 
            <div class="form-group">
                <label>Judul Artikel :</label>
                <div><input type="text" class="form-control"  name="k_nama" required></div>
            </div>
            <div class="form-group">
                <label>Isi Artikel :</label>
                {{-- <div><input type="text" class="form-control"  name="k_bobot" required></div> --}}
                <div><textarea rows="4" cols="50">Tulis di sini...</textarea></div>
            </div>
            <div class="form-group">
                <label>Gambar :</label>
                <div><input type="file" name="k_bobot" required></div>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
            <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="{{('/superadmin/user')}}" class="btn btn-secondary"> Cancel</a>
        </form>
    </div>
@endsection