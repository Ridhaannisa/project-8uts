<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komentar;
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
		$penulis = request('penulis');
		$tanggal = request('tanggal');
		$data['list_artikel'] = Artikel::where('judul', 'like' , "%$judul%")->get();
		//$data['list_artikel'] = Artikel::where('penulis','like', "%$penulis%")->get();
		//$data['list_artikel'] = Artikel::where('tanggal', 'likel', "%$tanggal%")->get();
		$data['judul'] = $judul;
		$data['tanggal'] = $tanggal;
		$data['penulis'] = $penulis;
		return view('admin/komentar/index', $data);
	}
}