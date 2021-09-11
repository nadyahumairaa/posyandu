@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
            <div class="table-responsive">
                <table class="table table-bordered">
                <tr class="table-info">
                    <th>No.</th>
                    <th>Nama Anak</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomer Telepon</th>
                    <th colspan="4">Aksi</th>
                </tr>
                @php
                 $no=1;
                @endphp
                @foreach($data_anak as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_anak}}</td>
                <td>{{$data->tanggal_lahir}}</td>
                <td>{{$data->nama_anak}}</td>
                {{-- <td><a href="{{url('form_edit_ibu/'.$data->id_ibu)}}" div class="mdi mdi-transcribe">Edit</a>
                <td><a href="{{url('hapus_ibu/'.$data->id_ibu)}}" div class="mdi mdi-transcribe-close">Hapus</td>
                <td><a href="{{url('kematian_ibu/'.$data->id_ibu)}}" div class="mdi mdi-camera-switch">Meninggal</td>
                <td><a href="{{url('punya_anak/'.$data->id_ibu)}}" div class="mdi mdi-human-child">Anak</td> --}}
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection