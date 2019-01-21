<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Faktor extends Eloquent
{
	protected $table		= 'faktor';
	protected $primaryKey	= 'Id_faktor';
}