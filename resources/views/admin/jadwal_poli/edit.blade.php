@extends('admin.master')

        @section('breadcrumb')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Poli</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('jadwal_poli.index') }}">Jadwal Poli</a></li>
              <li class="breadcrumb-item active">Tambah</li>
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
                <h3 class="card-title">Tambah Jadwal Poli</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{ url('/private/jadwal-poli/'.$jadwalpolis->id.'/edit') }}" method="POST">
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
                      <div class="col-md-6 form-group">
                      <label>Kategori</label>
                      <select class="form-control" style="width: 100%;" name="kategori">
                        @if (empty($jadwalpolis->id_kategori))
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($kategoris as $kategori)
                          <option @if ($kategori->id ==  $jadwalpolis->id_kategori) selected @endif value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Klinik</label>
                      <select class="form-control" style="width: 100%;" name="poli">
                        @if (empty($jadwalpolis->id_poli))
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($polis as $poli)
                          <option @if ($poli->id_poli ==  $jadwalpolis->id_poli) selected @endif value="{{ $poli->id_poli }}">{{ $poli->nama_poli }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Dokter</label>
                      <select class="form-control" style="width: 100%;" name="dokter">
                        @if (empty($jadwalpolis->id_dokter))
                          <option selected="selected" value=""></option>
                        @endif
                        @foreach ($dokters as $dokter)
                          <option @if ($dokter->id_dokter ==  $jadwalpolis->id_dokter) selected @endif value="{{ $dokter->id_dokter }}">{{ $dokter->nama_dokter }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Hari</label>
                      <input name="hari" type="text" value="{{$jadwalpolis->hari}}" class="form-control" id="exampleInputEmail1" placeholder="e.g. Senin, Selasa, Rabu / Senin, Kamis">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label>Jam</label>
                      <input name="jam" type="text" value="{{$jadwalpolis->jam}}" class="form-control" id="exampleInputEmail1" placeholder="e.g 10.00 - 16.30 / 17.45 - 19.00">
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
