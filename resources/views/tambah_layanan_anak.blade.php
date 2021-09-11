@extends('main')
@section('content')
            
<br>
<h4>{{$judul}}</h4>
<br>
<table>
    <tr>
        <td><h4 class="text-info">Nama Anak :</td>
        <td><h4 class="text-info">@if(count($result) >0 ){{$result['master'] [0]->nama_anak}} @endif </td>
    </tr>
</table>
<br>
<form method="post" action="{{url('save_penimbangan')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputUsername1">ID Anak</label>
        <input type="text" class="form-control" name="id_anak" value="@if(count($result) >0 ){{$result['master'] [0]->id_anak}} @endif" readonly>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tanggal Pelayanan</label>
        <input type="date" class="form-control" name="tgl_pelayanan" placeholder="Masukan Nama Kontrasepsi Lama" required>
    </div>
    
    <div class="form-group">
        <label for="exampleInputUsername1">Berat Badan</label>
        <input type="text" class="form-control" name="bb" placeholder="Masukan Berat Badan Anak" required>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Tinggi Badan</label>
        <input type="text" class="form-control" name="tb" placeholder="Masukan Tinggi Badan Anak" required>
    </div>
                                
    <br>
    <input type="submit" value="Simpan" class="btn btn-gradient-primary mr-2">
</form>
@endsection