@extends('main')
@section('content')
            
<br>
<h4>Tambah Data Ibu</h4>
<br>
<br>
<form method="post" action="{{url('save_ibu')}}">
    {{csrf_field()}}
    
    <div class="form-group">
        <label for="exampleInputUsername1">Nama Ibu</label>
        <input type="text" class="form-control" name="namaibu" placeholder="Masukan Nama Ibu" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Suami</label>
        <input type="text" class="form-control" name="nama_suami" placeholder="Masukan Nama Ibu" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Nama Ibu" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Alamat</label>
        <textarea class="form-control" id="exampleTextarea1" rows="4" name="alamat" required></textarea>
    </div>
    
    <div class="form-group">
            <label for="exampleInputUsername1">Nomer Telepon</label>
                <input type="number" class="form-control" name="nomer_telepon" value="Aktif" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Agama</label>
        <select class="form-control" name="agama">
        <option value=Islam>Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        </select>
    </div>
     
    <div class="form-group">
        <label for="exampleInputUsername1">Status</label>
            <input type="text" class="form-control" name="status" value="Aktif" readonly>
    </div>

    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection