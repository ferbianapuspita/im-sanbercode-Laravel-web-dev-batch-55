@extends('layouts.master')
@section('judul')
Halaman Detail Cast
@endsection
@section('content')
<a href="/cast" class="btn btn-primary btn-sm my-4">Kembali</a>

<h1>{{$cast -> nama}}</h1>
<h1>{{$cast -> umur}}</h1>
<p>{{$cast -> bio}}</p>
@endsection