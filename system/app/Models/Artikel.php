<?php 

namespace App\Models;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Komentar;

class Artikel extends Model
{
	protected $table = 'artikel';
	

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	} 
}