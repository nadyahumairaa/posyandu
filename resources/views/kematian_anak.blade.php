@extends('main')
@section('content')
            
<br>
<h4>Tambah Kematian Anak</h4>
<br>
<br>
<form method="post" action="{{url('update_kematian_anak')}}">
    {{csrf_field()}}

  <div class="form-group">
      <label for="exampleInputUsername1">Nama Anak</label>
      <select class="form-control" name="id_anak" readonly>
          @foreach($result['master'] as $data)
      <option value={{$data->id_anak}}>{{$data->nama_anak}}</option>
      @endforeach
      </select>
  </div>

  <div class="form-group">
      <label for="exampleInputUsername1">Nama Ibu</label>
      <select class="form-control" name="id_ibu" readonly>
          @foreach($result['master'] as $data)
      <option value={{$data->id_ibu}}>{{$data->nama_ibu}}</option>
      @endforeach
      </select>
  </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tanggal Meninggal</label>
        <input type="date" class="form-control" name="tanggal_meninggal" placeholder="Masukan Nama Ibu" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Penyebab Meninggal</label>
        <input type="text" class="form-control" name="penyebab_meninggal_anak" placeholder="Masukan Penyebab Meninggal" required>
    </div>

    <div class="form-group">
      <label for="exampleInputUsername1">Status</label>
      <input type="text" class="form-control" name="status_anak" value="Tidak Aktif" readonly>
  </div>

    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection