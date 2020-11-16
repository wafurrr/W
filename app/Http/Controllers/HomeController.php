<?php 

namespace App\Http\Controllers;

class HomeController extends Controller
{
	function showBeranda()
	{
		return view('admin2.beranda');
	}
	function showProduk()
	{
		return view('admin2.produk');
	}
	function showKategori()
	{
		return view('admin2.kategori');
	}
}