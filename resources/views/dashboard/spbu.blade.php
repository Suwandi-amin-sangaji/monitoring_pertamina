@extends('layouts.app')

@section('title','SPBU')

@section('content')
    <section class="section">
          <div class="section-header">
            <h1>DATA SPBU</h1>
          </div>

          <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">

                    <div class="card-icon shadow-danger bg-danger">
                        <i class="fas fa-gas-pump"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>SPBU Mini/Modular</h4>
                      </div>
                      <div class="card-body">
                        59
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-warning bg-warning">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>SPBU Kompak</h4>
                      </div>
                      <div class="card-body">
                       20
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="card card-statistic-2">
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-ship"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>SPBU Nelayan</h4>
                      </div>
                      <div class="card-body">
                        4,732
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-statistic-2">
                      <div class="card-icon shadow-secondary bg-secondary">
                        <i class="fas fa-oil-can"></i>
                      </div>
                      <div class="card-wrap">
                        <div class="card-header">
                          <h4>Agen Minyak Tanah</h4>
                        </div>
                        <div class="card-body">
                          0
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
    </section>
    <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h4>DATA SPBU</h4>
                    <div>
                      <a type="file" class="btn btn-danger text-white"><i class="fas fa-download"></i> Export</a>
                      <a type="file" class="btn btn-success text-white"><i class="fas fa-upload"></i> Import</a>
                      <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Task Name</th>
                        <th>Progress</th>
                        <th>Members</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td><div class="badge badge-success">Completed</div></td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
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
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-university"></i><span>Lembaga Penyalur</span></a>
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
