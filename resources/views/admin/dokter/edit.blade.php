@extends('admin.master')

        @section('breadcrumb')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('dokter.index') }}">Dokter</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @stop

    <!-- Main content -->

        @section('content')
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Dokter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input type="text" value="{{ $dokters->id_dokter }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" disabled>
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" value="{{ $dokters->nama_dokter }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="col-md-4 form-group">
                      <label>Spesialis</label>
                      <select class="form-control select2" style="width: 100%;">
                        {{ $value =  $dokters->spesialis->id_spesialis .'#'. $dokters->spesialis->nama_spesialis }}
                        <option selected="selected" value="{{ $value }}">{{ $dokters->spesialis->nama_spesialis }}</option>
                        @foreach ($spesialis as $spesial)
                          <option value="{{ $value }}">{{ $spesial->nama_spesialis }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" value="{{ $dokters->alamat }}" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">No Telp</label>
                      <input type="text" value="{{ $dokters->no_telp }}" class="form-control" id="exampleInputEmail1" placeholder="No tlp">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" value="{{ $dokters->email }}" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
        </div><!-- /.row -->
      @endsection


      @section('script')

      @endsection
