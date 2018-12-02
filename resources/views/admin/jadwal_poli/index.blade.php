@extends('admin.master')

        @section('breadcrumb')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Poli</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Jadwal Poli</li>
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
                  <h3 class="card-title">Poli Spesialis Non BPJS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Klinik</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Dokter</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jadwal_polis1 as $jadwal_poli)
                        <tr>
                          <td>{{ $jadwal_poli->id }}</td>
                          <td>{{ $jadwal_poli->klinik->nama_poli }}</td>
                          <td>{{ $jadwal_poli->hari }}</td>
                          <td>{{ $jadwal_poli->jam }}</td>
                          <td>{{ $jadwal_poli->dokter->nama_dokter }}</td>

                          <td>
                            <a href="jadwal-poli/{{$jadwal_poli->id}}/edit">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-edit">Edit</i>
                              </button>
                            </a>
                            <a href="jadwal-poli/{{$jadwal_poli->id}}/hapus">
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

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Poli Spesialis BPJS dan Non BPJS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Klinik</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Dokter</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jadwal_polis2 as $jadwal_poli)
                        <tr>
                          <td>{{ $jadwal_poli->id }}</td>
                          <td>{{ $jadwal_poli->klinik->nama_poli }}</td>
                          <td>{{ $jadwal_poli->hari }}</td>
                          <td>{{ $jadwal_poli->jam }}</td>
                          <td>{{ $jadwal_poli->dokter->nama_dokter }}</td>

                          <td>
                            <a href="jadwal-poli/{{$jadwal_poli->id}}/edit">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-edit">Edit</i>
                              </button>
                            </a>
                            <a href="jadwal-poli/{{$jadwal_poli->id}}/hapus">
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
