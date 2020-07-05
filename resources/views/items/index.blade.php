@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col">
            <h3 class="pb-2 d-inline float-left">Daftar Artikel</h3>
            <a href="/artikel/create" class="btn btn-info mb-3 float-right">Buat Artikel</a>
        </div>
    </div>

    @if($articles->count() > 0)
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($articles as $article)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="text-dark">{{ $article->judul }}</td>
                <td class="text-dark">{{ $article->isi }}</td>
                <td class="text-dark">
                    <form action="/artikel/{{ $article->id }}" method="post">
                    @method('delete')
                    @csrf
                        <button name="delete" class="btn btn-danger float-right ml-1 mb-1">Delete</button>
                    </form>
                    <a href="/artikel/{{ $article->id }}/edit" class="btn btn-success float-right ml-1 mb-1">Edit</a>
                    <a href="/artikel/{{ $article->id }}" class="btn btn-primary float-right">Detail</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="text-muted font-italic">Belum terdapat artikel</p>
    @endif

@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush