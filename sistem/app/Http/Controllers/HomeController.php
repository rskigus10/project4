<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller{

    function showHome(){
        $data['list_produk'] = Produk::all();
        return view('client.home', $data);
    }

    function showtemplate(){
        return view('template.base');
    }

    function showClient(){
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect("client")->with('success', 'Data Berhasil Ditambahkan');
    }

    function showProduct(){
        return view("template.product");
    }

    function showPromo(){
        return view("template.promo");
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        //$data['list_produk'] = Produk::whereIn('stok',  $stok)->get();
        //$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        //$data['list_produk'] = Produk::whereNotIn('stok',  $stok)->get();
        //$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk::whereDate('created_at', '2020-11-12')->get();
        //$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->whereYear('created_at', ('2020'))->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');


        return view('client.home', $data);
    }

}