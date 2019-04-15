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

	public function ganti_password()
	{
		if ($this->POST('submit'))
		{
			$this->load->model('Pengguna');
			$oldPassword = $this->POST('old_password');
			$pengguna = Pengguna::where('username', $this->data['username'])
								->where('password', md5($oldPassword))
								->first();

			if (!isset($pengguna))
			{
				$this->flashmsg('Password lama yang anda masukkan salah', 'danger');
				redirect('kades/ganti-password');
			}

			$newPassword 	= $this->POST('new_password');
			$newRpassword	= $this->POST('new_rpassword');
			if ($newPassword != $newRpassword)
			{
				$this->flashmsg('Password baru yang anda masukkan tidak sama', 'danger');
				redirect('kades/ganti-password');
			}

			$pengguna->password = md5($newPassword);
			$pengguna->save();

			$this->flashmsg('Password berhasil diubah');
			redirect('kades/ganti-password');
		}

		$this->data['title']	= 'Ganti Password';
		$this->data['content']	= 'ganti_password';
		$this->template($this->data, $this->module);
	}

	public function data_kriteria(){
		$this->load->model('Kriteria');
		$kriteria = new Kriteria();
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
	   $this->data['kriteria'] = Kriteria::find($id_kriteria);
	   $this->data['faktor'] = Faktor::select("*")->where("id_kriteria",$id_kriteria)->get();
     $this->data['title']	= 'Faktor Kriteria';
	   $this->data['content']	= 'faktor_kriteria';
	   $this->template($this->data, $this->module);
	}

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

	public function perangkingan(){
	   $this->load->model('Datacalon');
	   $data_calon = new Datacalon();
	   //  22 RANGKING KADES MANUAL
	   $rangking_kades = [
	   	    "Husin p",
			"Siti noriyam",
			"Yudin",
			"Rusmalina",
			"Muhammad eban",
			"Bahroni",
			"Ahmad saihoni",
			"Ahmad sobki",
			"Beben ta cesha",
			"Ayopin jansens",
			"Taklano",
			"Mad nali",
			"Hasbullah",
			"Surimna",
			"Hoirul",
			"Amer",
			"Raga",
			"Nawaludin",
			"Raisen",
			"Ahmad rifani",
			"Mat suhai",
			"Muhammad kumpi",
	   ];

	   $data = $data_calon->get_data_calon();
	   $this->data["akurasi_mfep"] = 0;
	   $this->data["akurasi_wp"]   = 0;
       if($this->input->post('set')){
            if($this->input->post('mfep')){
               $this->load->library("MFEP");
               $mfep = $this->mfep;
               $this->data["mfep"] = $mfep->do_mfep($data);
               $this->data["nbf_mfep"]  = $mfep->getNBF();
               $this->data["nbe_mfep"]  = $mfep->getNBE();
               $this->data["akurasi_mfep"] =$this->getAkurasi($rangking_kades,$this->data['mfep'],sizeof($data));
            }
            if($this->input->post('wp')){
              $this->load->library('WeightedProduct');
              $wp = $this->weightedproduct;
              $this->data['wp'] = $wp->calculateWp($data);
              // $this->dump($this->data['wp']);
              // exit;
              $this->data['normalized_weights']	= $wp->getNormalizedWeights();
              $this->data['weights']			= $wp->getWeights();
              $this->data["akurasi_wp"] =$this->getAkurasi($rangking_kades,$this->data['wp'],sizeof($data));
            }
            $this->data['do_rank'] = true;
       }

       $this->data['data_calon'] = $rangking_kades;
	   $this->data['title']	= 'Perangkingan';
	   $this->data['content']	= 'perangkingan';
	   $this->data['data_size']	= sizeof($data);
	   $this->template($this->data, $this->module);	
	}

	private function getAkurasi($rangking_kades,$rangking_spk,$data_size){
        $jumlah_data = sizeof($rangking_kades);
        $same = 0;
        for($i=0;$i<$jumlah_data;$i++){
	    	for($j = 0;$j<$jumlah_data;$j++){
                if($rangking_kades[$i] == $rangking_spk[$j]['nama']){
                    $same++;
                    break;
                }
	    	}
        }
        return $same;
	}
}