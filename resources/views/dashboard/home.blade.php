@extends('layouts.app')

@section('title','Dashboard')

@section('content')
    <section class="section">
          <div class="section-header">
            <h1>Dashboard Administrator</h1>
          </div>

          <div class="section-body">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">

                    <div class="card-icon shadow-danger bg-danger">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Belum Dikirim</h4>
                      </div>
                      <div class="card-body">
                        59
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-warning bg-warning">
                      <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Belum Verifikasi</h4>
                      </div>
                      <div class="card-body">
                       20
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-success bg-success">
                      <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Verifikasi</h4>
                      </div>
                      <div class="card-body">
                        4,732
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </section>
@endsection
