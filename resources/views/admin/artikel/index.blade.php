@extends('admin.master')

        @section('breadcrumb')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
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
                  <h3 class="card-title">List Artikel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($artikels as $artikel)
                        <tr>
                          <td>{{ $artikel->id }}</td>
                          <td>{{ $artikel->judul }}</td>
                          @if ($artikel->aktif == 1)
                            <td>Aktif</td>
                          @else
                            <td>Tidak Aktif</td>
                          @endif
                          <td>
                            <a href="artikel/{{$artikel->id}}/edit">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-edit">Edit</i>
                              </button>
                            </a>
                            <a href="artikel/{{$artikel->id}}/hapus">
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
