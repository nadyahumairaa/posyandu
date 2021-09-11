@extends('index')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel">
                                    <div class="panel-heading">
                                    </div>
                                    <div class="panel-body">
                                      <form action="/ibu/save" method="POST">
                                        {{ csrf_field() }}
                                                <input type="hidden" value="" name="id_ibu">
                                                    <div class="row">
                                                            <div class="col-md-12 pr-1">
                                                              <div class="form-group">
                                                                    <label  for="id_ibu">Id Ibu</label>
                                                                    <input id="id_ibu" name="id_ibu" type="number" required  class="form-control" placeholder="Masukan ID Ibu" />
                                                              </div>
                                                            </div>
                                                          </div>
      
                                                          <div class="row">
                                                                     <div class="col-md-12 pr-1">
                                                                       <div class="form-group">
                                                                            <label for="nama_ibu">Nama ibu</label>
                                                                            <input id="nama_ibu" name="nama_ibu" type="text" required  class="form-control" placeholder="Masukan Nama Ibu" />
                                                                       </div>
                                                                     </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-md-12 pr-1">
                                                              <div class="form-group">
                                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                                    <input id="tempat_lahir" name="tempat_lahir" type="text" required  class="form-control" placeholder="Masukan Tempat Lahir" />
                                                              </div>
                                                            </div>
                                                          </div>
                                                      
                                                          <div class="row">
                                                            <div class="col-md-12 pr-1">
                                                              <div class="form-group">
                                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                    <input id="tanggal_lahir" name="tanggal_lahir" type="date" required  class="form-control" placeholder="Masukan Tanggal Lahir" />
                                                              </div>
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                              <div class="col-md-12 pr-1">
                                                                <div class="form-group">
                                                                        <label for="tgllahir">Kelamin</label>
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input type="radio" name="jenis_kelamin" value="Laki-laki">
                                                                                Laki - Laki
                                                                            </label>&nbsp;&nbsp;&nbsp;
                                                                            <label>
                                                                                <input type="radio" name="jenis_kelamin" checked="true" value="Perempuan">
                                                                                Perempuan
                                                                            </label>
                                                                      </div>
                                                                </div>
                                                              </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-md-12 pr-1">
                                                              <div class="form-group">
                                                                    <label for="status">Status</label>
                                                                    <input id="status" name="status" type="text" required  class="form-control" placeholder="Status" />
                                                              </div>
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                            <div class="col-md-12 pr-1">
                                                              <div class="form-group">
                                                                    <label for="tgl_meninggal">Tanggal Meninggal</label>
                                                                    <input id="tgl_meninggal" name="tgl_meninggal" type="date" required  class="form-control" placeholder="Masukan Tanggal Meninggal" />
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-md-12 pr-1">
                                                              <div class="form-group">
                                                                    <label for="penyebab_meninggal">Penyebab Meninggal</label>
                                                                    <input id="penyebab_meninggal" name="penyebab_meninggal" type="text" required  class="form-control" placeholder="Masukan Penyebab Meninggal" />
                                                              </div>
                                                            </div>
                                                          </div>
      
                                                          <div class="row">
                                                            <div class="update ml-auto mr-auto">
                                                              <button type="submit" class="btn btn-info btn-round">Simpan Data</button>
                                                            </div>
                                                          </div>
                                            </form>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection