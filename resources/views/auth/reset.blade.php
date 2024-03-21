@extends('layouts.custom')
@section('title','Reset Password')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
          <img src="../assets/img/logo-login.png" alt="logo" width="200">
        </div>

        <div class="card card-primary">
          <div class="card-header"><h4>Register</h4></div>

          <div class="card-body">

            <form method="POST" action="{{route('password.update')}}">
                @csrf
            <input type="text"  value="{{$request->token}}" hidden name="token">
              <div class="form-group">
                {{-- <label for="email">Email</label> --}}
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$request->email}}" hidden>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
              </div>

              <div class="row">
                <div class="form-group col-6">
                  <label for="password" class="d-block">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password">
                  @error('password')
                  <div class="invalid-feedback">
                    {{$message}}
                </div>
                  @enderror
                </div>
                <div class="form-group col-6">
                  <label for="password_confirmation" class="d-block">Password Confirmation</label>
                  <input id="password_confirmation" type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                  @error('password_confirmation')
                  <div class="invalid-feedback">
                    {{$message}}
                </div>
                  @enderror
                </div>
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

