@extends('admin.master')

        @section('breadcrumb')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">Artikel</a></li>
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
                <h3 class="card-title">Tambah Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{ url('/private/artikel/tambah') }}" method="POST">
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
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" value="" class="form-control" id="exampleInputEmail1" placeholder="Judul">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label>Tanggal</label>
                      <input name="tanggal" type="date" value="" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="col-md-2 form-group">
                      <label>Status</label>
                      <select class="form-control" style="width: 100%;" name="aktif">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <div class="card-tools">
                        <label for="exampleInputEmail1">Text</label>
                        <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                          <i class="fa fa-times"></i></button>
                      </div>
                    <!-- /. tools -->
                  <!-- /.card-header -->
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea name="text" class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
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
