@extends('layouts.master')
@section('judul')
Halaman Tambah Cast
@endsection
@section('content')

<form method="POST" action="/cast">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  <div class="form-group">
    <label >Cast Nama</label>
    <input type="text" name="nama" class="form-control">
  </div>
  <div class="form-group">
    <label >Cast Umur</label>
    <input type="integer" name="umur" class="form-control">
  </div>
  <div class="form-group">
    <label >Cast Bio</label>
    <textarea class="from-control" name="bio" id="" cols="30" rows"10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection