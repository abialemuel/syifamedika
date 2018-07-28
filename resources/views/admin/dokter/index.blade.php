@extends('admin.master')

        @section('breadcrumb')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dokter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @stop

    <!-- Main content -->

        @section('content')
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List Dokter</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="datadokter" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Spesialis</th>
                        <th>No Telp</th>
                        <th>No SIP</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($dokters as $dokter)
                        <tr>
                          <td>{{ $dokter->id_dokter }}</td>
                          <td>{{ $dokter->nama_dokter }}</td>
                          <td>{{ $dokter->spesialis['nama_spesialis'] }}</td>
                          <td>{{ $dokter->no_telp }}</td>
                          <td>{{ $dokter->no_izin }}</td>
                          <td>
                            <a href="dokter/{{$dokter->id_dokter}}/edit">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-edit">Edit</i>
                              </button>
                            </a>
                            <a href="dokter/{{$dokter->id_dokter}}/hapus">
                              <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash">Hapus</i>
                              </button>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div><!-- /.row -->
      @endsection


      @section('script')


      @endsection
