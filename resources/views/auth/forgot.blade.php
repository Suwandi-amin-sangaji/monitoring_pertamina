@extends('layouts.custom')
@section('title','Lupa Password')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
          <img src="../assets/img/logo-login.png" alt="logo" width="200">
        </div>

        <div class="card card-primary">
          <div class="card-header text-center"><h4>Reset Password</h4></div>
          <div class="card-body">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{route('password.email')}}">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" autofocus>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                 Reset Password
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

