<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
 		   $data["nama"]="Sachra Ramadhan";
 		   $data["asal"]="Bandung";
		   return view('v_latihan1', $data);
  	}

    public function method2(){
        $data["title"]="Daftar Mahasiswa";
        $data['daf_mhs']=array(
            array('nama'=>'Agus','asal'=>'Bandung'),
            array('nama'=>'Budi','asal'=>'Jakarta'),
            array('nama'=>'rama','asal'=>'Tokyo'),
            array('nama'=>'Roni Basreng','asal'=>'Surabaya')
        );
        return view('v_latihan2', $data);
    }
}
