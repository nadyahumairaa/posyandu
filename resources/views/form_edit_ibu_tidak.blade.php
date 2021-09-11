@extends('main')
@section('content')
            
<br>
<h4>{{$judul}}</h4>
<br>
<br>
<form method="post" action="{{url('update_ibu_tidak')}}">
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