@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
            <h4>Data Ibu</h4>
            <br>
        <form action="{{url('cari_ibu')}}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Nama Ibu" name="txtcari" aria-describedby="basic-addon2">
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
                    <th>Nama Ibu</th>
                    <th>Nama Suami</th>
                    <th>Nomer Telepon</th>
                    <th colspan="4">Aksi</th>
                </tr>
                @php
                 $no=1;
                @endphp
                @foreach($data_ibu as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_ibu}}</td>
                <td>{{$data->nama_suami}}</td>
                <td>{{$data->nomer_telepon}}</td>
                <td><a href="{{url('form_edit_ibu/'.$data->id_ibu)}}" div class="mdi mdi-transcribe">Edit</a>
                <td><a href="{{url('hapus_ibu/'.$data->id_ibu)}}" div class="mdi mdi-transcribe-close">Hapus</td>
                <td><a href="{{url('kematian_ibu/'.$data->id_ibu)}}" div class="mdi mdi-camera-switch">Meninggal</td>
                <td><a href="{{url('punya_anak/'.$data->id_ibu)}}" div class="mdi mdi-human-child">Anak</td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection