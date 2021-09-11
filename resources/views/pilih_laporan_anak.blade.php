@extends('main')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content"> 
        <h4>Pilih</h4>
        <form action="{{url('cari_meninggal_ibu')}}" method="GET">
            <div class="input-group">
                <input type="date" class="form-control" placeholder="Cari Nama Ibu" name="txtcari" value="{{ old('txtcari') }}" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    
       <input type="submit" value='Cari' class="btn btn-sm btn-gradient-primary">
                </div>
              </div>
            </form>
            <br>
            <a href="{{url('laporan-pdf')}}" div class="mdi mdi-transcribe">Data Anak Aktif</a>
            
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection