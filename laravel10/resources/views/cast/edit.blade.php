@extends('layouts.master')
@section('judul')
Halaman Edit Cast
@endsection
@section('content')

<form method="POST" action="/cast/{{$cast->id}}">
    @csrf
    @method('PUT')
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
    <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
  </div>
  <div class="form-group">
    <label >Cast Umur</label>
    <input type="integer" name="umur" value="{{$cast->umur}}" class="form-control">
  </div>
  <div class="form-group">
    <label >Cast Bio</label>
    <textarea class="from-control" name="bio" id="" cols="30" rows"10">{{$cast->bio}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection