@extends('master')
@section('content')
   <div class="w-50 center border rounded px-3 py-3 mx-auto my-form" style="margin-top: 100px !important;">
    <h1>Login</h1>
    <form action="/user/login" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
   </div> 
   
@endsection