@extends('main')
@section('content')
            
<br>
<h4>Tambah Data Baita</h4>
<br>
<br>
<form method="post" action="{{url('save_anak')}}">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Ibu</label>
        <select class="form-control" name="id_ibu" required>
            <option>--Pilih Nama Ibu--</option> 
            @foreach($datan as $data)
        <option value={{$data->id_ibu}}>{{$data->nama_ibu}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Anak</label>
        <input type="text" class="form-control" name="nama_anak" placeholder="Masukan Nama Anak" required>
    </div>
    
    <div class="form-group">
        <label for="exampleInputUsername1">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir_anak" placeholder="Masukan Tempat Lahir Anak" required>
    </div>
    
    <div class="form-group">
        <label for="exampleInputUsername1">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir_anak" placeholder="Masukan Tanggal Lahir Anak" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Status</label>
        <input type="text" class="form-control" name="status_anak" value="Aktif" readonly>
    </div>
                                
    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection