<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Kriteria extends Eloquent
{
	protected $table		= 'kriteria';
	protected $primaryKey	= 'id_kriteria';

	public function faktor()
	{
		require_once __DIR__ . '/Faktor.php';
		return $this->hasMany('Faktor', 'id_kriteria', 'id_kriteria');
	}
}