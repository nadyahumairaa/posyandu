@extends('main')
@section('content')
            
<br>
<h4>{{$judul}}</h4>
<br>
<br>
<form method="post" action="{{url('update_anak_tidak')}}">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputUsername1">Nama Anak</label>
        <select class="form-control" name="id_anak" required>
            @foreach($result['master'] as $data)
        <option value={{$data->id_anak}}>{{$data->nama_anak}}</option>
        @endforeach
        </select>
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