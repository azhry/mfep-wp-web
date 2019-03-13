<?php 

class Kades extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'kades';
    $this->data['id_role']  = $this->session->userdata('id_role');
    if (!isset($this->data['id_role']) or $this->data['id_role'] != 2)
    {
      $this->session->sess_destroy();
      redirect('login');
    }
    $this->data['id_pengguna']  = $this->session->userdata('id_pengguna');
    $this->data['username']     = $this->session->userdata('username');
	}

	public function index(){
		// count jumlah calon
		$this->load->model('kriteria');
		$this->load->model('Calon');
		$this->data['kriteria_count'] = count(Kriteria::get());
        $this->data['calon_count'] = count(Calon::get());
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function data_kriteria(){
		$this->load->model('Kriteria');
		$kriteria = new Kriteria();
		// if($this->input->post("hapus")){
		//    $id = $this->input->post("id");
  //          $warga = Kriteria::find($id);
		//    $warga->delete();
		//    $this->flashmsg('Data deleted');
  //          redirect('kades/data_kriteria');
		// }else if($this->input->post("ubah")){
		//    $id = $this->input->post("id");
  //          $this->update_kriteria($id);
		// }else 
    if($this->input->post("faktor")){
           $id = $this->input->post("id");
           $this->faktor_kriteria($id);
		}else{
           $this->data['kriteria'] = $kriteria::orderBy('bobot_kriteria', 'DESC')->get();
           $this->data['title']	= 'Kriteria';
	       $this->data['content']	= 'data_kriteria';
	       $this->template($this->data, $this->module);
		}
	}

	public function faktor_kriteria($id_kriteria){
	   $this->load->model('Faktor');
	   $this->load->model('Kriteria');
	  //  if($this->input->post("tambah")){
   //          $faktor              = new Faktor();
   //          $faktor->nama_faktor = $this->input->post("nama_f");
   //          $faktor->bobot_faktor      = $this->input->post("bobot_f");
   //          $faktor->id_kriteria = $id_kriteria;
   //          $faktor->save();
   //          $this->flashmsg('Data added');
   //          redirect('kades/faktor_kriteria/'.$id_kriteria);
	  //   }
	  //   else if($this->input->post("perbarui")){
	  //   	$data  = [
   //             "nama_faktor" => $this->input->post('ubah_nama_f'),
   //             "bobot_faktor"       => $this->input->post('ubah_bobot_f')
	  //   	];
   //          Faktor::where('Id_faktor',$this->input->post('id_faktor'))->update($data);
   //          $this->flashmsg('Data updated');
   //          redirect('kades/faktor_kriteria/'.$id_kriteria);
	  //   }else if($this->input->post("hapus")){
   //          $id = $this->input->post("id_faktor");
   //          $faktor = Faktor::find($id);
   //          $faktor->delete();
   //          $this->flashmsg('Data deleted');
			// redirect('kades/faktor_kriteria/'.$id_kriteria);
	  //   } 
	   $this->data['kriteria'] = Kriteria::find($id_kriteria);
	   $this->data['faktor'] = Faktor::select("*")->where("id_kriteria",$id_kriteria)->get();
     $this->data['title']	= 'Faktor Kriteria';
	   $this->data['content']	= 'faktor_kriteria';
	   $this->template($this->data, $this->module);
	}

	// public function update_kriteria($id){
	// 	if($this->input->post("perbarui")){
	// 	   $this->load->model('Kriteria');
 //           $kriteria = Kriteria::find($id);
 //           $kriteria->nama_kriteria = $this->input->post("nama_k_baru");
 //           $kriteria->kondisi = $this->input->post("kondisi_k_baru");
 //           $kriteria->bobot_kriteria = $this->input->post("bobot_k_baru");
 //           $kriteria->save();
 //           $this->flashmsg('Data updated');
 //           redirect('kades/data_kriteria');
	// 	}
 //        $this->data["kriteria"] = Kriteria::find($id);
 //        $this->data['title']	= 'Perbarui Kriteria';
	//     $this->data['content']	= 'update_kriteria';
	//     $this->template($this->data, $this->module);
	// }


	// public function tambah_kriteria(){
	// 	if($this->input->post("tambah")){
	// 	   $this->load->model('Kriteria');
 //           $kriteria = new Kriteria();
 //           $kriteria->nama_kriteria = $this->POST('nama_k');
 //           $kriteria->bobot_kriteria = $this->POST('bobot_k');
 //           $kriteria->kondisi = $this->POST('kondisi');
 //           $res = $kriteria->save();
           
 //           $this->flashmsg('New data added');
	// 	   redirect('kades/data_kriteria');
	// 	}
 //        $this->data['title']	= 'Tambah Kriteria';
	//     $this->data['content']	= 'tambah_kriteria';
	//     $this->template($this->data, $this->module);  
	// }


	public function data_calon_penerima_bantuan()
	{ 
	$this->load->model('Calon');
		$this->load->model('Datacalon');
		$this->load->model('Kriteria');

		$this->data['kriteria']	= Kriteria::with('faktor')
									->get();

		$this->data['calon']	= Calon::with('datacalon', 'datacalon.kriteria', 'datacalon.faktor')
									->get();

		$this->data['title']	= 'Data Calon Penerima Bantuan';
		$this->data['content']	= 'data_calon_penerima_bantuan';
		$this->template($this->data, $this->module);
	}

	// public function ubah_data_calon_penerima_bantuan($id_calon){
	//    $this->load->model('Kriteria');
	//    if($this->input->post("perbarui_calon")){
 //          $this->load->model("Calon");
 //          $calon = Calon::find($id_calon);
 //          $calon->Nama = $this->input->post('nama');
 //          $res = $calon->save();
 //          if($res){
 //          	$this->load->model('Datacalon');
 //            $kriteria = Kriteria::get();
 //            foreach ($kriteria as $value) {
 //            	if(empty($this->input->post("id_".str_replace(' ','_',$value["nama_kriteria"])))){
 //                   $data_calon = new Datacalon();
 //                   $data_calon->id_calon = $id_calon;
 //                   $data_calon->id_kriteria = $this->input->post('id_kriteria_'.str_replace(' ','_',$value["nama_kriteria"]) );
 //                   $data_calon->id_faktor = $this->input->post("faktor_".str_replace(' ','_',$value["nama_kriteria"]) );
 //                   $data_calon->save();
 //            	}else{
 //                   $data_calon=Datacalon::find($this->input->post("id_".str_replace(' ','_',$value["nama_kriteria"]) ));
 //            	   $data_calon->id_faktor = $this->input->post("faktor_".str_replace(' ','_',$value["nama_kriteria"]) );
 //            	   $data_calon->save();
 //            	}
 //            }
 //            $this->flashmsg('Data updated');
 //            redirect('kades/data_calon_penerima_bantuan');
 //          }
	//    }
 //       $this->load->model('Datacalon');
 //       $this->load->model('Kriteria');
	//    $this->load->model('Faktor');
 //       $data_calon = new Datacalon();
 //       $this->data['calon'] = $data_calon->get_data_calon_by_id($id_calon);
 //       $this->data['kriteria'] = Kriteria::get();
	//    $this->data['faktor'] = Faktor::get();
	//    $this->data['title']	= 'Perbarui Data Calon Penerima Bantuan';
	//    $this->data['content']	= 'update_calon';
	//    $this->template($this->data, $this->module);	     
	// }

	// public function tambah_calon_penerima_bantuan(){
	//    $this->load->model('Kriteria');
	//    $this->load->model('Faktor');
	//    $this->data['kriteria'] = Kriteria::get();
	//    $this->data['faktor'] = Faktor::get();
	//    if($this->input->post('tambah')){
 //             $this->load->model('Calon');
 //             $calon = new Calon();
 //             $calon->Nama = $this->input->post('nama');
 //             $calon->save();
 //             $id_calon = $calon->selectRaw('MAX(id_calon) as id_calon')->get()[0]['id_calon'];
 //             if(isset($id_calon)){
 //                 foreach ($this->data['kriteria'] as $value) {
 //                  $this->load->model('Datacalon');
 //                 	$data_calon = new Datacalon();
 //                 	$data_calon->id_calon = $id_calon;
 //                 	$data_calon->id_kriteria = $this->input->post("id_".str_replace(' ','_',$value["nama_kriteria"]) );
 //                 	$data_calon->id_faktor = $this->input->post("faktor_".str_replace(' ','_',$value["nama_kriteria"]) );
 //                  if ($value["nama_kriteria"] == 'Penghasilan')
 //                  {
 //                    if ($data_calon->id_faktor > 1500000)
 //                    {
 //                      $data_calon->id_faktor = 31;
 //                    }
 //                    else if ($data_calon->id_faktor >= 1300001 && $data_calon->id_faktor <= 1500000)
 //                    {
 //                      $data_calon->id_faktor = 32;
 //                    }
 //                    else if ($data_calon->id_faktor >= 800000 && $data_calon->id_faktor <= 1300000)
 //                    {
 //                      $data_calon->id_faktor = 33;
 //                    }
 //                    else if ($data_calon->id_faktor >= 300000 && $data_calon->id_faktor <= 800000)
 //                    {
 //                      $data_calon->id_faktor = 34;
 //                    }
 //                    else if ($data_calon->id_faktor < 300000)
 //                    {
 //                      $data_calon->id_faktor = 35;
 //                    }
 //                  }
 //                  if ($value["nama_kriteria"] == 'Jumlah Tanggungan')
 //                  {
 //                    if ($data_calon->id_faktor == 1)
 //                    {
 //                      $data_calon->id_faktor = 38;
 //                    }
 //                    else if ($data_calon->id_faktor > 1 && $data_calon->id_faktor <= 2)
 //                    {
 //                      $data_calon->id_faktor = 37;
 //                    }
 //                    else if ($data_calon->id_faktor >= 3 && $data_calon->id_faktor <= 5)
 //                    {
 //                      $data_calon->id_faktor = 36;
 //                    }
 //                    else if ($data_calon->id_faktor >= 6 && $data_calon->id_faktor <= 8)
 //                    {
 //                      $data_calon->id_faktor = 30;
 //                    }
 //                    else if ($data_calon->id_faktor > 8)
 //                    {
 //                      $data_calon->id_faktor = 29;
 //                    }
 //                  }
 //                 	$data_calon->save();
                  
 //                 }
 //              $this->flashmsg('Data added');
 //              redirect('kades/data_calon_penerima_bantuan');
 //             }
	//    }
	//    $this->data['title']	= 'Tambah Data Calon Penerima Bantuan';
	//    $this->data['content']	= 'tambah_calon';
	//    $this->template($this->data, $this->module);	
	// }

	public function perangkingan(){
	   $this->load->model('Datacalon');
	   $data_calon = new Datacalon();
	 
       
       if($this->input->post('set')){
            $data = $data_calon->get_data_calon();
            
            $rank_manual = [];
            foreach ($data as $value) {
            	$this->data["rank_manual"][$this->input->post($value['id_calon'])] = $value['nama'];
            }
            ksort($this->data['rank_manual']);
            $this->data['rank_manual'] = array_values($this->data['rank_manual']);

            if($this->input->post('mfep')){
               $this->load->library("MFEP");
               $mfep = $this->mfep;
               $this->data["mfep"] = $mfep->do_mfep($data);
               $this->data["akurasi_mfep"] =$this->getAkurasi($this->data['rank_manual'],$this->data['mfep']);
            }
            if($this->input->post('wp')){
              $this->load->library('WeightedProduct');
              $wp = $this->weightedproduct;
              $this->data['wp'] = $wp->do_wp($data);
              $this->data["akurasi_wp"] =$this->getAkurasi($this->data['rank_manual'],$this->data['wp']);
            }
            $this->data['do_rank'] = true;
       }

       $this->data['data_calon'] = $data_calon->get_data_calon();
	   $this->data['title']	= 'Perangkingan';
	   $this->data['content']	= 'perangkingan';
	   $this->template($this->data, $this->module);	
	}

	private function getAkurasi($rangking_kades,$rangking_spk){
        $jumlah_data = sizeof($rangking_kades);
        $true = 0;
        for($i=0;$i<sizeof($rangking_kades);$i++){
	    	if($rangking_kades[$i] == $rangking_spk[$i]['nama']){
              $true++;
	    	}
        }
        return ($true/$jumlah_data)*100;
	}
}