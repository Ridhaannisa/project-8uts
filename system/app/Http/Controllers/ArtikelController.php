<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\kategori;
use App\Models\Komentar;

/**
 * 
 */
class ArtikelController extends Controller
{
	
	function index()
	{	
		$user = request()->user();
		$data['list_artikel'] = Artikel::all();
		$data['list_komentar'] = Komentar::all();
		return view('admin/artikel/index', $data);
	}
	
	function create()
	{	
		$data['list_komentar'] = Komentar::all();
		$data['list_kategori'] = kategori::all();
		return view('admin/artikel/create', $data);
	}
	
	function store()
	{
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->id_kategori = request('id_kategori');
		$artikel->tanggal = request('tanggal');
		$artikel->isi = request('isi');
		$artikel->save();

		return redirect('admin/artikel')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('admin/artikel/show', $data);
	}
	
	function edit(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		$data['list_kategori'] = kategori::all();
		$data['list_komentar'] = Komentar::all();
		return view('admin/artikel/edit', $data);
		
	}
	
	function update(Artikel $artikel)
	{
		$artikel->judul = request('judul');
		$artikel->penulis = request('penulis');
		$artikel->id_kategori = request('id_kategori');
		$artikel->tanggal = request('tanggal');
		$artikel->isi = request('isi');
		$artikel->save();

		return redirect('admin/artikel')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Artikel $artikel)
	{
		$artikel->delete();

		return redirect('admin/artikel')->with('danger', 'Data Berhasil di Hapus');
	}

	function filter(){
		$judul = request('judul');
		$penulis = request('penulis');
		$data['list_artikel'] = Artikel::where('judul', 'like' , "%$judul%")->whereIn('penulis', [$penulis])->get();
		$data['judul'] = $judul;
		$data['penulis'] = $penulis;
		
		return view('admin/artikel.index', $data);
	}
}