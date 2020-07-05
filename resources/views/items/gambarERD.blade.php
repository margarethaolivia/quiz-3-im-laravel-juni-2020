@extends('layouts.master')

@section('content')
    <h1 class="h3 pb-3"><center>Gambar ERD</center></h1>
    <center><img src="{{asset('/images/ERD.png')}}" alt="Gambar ERD"></center>
    <center><a href="/user/create" class="btn btn-primary mt-3">Lihat Daftar Artikel</a></center>
@endsection