<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;
use ConsoleTVs\Charts\Facades\Charts;
use Codedge\Fpdf\Fpdf\Fpdf;

class DataController extends Controller
{
    function tambah_ibu(){
        return view('tambah_ibu');
    }

    function save_ibu(Request $rq){
        $qry=DB::table('tabel_ibu')->insert([
            'nama_ibu'     => $rq->namaibu,
            'nama_suami'   => $rq->nama_suami,
            'tempat_lahir' => $rq->tempat_lahir,
            'tanggal_lahir'=> $rq->tanggal_lahir,
            'alamat'       => $rq->alamat,
            'nomer_telepon'=> $rq->nomer_telepon,
            'agama'        => $rq->agama,
            'status'       => $rq->status
        ]);
        if($qry){
            return redirect('data_ibu')->with(['success' => 'Data Berhasil Disimpan']);
        }else{
            return redirect('tambah_ibu')->with(['error' => 'Gagal Disimpan']);
        }

    }

    //Tampil Data
    function data_ibu(){
        $ibu =DB::table('tabel_ibu')
                ->where('status','Aktif')
                ->whereNull('penyebab_meninggal')
                ->get();
        $data=array(
            'judul' =>'Data Ibu',
            'data_ibu'=>$ibu
        );
        return view('data_ibu',$data);
    }

    function cari_ibu(Request $request) {
        // menangkap data pencarian
        $cari = $request->txtcari;
            // mengambil data dari table Ibu sesuai pencarian data
            $ibu =DB::table('tabel_ibu')
            ->where('nama_ibu','like',"%".$cari."%")
            ->where('status','Aktif')
            ->whereNull('penyebab_meninggal')
            ->get();
        $data=array(
            'judul' =>'Data Ibu',
            'data_ibu'=>$ibu
            );
            // mengirim data pegawai ke view index
        return view('data_ibu', $data);
 
    }

    function hapus_ibu($id){
        $qry=DB::table('tabel_ibu')
                ->where('id_ibu',$id)
                ->delete();
        $pesan="Data berhasil Dihapus";
        if($qry){
            return redirect('data_ibu')->with(['info' => 'Data Berhasil Dihapus']);
        }else{
            return redirect('data_ibu')->with(['error' => 'Data Gagal Dihapus']);
        }
        }

        function form_edit_ibu($id){
        $result = array();
        $mm = DB::table('tabel_ibu')
              ->where('id_ibu',$id)
              ->get();
        $result['master'] =$mm;
        $data=array(
            'judul'=>'Form Edit Data Ibu'
        );
        return view('form_edit_ibu',$data)->with('result',$result);
        }

        //update data
        function update_ibu(Request $rq){
        $qry=DB::table('tabel_ibu')->where('id_ibu',$rq->id_ibu)
                ->update([
            'nama_ibu'      => $rq->nama_ibu,
            'nama_suami'    => $rq->nama_suami,
            'tempat_lahir'  => $rq->tempat_lahir,
            'tanggal_lahir' => $rq->tanggal_lahir,
            'alamat'        => $rq->alamat,
            'nomer_telepon' => $rq->nomer_telepon,
            'agama'         => $rq->agama,
            'status'        => $rq->status
        ]);
        if ($qry){
            return redirect('data_ibu')->with(['info' => 'Data Berhasil Diubah']);
        }else{
                echo"Gagal";
        }
        }

        function kematian_ibu($id){
            $result = array();
            $mm = DB::table('tabel_ibu')
                  ->where('id_ibu',$id)
                  ->get();
            $result['master'] =$mm;
            $data=array(
                'judul'=>'Tambah Kematian Ibu',
            );
            return view('kematian_ibu',$data)->with('result',$result);
        }

        function cari_meninggal_ibu(Request $request) {
            // menangkap data pencarian
            $cari = $request->txtcari;
                // mengambil data dari table pegawai sesuai pencarian data
            $ibu = DB::table('tabel_ibu')
            ->where('nama_ibu','like',"%".$cari."%")
            ->where('status','Tidak Aktif')
            ->whereNotNull('penyebab_meninggal')
            ->paginate();
            $data=array(
                'judul' =>'Data Ibu Tidak Aktif',
                'data_ibu'=>$ibu
                );
     
                // mengirim data pegawai ke view index
            return view('data_meninggal_ibu', $data);
     
        }

        function update_kematian_ibu(Request $rq){
            $qry=DB::table('tabel_ibu')->where('id_ibu',$rq->id_ibu)
                    ->update([
                'tanggal_meninggal'          => $rq->tanggal_meninggal,
                'penyebab_meninggal'         => $rq->penyebab_meninggal,
                'status'                     => $rq->status
            ]);
            if ($qry){
                return redirect('data_ibu')->with(['info' => 'Data Berhasil Diubah']);
            }else{
                    echo"Gagal";
            }
            }

        function data_meninggal_ibu(){
            $ibu =DB::table('tabel_ibu')            
            ->where('status','Tidak Aktif')
            ->whereNotNull('penyebab_meninggal')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Meninggal Ibu',
        'data_ibu'=>$ibu
        );
        return view('data_meninggal_ibu',$data);
                
            }

        function form_edit_meninggal_ibu($id){
            $result = array();
            $mm = DB::table('tabel_ibu')
                  ->where('id_ibu',$id)
                  ->get();
            $result['master'] =$mm;
            $data=array(
                'judul'=>'Edit Meninggal Ibu'
            );
            return view('form_edit_meninggal_ibu',$data)->with('result',$result);
        }

        function update_kematian_ib(Request $rq){
            $qry=DB::table('tabel_ibu')->where('id_ibu',$rq->id_ibu)
                    ->update([
                'tanggal_meninggal'          => $rq->tanggal_meninggal,
                'penyebab_meninggal'         => $rq->penyebab_meninggal,
            ]);
            if ($qry){
                return redirect('data_meninggal_ibu')->with(['info' => 'Data Berhasil Diubah']);
            }else{
                    echo"Gagal";
            }
            }

            function data_tidak_aktif_ibu(){
                $ibu =DB::table('tabel_ibu')
                ->where('status','Tidak Aktif')
                ->whereNull('penyebab_meninggal')
                ->paginate(10);
                $data=array(
            'judul' =>'Data Ibu yang Tidak Aktif',
            'data_ibu'=>$ibu
            );
            return view('data_tidak_aktif_ibu',$data);
            }

            function cari_ibu_tidak_aktif(Request $request){
            // menangkap data pencarian
            $cari = $request->txtcari;
                // mengambil data dari table pegawai sesuai pencarian data
                $ibu =DB::table('tabel_ibu')
                ->where('nama_ibu','like',"%".$cari."%")
                ->where('status','Tidak Aktif')
                ->whereNull('penyebab_meninggal')
                ->paginate(10);
            $data=array(
                'judul' =>'Data Ibu Tidak Aktif',
                'data_ibu'=>$ibu
                );
     
                // mengirim data pegawai ke view index
            return view('data_tidak_aktif_ibu', $data);                
            }

            function form_edit_ibu_tidak($id){
                $result = array();
                $mm = DB::table('tabel_ibu')
                      ->where('id_ibu',$id)
                      ->get();
                $result['master'] =$mm;
                $data=array(
                    'judul'=>'Form Edit Ibu yang Tidak Aktif'
                );
                return view('form_edit_ibu_tidak',$data)->with('result',$result);
            }

            function update_ibu_tidak(Request $rq){
                $qry=DB::table('tabel_ibu')
                ->where('id_ibu',$rq->id_ibu)
                ->update([
                'status'       => $rq->status
            ]);
            if($qry){
                return redirect('data_tidak_aktif_ibu')->with(['success' => 'Data Berhasil Disimpan']);
            }else{
                return redirect('data_tidak_aktif_ibu')->with(['error' => 'Gagal Disimpan']);
            }
            }

        function punya_anak($id){
            $anak =DB::table('tabel_anak')
            ->where('id_ibu','$id')
            ->get();
            $data=array(
        'judul' =>'Data Anak',
        'data_anak'=>$anak
        );
        return view('punya_anak',$data);
        }

        // Anak
        function tambah_anak(){
                $anak =DB::table('tabel_ibu')
                        ->orderby('nama_ibu','ASC')
                        ->get();
                $data=array(
        
                    'judul' =>'Tambah Data Anak',
                    'datan'=>$anak
                );
                return view('tambah_anak',$data);
        }

        function save_anak(Request $rq){
            $qry=DB::table('tabel_anak')->insert([
                'id_ibu'            => $rq->id_ibu,
                'nama_anak'         => $rq->nama_anak,
                'tempat_lahir_anak' => $rq->tempat_lahir_anak, 
                'tanggal_lahir_anak'=> $rq->tanggal_lahir_anak,
                'jenis_kelamin'     => $rq->jenis_kelamin,
                'status_anak'       => $rq->status_anak
    
            ]);
            if($qry){
                return redirect('data_anak')->with(['success' => 'Data Berhasil Disimpan']);
            }else{
                return redirect('data_anak')->with(['error' => 'Gagal Disimpan']);
            }
    
        }

        function update_anak(Request $rq){
            $qry=DB::table('tabel_anak')->where('id_anak',$rq->id_anak)
                    ->update([
                'id_ibu'            => $rq->id_ibu,
                'nama_anak'         => $rq->nama_anak,
                'tempat_lahir_anak' => $rq->tempat_lahir_anak, 
                'tanggal_lahir_anak'=> $rq->tanggal_lahir_anak,
                'jenis_kelamin'     => $rq->jenis_kelamin,
                'status_anak'       => $rq->status_anak
    
            ]);
            if($qry){
                return redirect('data_anak')->with(['success' => 'Data Berhasil Disimpan']);
            }else{
                return redirect('data_anak')->with(['error' => 'Gagal Disimpan']);
            }
        }

        function data_anak(){
            $anak =DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('status_anak','Aktif')
            ->whereNull('penyebab_meninggal_anak')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Anak',
        'data_anak'=>$anak
        );
        return view('data_anak',$data);
        }

        function cari_anak(Request $request) {
            // menangkap data pencarian
            $cari = $request->txtcari;
                // mengambil data dari table pegawai sesuai pencarian data
            $anak = DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('nama_anak','like',"%".$cari."%")
            ->where('status_anak','Aktif')
            ->whereNull('penyebab_meninggal_anak')
            ->paginate();
            $data=array(
                'judul' =>'Data Anak',
                'data_anak'=>$anak
                );
     
                // mengirim data pegawai ke view index
            return view('data_anak', $data);
     
        }
    
        function penimbangan_anak(){
            $anak =DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Anak',
        'data_anak'=>$anak
        );
        return view('penimbangan_anak',$data);
        }

        function tambah_layanan_anak($id){
            $result = array();
            $mm = DB::table('tabel_anak')
                  ->where('id_anak',$id)
                  ->get();
            $result['master'] =$mm;
            $data=array(
                'judul'=>'Tambah Data Penimbangan'
            );
            return view('tambah_layanan_anak',$data)->with('result',$result);
    
            }

        function form_edit_anak($id){
                $result = array();
                $mm = DB::table('tabel_anak')
                      ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
                      ->where('id_anak',$id)
                      ->get();
                $result['master'] =$mm;
                $data=array(
                    'judul'=>'Form Edit Data Anak'
                );
                return view('form_edit_anak',$data)->with('result',$result);
        
        }

        function hapus_anak($id){
            $qry=DB::table('tabel_anak')
                    ->where('id_anak',$id)
                    ->delete();
            if($qry){
                return redirect('data_anak')->with(['info' => 'Data Berhasil Dihapus']);
            }else{
                return redirect('data_anak')->with(['error' => 'Data Gagal Dihapus']);
            }
            }

        function kematian_anak($id){
                $result = array();
                $mm = DB::table('tabel_anak')
                      ->where('id_anak',$id)
                      ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
                      ->get();
                $result['master'] =$mm;
                $data=array(
                    'judul'=>'Tambah Kematian Anak',
                );
                return view('kematian_anak',$data)->with('result',$result);
        }

      

        //update data
        function update_kematian_anak(Request $rq){
        $qry=DB::table('tabel_anak')->where('id_anak',$rq->id_anak)
                ->update([
            'tanggal_meninggal_anak'          => $rq->tanggal_meninggal,
            'penyebab_meninggal_anak'         => $rq->penyebab_meninggal_anak,
            'status_anak'                     => $rq->status_anak
        ]);
        if ($qry){
            return redirect('data_anak')->with(['info' => 'Data Berhasil Diubah']);
        }else{
                echo"Gagal";
        }
        }

        function data_meninggal_anak(){
            $anak =DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('status_anak','Tidak Aktif')
            ->whereNotNull('penyebab_meninggal_anak')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Meninggal Anak',
        'data_anak'=>$anak
        );
        return view('data_meninggal_anak',$data);
        }

        function cari_meninggal_anak(Request $request) {
            // menangkap data pencarian
            $cari = $request->txtcari;
                // mengambil data dari table pegawai sesuai pencarian data
            $anak = DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('nama_anak','like',"%".$cari."%")
            ->where('status_anak','Tidak Aktif')
            ->whereNotNull('penyebab_meninggal_anak')
            ->paginate();
            $data=array(
                'judul' =>'Data Anak',
                'data_anak'=>$anak
                );
     
                // mengirim data pegawai ke view index
            return view('data_meninggal_anak', $data);
     
        }

        function form_edit_meninggal_anak($id){
            $result = array();
            $mm = DB::table('tabel_anak')
                  ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
                  ->where('id_anak',$id)
                  ->get();
            $result['master'] =$mm;
            $data=array(
                'judul'=>'Form Edit Meninggal Anak'
            );
            return view('form_edit_meninggal_anak',$data)->with('result',$result);
        }

        function update_kematian_an(Request $rq){
            $qry=DB::table('tabel_anak')->where('id_anak',$rq->id_anak)
                ->update([
            'tanggal_meninggal_anak'          => $rq->tanggal_meninggal_anak,
            'penyebab_meninggal_anak'         => $rq->penyebab_meninggal_anak
        ]);
        if ($qry){
            return redirect('data_meninggal_anak')->with(['info' => 'Data Berhasil Diubah']);
        }else{
                echo"Gagal";
        }
        }

        function data_tidak_aktif_anak(){
            $anak =DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('status_anak','Tidak Aktif')
            ->whereNull('penyebab_meninggal_anak')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Anak yang Tidak Aktif',
        'data_anak'=>$anak
        );
        return view('data_tidak_aktif_anak',$data);

        }

        function cari_anak_tidak_aktif(Request $request){
            $cari = $request->txtcari;
            //ini dia
            $anak =DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('nama_anak','like',"%".$cari."%")
            ->where('status_anak','Tidak Aktif')
            ->whereNull('penyebab_meninggal_anak')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Anak yang Tidak Aktif',
        'data_anak'=>$anak
        );
        return view('data_tidak_aktif_anak',$data);

        }

        function form_edit_anak_tidak($id){
            $result = array();
            $mm = DB::table('tabel_anak')
                  ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
                  ->where('id_anak',$id)
                  ->get();
            $result['master'] =$mm;
            $data=array(
                'judul'=>'Form Edit Anak yang Tidak Aktif'
            );
            return view('form_edit_anak_tidak',$data)->with('result',$result);
        }

        function update_anak_tidak(Request $rq){
            $qry=DB::table('tabel_anak')->where('id_anak',$rq->id_anak)
                    ->update([
                'status_anak'       => $rq->status_anak
    
            ]);
            if($qry){
                return redirect('data_tidak_aktif_anak')->with(['success' => 'Data Berhasil Disimpan']);
            }else{
                return redirect('data_tidak_aktif_anak')->with(['error' => 'Gagal Disimpan']);
            }

        }

        function print(){
            Fpdf::AddPage();
            Fpdf::SetFont('Courier', 'B', 18);
            Fpdf::Cell(50, 25, 'Hello World!');
            Fpdf::Output();
        }

        function generatePDF(){
            $anak =DB::table('tabel_anak')
            ->join('tabel_ibu','tabel_ibu.id_ibu','tabel_anak.id_ibu')
            ->where('status_anak','Aktif')
            ->whereNull('penyebab_meninggal_anak')
            ->paginate(10);
            $data=array(
        'judul' =>'Data Anak ',
        'data_anak'=>$anak
        );
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('laporan-pdf.pdf');
        }

        function pilih_laporan_anak(){
            return view('pilih_laporan_anak');
        }

        function chart(){
            $query = DB::table('tabel_penimbangan')
                    ->get();
            $chart = Charts::database($query,'bar','highchart')
            ->title("Monthly new Register Users")
            ->elementLabel("Total Users")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->groupByMonth(month('M'), true);
            return view('tampil_chart',compact('chart'));                          

        }

        function tampil_chart(){
        return view('tampil_chart');
        }
            
}
