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

@section('sidebar')
    @parent
    <li class="menu-header">Data Master</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Management Users</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Data Pengguna</a></li>
    </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-university"></i><span>Lembaga Penyalur</span></a>
        <ul class="dropdown-menu">
            <li ><a class="nav-link" href="credits.html"><i class="fa fa-truck"></i> <span>Penyaluran</span></a></li>
        </ul>
        </li>
    <li class="menu-header">Laporan</li>
    <li ><a class="nav-link" href="credits.html"><i class="fas fa-download"></i> <span>Penyaluran</span></a></li>
    <li ><a class="nav-link" href="credits.html"><i class="fas fa-upload"></i> <span>Penerimaan</span></a></li>

    <li class="menu-header">SPBU</li>
    <li ><a class="nav-link" href="{{'spbu'}}"><i class="fas fa-gas-pump"></i> <span>Data Spbu</span></a></li>
    </li>

@endsection
