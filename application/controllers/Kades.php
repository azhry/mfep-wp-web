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
		if($this->input->post("hapus")){
		   $id = $this->input->post("id");
           $warga = Kriteria::find($id);
		   $warga->delete();
		   $this->flashmsg('Data deleted');
           redirect('kades/data_kriteria');
		}else if($this->input->post("ubah")){
		   $id = $this->input->post("id");
           $this->update_kriteria($id);
		}else if($this->input->post("faktor")){
           $id = $this->input->post("id");
           $this->faktor_kriteria($id);
		}else{
           $this->data['kriteria'] = $kriteria::get();
           $this->data['title']	= 'Kriteria';
	       $this->data['content']	= 'data_kriteria';
	       $this->template($this->data, $this->module);
		}
	}

	public function faktor_kriteria($id_kriteria){
	   $this->load->model('Faktor');
	   $this->load->model('Kriteria');
	   if($this->input->post("tambah")){
            $faktor              = new Faktor();
            $faktor->nama_faktor = $this->input->post("nama_f");
            $faktor->bobot_faktor      = $this->input->post("bobot_f");
            $faktor->id_kriteria = $id_kriteria;
            $faktor->save();
            $this->flashmsg('Data added');
            redirect('kades/faktor_kriteria/'.$id_kriteria);
	    }
	    else if($this->input->post("perbarui")){
	    	$data  = [
               "nama_faktor" => $this->input->post('ubah_nama_f'),
               "bobot_faktor"       => $this->input->post('ubah_bobot_f')
	    	];
            Faktor::where('Id_faktor',$this->input->post('id_faktor'))->update($data);
            $this->flashmsg('Data updated');
            redirect('kades/faktor_kriteria/'.$id_kriteria);
	    }else if($this->input->post("hapus")){
            $id = $this->input->post("id_faktor");
            $faktor = Faktor::find($id);
            $faktor->delete();
            $this->flashmsg('Data deleted');
			redirect('kades/faktor_kriteria/'.$id_kriteria);
	    } 
	   $this->data['kriteria'] = Kriteria::find($id_kriteria);
	   $this->data['faktor'] = Faktor::select("*")->where("id_kriteria",$id_kriteria)->get();
       $this->data['title']	= 'Faktor Kriteria';
	   $this->data['content']	= 'faktor_kriteria';
	   $this->template($this->data, $this->module);
	}

	public function update_kriteria($id){
		if($this->input->post("perbarui")){
		   $this->load->model('Kriteria');
           $kriteria = Kriteria::find($id);
           $kriteria->nama_kriteria = $this->input->post("nama_k_baru");
           $kriteria->bobot_kriteria = $this->input->post("bobot_k_baru");
           $kriteria->save();
           $this->flashmsg('Data updated');
           redirect('kades/data_kriteria');
		}
        $this->data["kriteria"] = Kriteria::find($id);
        $this->data['title']	= 'Perbarui Kriteria';
	    $this->data['content']	= 'update_kriteria';
	    $this->template($this->data, $this->module);
	}


	public function tambah_kriteria(){
		if($this->input->post("tambah")){
		   $this->load->model('Kriteria');
           $kriteria = new Kriteria();
           $kriteria->nama_kriteria = $this->POST('nama_k');
           $kriteria->bobot_kriteria = $this->POST('bobot_k');
           $kriteria->tipe = $this->POST('tipe');
           $res = $kriteria->save();
           
           $this->flashmsg('New data added');
		   redirect('kades/data_kriteria');
		}
        $this->data['title']	= 'Tambah Kriteria';
	    $this->data['content']	= 'tambah_kriteria';
	    $this->template($this->data, $this->module);  
	}


	public function data_calon_penerima_bantuan()
	{ 
		if($this->input->post('hapus')){
            $this->load->model("Calon");
            $id = $this->input->post("id_calon");
            $calon = Calon::find($id);
            $calon->delete();
            
            $this->flashmsg('Data deleted');
			redirect('kades/data_calon_penerima_bantuan/');
		}else if($this->input->post('ubah')){
            $this->ubah_data_calon_penerima_bantuan($this->input->post('id_calon'));
		}else{
            $this->load->model("Kriteria");
		    $this->load->model("Datacalon");
		    $data_calon = new Datacalon();
		    $this->data['calon'] = $data_calon->get_data_calon();
			$this->data['kriteria'] = Kriteria::orderBy('nama_kriteria','ASC')->get(); //order_by
			$this->data['title']	= 'Data Calon Penerima Bantuan';
			$this->data['content']	= 'data_calon_penerima_bantuan';
			$this->template($this->data, $this->module);
		}
	}

	public function ubah_data_calon_penerima_bantuan($id_calon){
	   $this->load->model('Kriteria');
	   if($this->input->post("perbarui_calon")){
          $this->load->model("Calon");
          $calon = Calon::find($id_calon);
          $calon->Nama = $this->input->post('nama');
          $res = $calon->save();
          if($res){
          	$this->load->model('Datacalon');
            $kriteria = Kriteria::get();
            foreach ($kriteria as $value) {
            	if(empty($this->input->post("id_".$value["nama_kriteria"]))){
                   $data_calon = new Datacalon();
                   $data_calon->id_calon = $id_calon;
                   $data_calon->id_kriteria = $this->input->post('id_kriteria_'.$value['nama_kriteria']);
                   $data_calon->id_faktor = $this->input->post("faktor_".$value['nama_kriteria']);
                   $data_calon->save();
            	}else{
                   $data_calon=Datacalon::find($this->input->post("id_".$value["nama_kriteria"]));
            	   $data_calon->id_faktor = $this->input->post("faktor_".$value['nama_kriteria']);
            	   $data_calon->save();
            	}
            }
            $this->flashmsg('Data updated');
            redirect('kades/data_calon_penerima_bantuan');
          }
	   }
       $this->load->model('Datacalon');
       $this->load->model('Kriteria');
	   $this->load->model('Faktor');
       $data_calon = new Datacalon();
       $this->data['calon'] = $data_calon->get_data_calon_by_id($id_calon);
       $this->data['kriteria'] = Kriteria::get();
	   $this->data['faktor'] = Faktor::get();
	   $this->data['title']	= 'Perbarui Data Calon Penerima Bantuan';
	   $this->data['content']	= 'update_calon';
	   $this->template($this->data, $this->module);	     
	}

	public function tambah_calon_penerima_bantuan(){
	   $this->load->model('Kriteria');
	   $this->load->model('Faktor');
	   $this->data['kriteria'] = Kriteria::get();
	   $this->data['faktor'] = Faktor::get();
	   if($this->input->post('tambah')){
             $this->load->model('Calon');
             $calon = new Calon();
             $calon->Nama = $this->input->post('nama');
             $calon->save();
             $id_calon = $calon->selectRaw('MAX(id_calon) as id_calon')->get()[0]['id_calon'];
             if(isset($id_calon)){
             	$this->load->model('Datacalon');
                 foreach ($this->data['kriteria'] as $value) {
                 	$data_calon = new Datacalon();
                 	$data_calon->id_calon = $id_calon;
                 	$data_calon->id_kriteria = $this->input->post("id_".$value['nama_kriteria']);
                 	$data_calon->id_faktor = $this->input->post("faktor_".$value['nama_kriteria']);
                 	$data_calon->save();
                 }
              $this->flashmsg('Data added');
              redirect('kades/data_calon_penerima_bantuan');
             }
	   }
	   $this->data['title']	= 'Tambah Data Calon Penerima Bantuan';
	   $this->data['content']	= 'tambah_calon';
	   $this->template($this->data, $this->module);	
	}

	public function perangkingan(){
	   if($this->input->post('perangkingan')){
          $this->load->model('Datacalon');
	   	  $data_calon = new Datacalon();
	   	  $data = $data_calon->get_data_calon();
          
          // CARA AKSES DATA
          foreach ($data as $value) {
          	echo "Nama : ".$value['nama']."<br>";
            for ($i=0; $i < sizeof($value["kriteria"]["nama"]); $i++) { 
            	echo "<b>Nama Kriteria  </b>: ".$value["kriteria"]["nama"][$i]." ";
            	echo " <b>Bobot Kriteria </b>: ".$value["kriteria"]["bobot"][$i]."<br>";
            	echo "<i>Nama Faktor    </i>: ".$value["faktor"]["nama"][$i]." ";
            	echo "<i>  Bobot Faktor   </i>: ".$value["faktor"]["bobot"][$i]."<br>";
            }
            echo "<br>";

          }
          // CARA AKSES DATA

          if($this->input->post('mfep')){
            echo "mfep here";   
          }
          if($this->input->post('wp')){
            echo "wp here";
          }
          exit();
	   }
	   $this->data['title']	= 'Perangkingan';
	   $this->data['content']	= 'perangkingan';
	   $this->template($this->data, $this->module);	
	}
}