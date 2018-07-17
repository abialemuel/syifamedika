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

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Tempat Lahir</th>
                      <th>Alamat</th>
                      <th>Agama</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach ($dokters as $dokter)
                      <tr>
                        <td>{{ $dokter->id_dokter }}</td>
                        <td>{{ $dokter->nama_dokter }}</td>
                        <td>{{ $dokter->tempat_lahir }}</td>
                        <td>{{ $dokter->alamat }}</td>
                        <td>{{ $dokter->agama }}</td>
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
