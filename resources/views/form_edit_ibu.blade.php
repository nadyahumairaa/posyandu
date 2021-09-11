@extends('main')
@section('content')
            
<br>
<h4>{{$judul}}</h4>
<br>
<br>
<form method="post" action="{{url('update_ibu')}}">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputUsername1">ID Ibu</label>
        <input type="text" class="form-control" name="id_ibu" readonly value="@if(count($result) >0 ){{$result['master'] [0]->id_ibu}} @endif">
    </div>
    
    <div class="form-group">
        <label for="exampleInputUsername1">Nama Ibu</label>
        <input type="text" class="form-control" name="nama_ibu" placeholder="Masukan nama Ibu" value="@if(count($result) >0 ){{$result['master'] [0]->nama_ibu}} @endif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Suami</label>
        <input type="text" class="form-control" name="nama_suami" placeholder="Masukan Nama Suami" value="@if(count($result) >0 ){{$result['master'] [0]->nama_suami}} @endif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="@if(count($result) >0 ){{$result['master'] [0]->tempat_lahir}} @endif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="@if(count($result) >0 ){{$result['master'] [0]->tanggal_lahir}}@endif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="@if(count($result) >0 ){{$result['master'] [0]->alamat}} @endif" required>
    </div>
    
    <div class="form-group">
            <label for="exampleInputUsername1">Nomer Telepon</label>
            <input type="text" class="form-control" name="nomer_telepon" value="@if(count($result) >0 ){{$result['master'] [0]->nomer_telepon}} @endif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Agama</label>
        <select class="form-control" name="agama" required>
        <option value="Islam" @if($result['master'] [0]->agama == "Islam") {{"Selected"}} @endif>Islam</option>
        <option value="Kristen" @if($result['master'] [0]->agama == "Kristen") {{"selected"}} @endif>Kristen</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Status</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" value="Aktif" @if($result['master'] [0]->status == "Aktif") {{"checked"}} @endif>Aktif </label>
                        </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status"  value="Tidak Aktif" @if($result['master'] [0]->status == "Tidak Aktif") {{"checked"}} @endif>Tidak Aktif</label>
                            </div>
                                </div>

    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection