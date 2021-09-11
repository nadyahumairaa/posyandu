@extends('main')
@section('content')
            
<br>
<h4>{{$judul}}</h4>
<br>
<br>
<form method="post" action="{{url('update_kematian_ib')}}">
    {{csrf_field()}}

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
        <input type="date" class="form-control" name="tanggal_meninggal" value="@if(count($result) >0 ){{$result['master'] [0]->tanggal_meninggal}}@endif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Penyebab Meninggal</label>
        <input type="text" class="form-control" name="penyebab_meninggal" placeholder="Masukan Penyebab Meninggal" required value="@if(count($result) >0 ){{$result['master'] [0]->penyebab_meninggal}} @endif">
    </div>

    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection