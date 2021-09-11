@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
        <h4>{{$judul}}</h4>
            <br>
            <form action="data_balita1.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Nama Anak" name="txtcari" aria-describedby="basic-addon2">
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
                    <th>Tanggal Lahir</th>
                    <th>Nama Ibu</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
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
                <td>{{$data->tanggal_lahir}}</td>
                <td><a href="{{url('tambah_layanan_anak/'.$data->id_anak)}}" div class="mdi mdi-transcribe">Tambah</a>
                <td><a href="{{url('hapus_anak/'.$data->id_anak)}}" div class="mdi mdi-transcribe-close">Lihat Grafik</td>
                </tr>
                @endforeach
            </table>
            <br>
            {{$data_anak->links()}}
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection