@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
        <h4>{{$judul}}</h4>
            <br>
        <form action="{{url('cari_meninggal_anak')}}" method="GET">
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
                    <th>Tanggal Meninggal</th>
                    <th>Penyebab Meninggal</th>
                    <th colspan="2">Aksi</th>
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
                <td>{{$data->tanggal_meninggal_anak}}</td>
                <td>{{$data->penyebab_meninggal_anak}}</td>
                <td><a href="{{url('form_edit_meninggal_anak/'.$data->id_anak)}}" div class="mdi mdi-transcribe">Edit</a>
                <td><a href="{{url('hapus_meninggal_anak/'.$data->id_anak)}}" div class="mdi mdi-transcribe-close">Hapus</td>
                </tr>
                @endforeach
            </table>
            <br>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection