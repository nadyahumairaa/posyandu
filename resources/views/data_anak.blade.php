@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
        <h4>{{$judul}}</h4>
            <br>
        <form action="{{url('cari_anak')}}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Nama Anak" name="txtcari" value="{{ old('txtcari') }}" aria-describedby="basic-addon2">
                    <div class="input-group-append">
           <input type="submit" value='Cari' class="btn btn-sm btn-gradient-primary">

                    </div>
                  </div>
                </form>
                 <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                <tr class="table-info">
                    <th>No.</th>
                    <th>Nama Anak</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Ibu</th>
                    <th>Tanggal Lahir</th>
                    <th colspan="3">Aksi</th>
                </tr>
                @php
                 $no=1;
                @endphp
                @foreach($data_anak as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_anak}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->nama_ibu}}</td>
                <td>{{$data->tanggal_lahir_anak}}</td>
                <td><a href="{{url('form_edit_anak/'.$data->id_anak)}}" div class="mdi mdi-transcribe">Edit</a>
                <td><a href="{{url('hapus_anak/'.$data->id_anak)}}" div class="mdi mdi-transcribe-close">Hapus</td>
                <td><a href="{{url('kematian_anak/'.$data->id_anak)}}" div class="mdi mdi-camera-switch">Meninggal</td>
                </tr>
                @endforeach
            </table>
            <br>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection