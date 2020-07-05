@extends('layouts.master')

@section('content')
    <h3 class="pb-3">Buat akun dulu ya...</h3>
    <form action="/artikel" method="post">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="Name">Username</label>
            <input type="text" class="form-control" id="Name" name="Name" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection