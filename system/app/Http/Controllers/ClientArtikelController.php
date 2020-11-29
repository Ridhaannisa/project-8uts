<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\ClientArtikel;
use App\Models\Komentar;

/**
 * 
 */
class ClientArtikelController extends Controller
{
	
	function index()
	{
		$data['list_komentar'] = Komentar::all();
		$data['list_artikel'] = Artikel::all();
		return view('client/index', $data);
	}
	
	function create(Artikel $artikel)
	{	
		$data['list_komentar'] = Komentar::all();
		$data['artikel'] = $artikel;
		return view('client/komentar', $data);
	}
	
	function store(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		$data['list_komentar'] = Komentar::all();

		$komentar = new ClientArtikel;
		$komentar->email = request('email');
		$komentar->nama = request('nama');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('/')->with('success', 'Komentar Anda Berhasil Ditambahkan');
	}
	
	function lihat(){
		$data['list_komentar'] = ClientArtikel::all();
		return view('client/artikel', $data);
	}

	function show(Artikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('client/show', $data);
	}
	
	function edit(ClientArtikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('client/edit', $data);
		
	}
	
	function update(ClientArtikel $artikel)
	{
		
		$artikel->isi = request('isi');
		$artikel->save();

		return redirect('artikel')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(ClientArtikel $artikel)
	{
		$artikel->delete();

		return redirect('artikel')->with('danger', 'Data Berhasil di Hapus');
	}

	function clientfilter(){
		$judul = request('judul');
		$penulis = request('penulis');
		$data['list_artikel'] = Artikel::where('judul', 'like' , "%$judul%")->whereIn('penulis', [$penulis])->get();
		$data['judul'] = $judul;
		$data['penulis'] = $penulis;
		
		return view('client.index', $data);
	}
}