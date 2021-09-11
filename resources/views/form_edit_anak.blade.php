@extends('main')
@section('content')
            
<br>
<h4>{{$judul}}</h4>
<br>
<br>
<form method="post" action="{{url('update_anak')}}">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Ibu</label>
        <select class="form-control" name="id_ibu" required>
            @foreach($result['master'] as $data)
        <option value={{$data->id_ibu}}>{{$data->nama_ibu}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Anak</label>
        <input type="text" class="form-control" name="nama_anak" value="@if(count($result) >0 ){{$result['master'] [0]->nama_anak}} @endif" placeholder="Masukan Nama Anak" required>
    </div> 
    
    <div class="form-group">
        <label for="exampleInputUsername1">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir_anak" value="@if(count($result) >0 ){{$result['master'] [0]->tempat_lahir_anak}}@endif" placeholder="Masukan Tempat Lahir Anak" required>
    </div>
    
    <div class="form-group">
        <label for="exampleInputUsername1">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir_anak" value="@if(count($result) >0 ){{$result['master'] [0]->tanggal_lahir_anak}}@endif" placeholder="Masukan Tanggal Lahir Anak" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Jenis Kelamin</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" @if($result['master'] [0]->jenis_kelamin == "Laki-laki") {{"checked"}} @endif>Laki-laki </label>
                        </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenis_kelamin"  value="Perempuan" @if($result['master'] [0]->jenis_kelamin == "Perempuan") {{"checked"}} @endif>Perempuan</label>
                            </div>
                                </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Status</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status_anak" value="Aktif" @if($result['master'] [0]->status_anak == "Aktif") {{"checked"}} @endif>Aktif </label>
                        </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status_anak"  value="Tidak Aktif" @if($result['master'] [0]->status_anak == "Tidak Aktif") {{"checked"}} @endif>Tidak Aktif</label>
                            </div>
                                </div>
                                
    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection