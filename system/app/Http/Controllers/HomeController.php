<?php 

namespace App\Http\Controllers;

/**
 * 
 */
class HomeController extends Controller
{
	
	function showBeranda()
	{
		return view('admin/beranda');
	}
	
	function showKategori()
	{
		return view('admin/kategori');
	}
	
	function showArtikel()
	{
		return view('admin/artikel');
	}
	function showKomentar()
	{
		return view('admin/komentar');
	}


}