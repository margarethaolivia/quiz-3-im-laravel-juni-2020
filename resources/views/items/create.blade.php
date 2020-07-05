@extends('layouts.master')

@section('content')
    <h3 class="pb-3">Buat Artikel</h3>
    <form action="/artikel" method="post">
    @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required autofocus>
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" id="isi" name="isi" required></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag - pisahkan dengan koma (,)</label>
            <textarea class="form-control" id="tag" name="tag" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection