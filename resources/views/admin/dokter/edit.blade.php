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
                      <input type="text" value="{{ $dokters->id_dokter }}" class="form-control" id="exampleInputEmail1" placeholder="ID" name="id_dokter" disabled>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" value="{{ $dokters->nama_dokter }}" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Spesialis</label>
                      <select class="form-control" style="width: 100%;" name="id_spesialis">
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
                    <div class="col-md-2 form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk">
                        @if (empty($dokters->jk))
                          <option selected="selected" value=""></option>
                        @else
                          @if ($dokters->jk=='L')
                            {{ $val = 'Laki-laki' }}
                          @else
                            {{ $val = 'Perempuan' }}
                          @endif
                          <option selected="selected" value="{{ $dokters->jk }}">{{ $val }}</option>
                        @endif
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" value="{{ $dokters->tempat_lahir }}" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                    </div>
                    <div class="col-md-2 form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" id="date" value="{{ $dokters->tempat_lahir }}" class="form-control" placeholder="Tempat Lahir" name="tanggal_lahir">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" value="{{ $dokters->alamat }}" class="form-control" id="" placeholder="Alamat" name="alamat">
                    </div>
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">No Telp</label>
                      <input type="text" value="{{ $dokters->no_telp }}" class="form-control" id="" placeholder="No tlp" name="no_telp">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" value="{{ $dokters->email }}" class="form-control" id="" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <select class="form-control" style="width: 100%;" name="agama">
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
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">Kewarganegaraan</label>
                      <input type="email" value="{{ $dokters->kewarganegaraan }}" class="form-control" id="" placeholder="Kewarganegaraan" name="kewarganegaraan">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control" style="width: 100%;" name="status">
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
                  <div class="row">
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">Kartu ID</label>
                      <select class="form-control" name="kartu_id">
                        @if (!empty($dokters->status))
                          <option selected="selected" value="{{ $dokters->kartu_id }}">{{ $dokters->kartu_id }}</option>
                        @else
                          <option selected="selected" value=""></option>
                        @endif
                        <option value="SIM">SIM</option>
                        <option value="KTP">KTP</option>
                        <option value="Passport">Passport</option>
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputPassword1">No Kartu ID</label>
                      <input type="text" value="{{ $dokters->no_kartuid }}" class="form-control" id="exampleInputPassword1" placeholder="No Kartu ID" name="no_kartuid">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 form-group">
                      <label for="exampleInputEmail1">No SIP</label>
                      <input type="text" value="{{ $dokters->no_izin }}" class="form-control" id="exampleInputEmail1" placeholder="No SIP" name="no_izin">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="exampleInputPassword1">Status Praktik</label>
                      <input type="text" value="{{ $dokters->status_praktik }}" class="form-control" id="exampleInputPassword1" placeholder="Status Praktik" name="status_praktik">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="exampleInputEmail1">Keterangan</label>
                      <textarea class="form-control" rows="3" placeholder="Keterangan ..." name="keterangan"></textarea>
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
