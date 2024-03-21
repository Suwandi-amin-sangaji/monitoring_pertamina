@extends('layouts.custom')
@section('title','register')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
          <img src="../assets/img/logo-login.png" alt="logo" width="200">
        </div>

        <div class="card card-primary">
          <div class="card-header text-center"><h4>Verification Email</h4></div>

          <div class="card-body">
            <form method="POST" action="{{ route('verification.send')}}">
            @csrf
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Resend Verify Email
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

