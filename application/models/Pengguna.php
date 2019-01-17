<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pengguna extends Eloquent
{
	protected $table		= 'pengguna';
	protected $primaryKey	= 'id_pengguna';

	public function role()
	{
		require_once __DIR__ . '/Role.php';
		return $this->hasOne('Role', 'role_id', 'role_id');
	}
}