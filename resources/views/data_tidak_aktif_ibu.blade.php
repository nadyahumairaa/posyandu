@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
        <h4>{{$judul}}</h4>
            <br>
        <form action="{{url('cari_ibu_tidak_aktif')}}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Nama Ibu" name="txtcari" value="{{ old('txtcari') }}" aria-describedby="basic-addon2">
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
                    <th>Alamat</th>
                    <th>Nomer Telepon</th>
                    <th colspan="3">Aksi</th>
                </tr>
                @php
                 $no=1;
                @endphp
                @foreach($data_ibu as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_ibu}}</td>
                <td>{{$data->nama_suami}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->nomer_telepon}}</td>
                <td><a href="{{url('form_edit_ibu_tidak/'.$data->id_ibu)}}" div class="mdi mdi-transcribe">Edit</a>
                </tr>
                @endforeach
            </table>
            <br>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection