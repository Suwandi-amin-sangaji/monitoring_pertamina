@extends('layouts.app')

@section('title', 'Management Pengguna')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Data Pengguna</h1>
    </div>
</section>

<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h4>DATA Pengguna</h4>
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
                    <th>Data Perusahaan</th>
                    <th>SAM</th>
                    <th>SBM</th>
                    <th>Data Pengguna</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                        <h6 style="margin: 0; line-height: 1;">PT TESTING</h6>
                        <p style="margin: 0; line-height: 1;">No.LP : </p>
                        <p style="margin: 0; line-height: 1;">Jenis LP : </p>
                        <p style="margin: 0; line-height: 1;">SAM :</p>
                        <p style="margin: 0; line-height: 1;">SBM :</p>
                    </td>

                    <td>
                      SAM RETAIL PAPUA
                    </td>
                    <td>
                     RAYON I
                    </td>
                    <td>
                        <p style="margin: 0; line-height: 1;">Email :</p>
                       <p style="margin: 0; line-height: 1;"> No.Telp :</p>
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
