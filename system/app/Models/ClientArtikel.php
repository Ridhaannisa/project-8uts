<?php 

namespace App\Models;
use App\Models\komentar;

/**
 * 
 */
class ClientArtikel extends Model
{
	
	protected $table = 'komentar';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
}