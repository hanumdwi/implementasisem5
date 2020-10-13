<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use DB;

class DataController extends Controller
{
    public function getCountries()
    {
        $customer = DB::table('customer')->get();
        $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        
        return view('dropdown', ['customer' =>$customer,'provinsi'=>$provinsi]);
        // $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        // return view('dropdown',compact('provinsi'));
    }

    public function getCountries1()
    {
        $customer = DB::table('customer')->get();
        $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        return view('dropdown1', ['customer' =>$customer,'provinsi'=>$provinsi]);
    }

    public function getStates($id) 
    {        
        $kota = DB::table("kota")->where("ID_PROVINSI",$id)->pluck("NAMA_KOTA","ID_KOTA");
        return json_encode($kota);
    }
    public function getKecamatan($id) 
    {        
        $kecamatan = DB::table("kecamatan")->where("ID_KOTA",$id)->pluck("NAMA_KECAMATAN","ID_KECAMATAN");
        return json_encode($kecamatan);
    }
    public function getKelurahan($id) 
    {        
        $kelurahan = DB::table("kelurahan")->where("ID_KECAMATAN",$id)->get();
        return json_encode($kelurahan);
    }
    public function getKodepos($id) 
    {        
        $kelurahan = DB::table("kelurahan")->where("ID_KELURAHAN",$id)->pluck("KODEPOS","ID_KELURAHAN");
        return json_encode($kelurahan);
    }

    public function customer_store1(Request $request)
    {
        // $customer = DB::table('customer')->get();
        // $provinsi = DB::table('provinsi')->pluck("NAMA_PROVINSI","ID_PROVINSI");
        
        // return view('dropdown', ['customer' =>$customer,'provinsi'=>$provinsi]);
        //dump($customer);
        DB::table('customer')->insert(['NAMA' => $request->nama,
        'ALAMAT' => $request->alamat,
        'FOTO' => $request->foto,
        'ID_KELURAHAN'=> $request->kelurahan,
        ]);
        return redirect('/dropdownlist');
        // echo $request->foto;
    }

    public function customer_store2(Request $request)
    {
        // $base64_str = substr($request->foto, strpos($request->foto, ",")+1);
        // $foto = base64_decode($base64_str) ;
        // $x = 1000;
        // $path = '/public/file_foto/foto_customer'.$x.'.jpeg';
        // Storage::put($path,$foto);

        // DB::table('customer')->insert(['NAMA' => $request->nama,
        // 'ALAMAT' => $request->alamat,
        // 'FILE_PATH' => $path,
        // 'ID_KELURAHAN'=> $request->kelurahan,
        // ]);
        $base64_str = substr($request->foto, strpos($request->foto, ",")+1);
        $foto = base64_decode($base64_str) ;
        $nama_foto = 2;
        $path = '/public/file_foto/Customer'.$nama_foto.'.jpeg';
        Storage::put($path,$foto);

        DB::table('customer')->insert(['NAMA' => $request->nama,
        'ALAMAT' => $request->alamat,
        'FILE_PATH' => $path,
        'ID_KELURAHAN'=> $request->kelurahan,
        ]);
        return redirect('/dropdownlist1');
    }

  

}
