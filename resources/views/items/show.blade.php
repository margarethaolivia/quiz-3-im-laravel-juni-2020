@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col">
    <div class="card">
    @foreach($articles as $article)

    <?php 
    $tags = explode(',', $article->tag);
    ?>

        <div class="card-body">
            <h4 class="card-title">Judul : {{ $article->judul }}</h4>
            <p class="card-text">Slug : {{ $article->slug }}</p>
            <p class="card-text">{{ $article->isi }}</p>
            @foreach($tags as $tag)
                <a href="" class="btn btn-success">{{$tag}}</a>
            @endforeach
        </div>
    @endforeach
    </div>
  </div>
</div>
<div class="row pt-3">
  <div class="col">
    <a href="/artikel" class="btn btn-primary float-right">Kembali ke Daftar Artikel</a>
  </div>
</div>
@endsection