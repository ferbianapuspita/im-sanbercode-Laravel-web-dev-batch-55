@extends('layouts.master')
@section('judul')
Halaman Register
@endsection
@section('content')
<h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="POST" style=",margin: 30px">
        @csrf
        <label>First Name:</label> <br> <br>
        <input type="text" name="fname" required /> <br> <br>
        <br />
        <label>Last Name:</label> <br> <br>
        <input type="text" name="lname" required /> <br> <br>
        <br />

        <label >Gender:</label> <br> <br />
        <input type="radio" name="Gender" value="1" /> Male <br />
        <input type="radio" name="Gender" value="2" /> Female <br />
        <input type="radio" name="Gender" value="3" /> Other <br />
        <br />

        <label>Nationality:</label> <br> <br />
        <select name="wn" required />
            <option value="1">Indonesia</option>
            <option value="2">Malaysia</option>
            <option value="3">Singapura</option>
        </select> 
        <br />
        <br />

        <label>Language Spoken:</label> <br> <br />
        <input type="checkbox" value="1" name="language spoken"> Bahasa Indonesia <br />
        <input type="checkbox" value="2" name="language spoken"> English <br />
        <input type="checkbox" value="3" name="language spoken"> Arabic <br />
        <input type="checkbox" value="4" name="language spoken"> Other <br />
        <br />

        <label>Bio:</label> <br> <br />
        <textarea name="bio" cols="40" rows="10" required></textarea> <br />
    

        <input type="Submit" value="Sign Up" />
    </form>
    <br> <br/>

    <a href="/">Kembali</a>
@endsection
