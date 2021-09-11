<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    function ibu(){
        $ibu =DB::table('tabel_ibu')
                ->get();
        $data=array(
            'judul' =>'Data Ibu',
            'data_ibu'=>$ibu
        );
        return view('tambah_akun_ibu',$data);
    }

    function save_akun_ibu(Request $rq){  
        $qry=DB::table('login_ibu')->insert([
            'id_ibu'     => $rq->id_ibu,
            'username'   => $rq->username,
            'password'   => $rq->password
        ]);
        $id = $rq->$nama_ibu;
        $ibu = DB::table('login_ibu')
               ->where('id_ibu','$id')
               ->get();
        if($ibu >0 ){
            return view('tambah_akun_kader')->with(['success' => 'Data Duplikat']);
        }elseif ($qry){
            return view('tambah_akun_kader')->with(['error' => 'Gagal Disimpan']);
        }
    }

    function data_ibu(){
        $ibu =DB::table('tabel_ibu')
                ->get();
        $data=array(
            'judul' =>'Data Ibu',
            'data'=>$ibu
        );
        return view('data_ibu_admin',$data);
    }

    function cek_ibu($id){
        $mm = DB::table('tabel_ibu')
        ->join('login_ibu','login_ibu.id_ibu','tabel_ibu.id_ibu')
        ->where('id_ibu','$id');
        $data=array(
                'data_ibu'=>$mm
            );
        if ($data>0 ){
        return view('tambah_akun_ibu')->with(['success' => 'Akun Sudah Ada']);;
        // }else{
        // return view('data_ibu_admin')->with(['success' => 'Berhasulll']);
        }
    }
}
