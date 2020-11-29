<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komentar;
use App\Models\ClientArtikel;
/**
 * 
 */
class KomentarController extends Controller
{
	
	function index()
	{	
		$user = request()->user();
		$data['list_komentar'] = Komentar::all();
		return view('admin/komentar/index', $data);
	}
	
	function create()
	{
		$data['list_komentar'] = Komentar::all();
		return view('admin/komentar/create', $data);
	}
	
	function store()
	{
		$komentar = new Komentar;
		$komentar->email = request('email');
		$komentar->nama = request('nama');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('admin/komentar')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Komentar $komentar)
	{
		$data['komentar'] = $komentar;
		return view('admin/komentar/show', $data);
	}
	
	function edit(Komentar $komentar)
	{
		$data['komentar'] = $komentar;
		return view('admin/komentar/edit', $data);
		
	}
	
	function update(Komentar $komentar)
	{
		$komentar->email = request('email');
		$komentar->nama = request('nama');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('admin/komentar')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Komentar $komentar)
	{
		$komentar->delete();

		return redirect('admin/komentar')->with('danger', 'Data Berhasil di Hapus');
	}

	function filter(){
		$judul = request('judul');
		$data['list_artikel'] = Artikel::where('judul', 'like' , "%$judul%")->get();
		$data['judul'] = $judul;
		return view('admin/komentar/index', $data);
	}
}