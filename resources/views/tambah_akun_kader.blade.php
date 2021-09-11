@extends('main')
@section('content')
            
<br>
<h4>Tambah Akun Ibu</h4>
<br>
<br>
<form method="post" action="{{url('save_akun_ibu')}}">
    {{csrf_field()}}
    
    {{-- <div class="form-group">
        <label for="exampleInputUsername1">Nama Ibu</label>
        <select class="form-control" name="id_ibu" required>
            <option>--Pilih Nama Ibu--</option> 
            @foreach($data_ibu as $data)
        <option value={{$data->id_ibu}}>{{$data->nama_ibu}}</option>
        @endforeach
        </select>
    </div> --}}

    <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukan Username Ibu" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Password</label>
        <input type="Password" class="form-control" name="password" placeholder="Masukan Password Ibu" required>
    </div>

    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection