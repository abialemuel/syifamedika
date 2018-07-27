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
              <form  action="{{ url('/private/dokter/'.$dokters->id_dokter.'/edit') }}" method="POST">
                @csrf
                <div class="card-body">
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fa fa-ban"></i> Alert!</h5>
                       {{ $error }}
                    </div>
                  @endforeach
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input name="id_dokter" type="text" value="{{ $dokters->id_dokter }}" class="form-control" id="exampleInputEmail1" placeholder="ID" disabled>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input name="nama_dokter" type="text" value="{{ $dokters->nama_dokter }}" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Spesialis</label>
                      <select class="form-control" style="width: 100%;" name="id_spesialis">
                        @if (empty($dokters->id_spesialis))
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($spesialis as $spesial)
                          <option @if ($spesial->id_spesialis ==  $dokters->id_spesialis) selected @endif value="{{ $spesial->id_spesialis }}">{{ $spesial->nama_spesialis }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk">
                        @if (empty($dokters->jk))
                          <option selected="selected" value=""></option>
                        @endif
                        <option @if ($dokters->jk == 'L') selected @endif value="L">Laki-laki</option>
                        <option @if ($dokters->jk == 'P') selected @endif value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label>Tempat Lahir</label>
                      <input name="tempat_lahir" type="text" value="{{ $dokters->tempat_lahir }}" class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-md-2 form-group">
                      <label>Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" id="date" value="{{ $dokters->tgl_lahir }}" class="form-control" placeholder="Tempat Lahir">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input name="alamat" type="text" value="{{ $dokters->alamat }}" class="form-control" id="" placeholder="Alamat">
                    </div>
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">No Telp</label>
                      <input name="no_telp" type="text" value="{{ $dokters->no_telp }}" class="form-control" id="" placeholder="No tlp">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" value="{{ $dokters->email }}" class="form-control" id="" placeholder="Email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <select class="form-control" style="width: 100%;" name="agama">
                        @if (empty($dokters->agama))
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($agamas as $agama)
                          <option @if ($agama->no ==  $dokters->agama) selected @endif value="{{ $agama->no }}">{{ $agama->agama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">Kewarganegaraan</label>
                      <input name="kewarganegaraan" type="text" value="{{ $dokters->kewarganegaraan }}" class="form-control" id="" placeholder="Kewarganegaraan">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control" style="width: 100%;" name="status">
                        @if (empty($dokters->status))
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($status as $statu)
                          <option @if ($statu->no ==  $dokters->status) selected @endif value="{{ $statu->no }}">{{ $statu->status }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">Kartu ID</label>
                      <select class="form-control" name="kartu_id">
                        @if (empty($dokters->kartu_id))
                          <option selected="selected" value=""></option>
                        @endif
                        <option @if ($dokters->kartu_id == 'SIM') selected @endif value="SIM">SIM</option>
                        <option @if ($dokters->kartu_id == 'KTP') selected @endif value="KTP">KTP</option>
                        <option @if ($dokters->kartu_id == 'Passport') selected @endif value="Passport">Passport</option>
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputPassword1">No Kartu ID</label>
                      <input name="no_kartuid" type="text" value="{{ $dokters->no_kartuid }}" class="form-control" id="exampleInputPassword1" placeholder="No Kartu ID">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">No SIP</label>
                      <input name="no_izin" type="text" value="{{ $dokters->no_izin }}" class="form-control" id="exampleInputEmail1" placeholder="No SIP">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputPassword1">Status Praktik</label>
                      <input name="status_praktik" type="text" value="{{ $dokters->status_praktik }}" class="form-control" id="exampleInputPassword1" placeholder="Status Praktik">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 form-group">
                      <label>Tanggal Masuk</label>
                      <input name="tgl_masuk" type="date" id="date" value="{{ $dokters->tgl_masuk }}" class="form-control" placeholder="Tgl Masuk">
                    </div>
                    <div class="col-md-2 form-group">
                      <label>Tanggal Keluar</label>
                      <input name="tgl_keluar" type="date" id="date" value="{{ $dokters->tgl_keluar }}" class="form-control" placeholder="Tgl Keluar">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Keterangan</label>
                      <textarea name="keterangan" type="text" class="form-control" rows="3" placeholder="Keterangan ...">{{ $dokters->keterangan }}</textarea>
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
