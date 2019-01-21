<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Calon extends Eloquent
{
	protected $table		= 'calon';
	protected $primaryKey	= 'id_calon';
}