<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Usercontroller extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert', 'Anda Harus login dulu');
        }
        else{
            return view('index');
        }
    }

    public function login(){
        return view('auth/login');
    }

    public function loginpost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data =DB::table('user')
        ->where('email', $email)
        ->where('password', $password)
        ->get();
        if(count($data) >0) {
            foreach($data as $dt){
                Session::put('nama_lengkap', $dt->nama_lengkap);
                Session::put('id', $dt->id);
                Session::put('email', $dt->email);
                Session::put('hak_akses', $dt->hak_akses);
                Session::put('login', TRUE);
            }
            switch (Session::get('hak_akses')){
                case 'kader':
                    return redirect('/');
                case 'admin':
                    return redirect('tambah_akun_ibu');
                    default:
                    return redirect('login')->with('alert','Password atau email salah !');
                break;
            }
        }else{
            return redirect('login')->with('alert','Password atau Email salah');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Anda Sudah Logout');
    }

    public function tambah_anak(){
        return view('tambah_anak');
    }
    }
