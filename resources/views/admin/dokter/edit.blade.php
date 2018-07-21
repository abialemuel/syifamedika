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
                      <input type="text" value="{{ $dokters->id_dokter }}" class="form-control" id="exampleInputEmail1" placeholder="ID" disabled>
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" value="{{ $dokters->nama_dokter }}" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                    </div>
                    <div class="col-md-4 form-group">
                      <label>Spesialis</label>
                      <select class="form-control select2" style="width: 100%;">
                        @if (!empty($dokters->id_spesialis))
                          <option selected="selected" value="{{ $dokters->spesialis->id_spesialis }}">{{ $dokters->spesialis->nama_spesialis }}</option>
                        @else
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($spesialis as $spesial)
                          <option value="{{ $spesial->id_spesialis }}">{{ $spesial->nama_spesialis }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" value="{{ $dokters->alamat }}" class="form-control" id="" placeholder="Alamat">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">No Telp</label>
                      <input type="text" value="{{ $dokters->no_telp }}" class="form-control" id="" placeholder="No tlp">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" value="{{ $dokters->email }}" class="form-control" id="" placeholder="Email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <select class="form-control select2" style="width: 100%;">
                        @if (!empty($dokters->agama))
                          <option selected="selected" value="{{ $dokters->agama->no }}">{{ $dokters->agama->agama }}</option>
                        @else
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($agamas as $agama)
                          <option value="{{ $agama->no }}">{{ $agama->agama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Kenegaraan</label>
                      <input type="email" value="{{ $dokters->kewarganegaraan }}" class="form-control" id="" placeholder="Kenegaraan">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control select2" style="width: 100%;">
                        @if (!empty($dokters->status))
                          <option selected="selected" value="{{ $dokters->status->no }}">{{ $dokters->status->status }}</option>
                        @else
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($status as $statu)
                          <option value="{{ $statu->no }}">{{ $statu->status }}</option>
                        @endforeach
                      </select>
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
