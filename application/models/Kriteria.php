<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Kriteria extends Eloquent
{
	protected $table		= 'kriteria';
	protected $primaryKey	= 'id_kriteria';
}