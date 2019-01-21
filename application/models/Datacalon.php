<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Datacalon extends Eloquent
{
	protected $table		= 'data_calon';
	protected $primaryKey	= 'id_data_calon';

	public function get_data_calon(){
		$res = $this->query_data_calon()->get();
		return $this->set_format_data($res);
	}

  public function get_data_calon_by_id($id){
    $res = $this->query_data_calon()->where('calon.id_calon',$id)->get();
    return $this->set_format_data($res);
  }

  private function query_data_calon(){
     $sql = $this->selectRaw("calon.id_calon,nama,GROUP_CONCAT( data_calon.id_data_calon SEPARATOR ',') as id_data_calon, GROUP_CONCAT(nama_kriteria SEPARATOR ',') as nama_kriteria, GROUP_CONCAT(bobot_kriteria SEPARATOR ',') as bobot_kriteria, GROUP_CONCAT(kriteria.id_kriteria SEPARATOR ',') as id_kriteria, GROUP_CONCAT(nama_faktor SEPARATOR ',') as nama_faktor, GROUP_CONCAT(bobot_faktor SEPARATOR ',') as bobot_faktor, GROUP_CONCAT(faktor.id_faktor SEPARATOR ',') as id_faktor")->join('calon','data_calon.id_calon','=','calon.id_calon')->join('kriteria','data_calon.id_kriteria','=','kriteria.id_kriteria')->join('faktor','data_calon.id_faktor','=','faktor.id_faktor')->groupBy('nama')->orderBy('kriteria.nama_kriteria','ASC');
     return $sql;
  }

	private function set_format_data($res){
       $warga= [];
       $index = 0;
       foreach ($res as $value) {
          $warga[$index]['id_data_calon'] = explode(",", $value['id_data_calon']);
          $warga[$index]['nama'] = $value['nama'];
          $warga[$index]['id_calon'] = $value['id_calon'];
          $warga[$index]['kriteria']['id'] = explode(",", $value['id_kriteria']);   	  
          $warga[$index]['kriteria']['nama'] = explode(",", $value['nama_kriteria']);   	  
          $warga[$index]['kriteria']['bobot'] = explode(",", $value['bobot_kriteria']);   	  
          $warga[$index]['faktor']['id'] = explode(",", $value['id_faktor']);   	  
          $warga[$index]['faktor']['nama'] = explode(",", $value['nama_faktor']);   	  
          $warga[$index]['faktor']['bobot'] = explode(",", $value['bobot_faktor']);   	  
       	  $index++;
       }
      return $warga;
	}

}