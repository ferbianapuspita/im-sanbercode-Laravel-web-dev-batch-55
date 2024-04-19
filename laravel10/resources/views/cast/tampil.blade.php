@extends('layouts.master')
@section('judul')
Halaman Tampil Cast
@endsection
@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm my-4">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($cast as $index => $item)
      <tr>
        <th scope="row">{{$index + 1}}</th>
        <td>{{$item -> nama}}</td>
        <td>{{$item -> umur}}</td>
        <td>
            
            <form action="/cast/{{$item->id}}" method="POST">
            <a href="/cast/{{$item->id}}" class="btn btn-info btn-sn">Detail</a>
            <a href="/cast/{{$item->id}}/edit" class="btn btn-secondary btn-sn">Edit</a>
                @csrf
                @method('delete')
                <input type="submit" class= "btn btn-danger btn-sn" value="delete">
            </form>
        </td>
      </tr>
    @empty
        <p>Cast kosong silahkan input cast</p>
    @endforelse
  </tbody>
</table>
@endsection