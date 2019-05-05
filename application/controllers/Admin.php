<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'admin';
		$this->data['id_role']  = $this->session->userdata('id_role');
	    if (!isset($this->data['id_role']) or $this->data['id_role'] != 1)
	    {
	      $this->session->sess_destroy();
	      redirect('login');
	    }
	    $this->data['id_pengguna']  = $this->session->userdata('id_pengguna');
	    $this->data['username']     = $this->session->userdata('username');
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function data_kades()
	{
		$this->load->model('Pengguna');
		$this->data['kades']	= Pengguna::where('id_role', 2)->get();
		$this->data['title']	= 'Data Kepala Desa';
		$this->data['content']	= 'data_kades';
		$this->template($this->data, $this->module);
	}

	public function ganti_password_kades()
	{
		$this->data['id_pengguna'] = $this->uri->segment(3);
		$this->check_allowance(!isset($this->data['id_pengguna']));

		$this->load->model('Pengguna');
		$this->data['kades']	= Pengguna::find($this->data['id_pengguna']);
		$this->check_allowance(!isset($this->data['kades']), ['Data kepala desa dengan ID ' . $this->data['id_pengguna'] . ' tidak ditemukan', 'danger']);

		if ($this->POST('submit'))
		{
			$oldPassword 		= $this->POST('old_password');
			$checkOldPassword 	= Pengguna::where('id_pengguna', $this->data['kades']->id_pengguna)
									->where('password', md5($oldPassword))
									->first();

			if (isset($checkOldPassword))
			{
				$newPassword 	= $this->POST('new_password');
				$rnewPassword	= $this->POST('rnew_password');

				if ($newPassword === $rnewPassword)
				{
					$checkOldPassword->password = md5($newPassword);
					$checkOldPassword->save();
					$this->flashmsg('Password berhasil diubah');
				}
				else
				{
					$this->flashmsg('Password Baru harus sama dengan kolom Konfirmasi Password Baru', 'danger');
				}
			}
			else
			{
				$this->flashmsg('Password lama yang anda masukkan salah', 'danger');
			}

			redirect('admin/ganti-password-kades/' . $this->data['id_pengguna']);
		}

		$this->data['title']	= 'Ganti Password Kepala Desa';
		$this->data['content']	= 'ganti_password_kades';
		$this->template($this->data, $this->module);
	}

	public function ganti_password()
	{
		if ($this->POST('submit'))
		{
			$oldPassword = $this->POST('old_password');
			$this->load->model('Pengguna');

			$checkOldPassword = Pengguna::where('id_pengguna', $this->data['id_pengguna'])
									->where('password', md5($oldPassword))
									->first();

			if (isset($checkOldPassword))
			{
				$newPassword 	= $this->POST('new_password');
				$rnewPassword	= $this->POST('rnew_password');

				if ($newPassword === $rnewPassword)
				{
					$checkOldPassword->password = md5($newPassword);
					$checkOldPassword->save();
					$this->flashmsg('Password berhasil diubah');
				}
				else
				{
					$this->flashmsg('Password Baru harus sama dengan kolom Konfirmasi Password Baru', 'danger');
				}
			}
			else
			{
				$this->flashmsg('Password lama yang anda masukkan salah', 'danger');
			}

			redirect('admin/ganti-password');
		}

		$this->data['title']	= 'Ganti Password';
		$this->data['content']	= 'ganti_password';
		$this->template($this->data, $this->module);
	}

	public function edit_data_calon()
	{
		$this->data['id_calon']	= $this->GET('id');
		$this->check_allowance(!isset($this->data['id_calon']));

		$this->load->model('Calon');
		$this->data['calon'] = Calon::with('datacalon')->find($this->data['id_calon']);
		$this->check_allowance(!isset($this->data['calon']), ['Data tidak ditemukan', 'danger']);

		$this->load->helper('array');

		$this->load->model('Kriteria');
		$this->data['kriteria'] = Kriteria::with('faktor')
									->get();
		
		if ($this->POST('submit'))
		{
			$this->data['calon']->Nama = $this->POST('nama');
			$this->data['calon']->save();

			$datacalon = [];
			foreach ($this->data['kriteria'] as $kriteria)
			{
				$name = str_replace(' ', '_', strtolower($kriteria->nama_kriteria));
				$id_faktor = $this->POST($name);
				$real_value = Faktor::find($id_faktor)->nama_faktor;
				
				if ($kriteria->nama_kriteria == 'Penghasilan')
				{
					$real_value = $id_faktor;
					var_dump("Penghasilan ".$real_value);
					if ($id_faktor > 1500000)
					{
						$id_faktor = 31;
					}
					else if ($id_faktor >= 1300001 && $id_faktor <= 1500000)
					{
						$id_faktor = 32;
					}
					else if ($id_faktor > 800000 && $id_faktor <= 1300000)
					{
						$id_faktor = 33;
					}
					else if ($id_faktor >= 300000 && $id_faktor <= 800000)
					{
						$id_faktor = 34;
					}
					else if ($id_faktor < 300000)
					{
						$id_faktor = 35;
					}
				}
				if ($kriteria->nama_kriteria == 'Jumlah Tanggungan')
				{
					$real_value = $id_faktor;
					if ($id_faktor == 1)
					{
						$id_faktor = 38;
					}
					else if ($id_faktor > 1 && $id_faktor <= 2)
					{
						$id_faktor = 37;
					}
					else if ($id_faktor >= 3 && $id_faktor <= 5)
					{
						$id_faktor = 36;
					}
					else if ($id_faktor >= 6 && $id_faktor <= 8)
					{
						$id_faktor = 30;
					}
					else if ($id_faktor > 8)
					{
						$id_faktor = 29;
					}
				}

				$datacalon []= [
					'id_calon'		=> $this->data['calon']->id_calon,
					'id_kriteria'	=> $kriteria->id_kriteria,
					'id_faktor'		=> $id_faktor,
					'real_value'    => $real_value
				];
			}

			Datacalon::where('id_calon', $this->data['id_calon'])->delete();
			Datacalon::insert($datacalon);
			$this->flashmsg('Data berhasil diperbarui');
			redirect('admin/edit-data-calon?id=' . $this->data['id_calon']);
		}

		$this->data['title']	= 'Edit Data Calon';
		$this->data['content']	= 'edit_data_calon';
		$this->template($this->data, $this->module);
	}

	public function data_calon_penerima_bantuan2()
	{
		$this->load->model('Calon');
		$this->load->model('Datacalon');
		$this->load->model('Kriteria');

		$this->data['kriteria']	= Kriteria::with('faktor')
									->get();

		if ($this->POST('tambah'))
		{
			$calon       = new Calon();
			$faktor      = new Faktor();
			$calon->Nama = $this->POST('nama');
			$calon->save();

			$datacalon = [];
			foreach ($this->data['kriteria'] as $kriteria)
			{
				$name = str_replace(' ', '_', strtolower($kriteria->nama_kriteria));
				$id_faktor = $this->POST($name);
				$real_value = Faktor::find($id_faktor)->nama_faktor;
				
				if ($kriteria->nama_kriteria == 'Penghasilan')
				{
					$real_value = $id_faktor;
					if ($id_faktor > 1500000)
					{
						$id_faktor = 31;
					}
					else if ($id_faktor >= 1300001 && $id_faktor <= 1500000)
					{
						$id_faktor = 32;
					}
					else if ($id_faktor >= 800001 && $id_faktor <= 1300000)
					{
						$id_faktor = 33;
					}
					else if ($id_faktor >= 300000 && $id_faktor <= 800000)
					{
						$id_faktor = 34;
					}
					else if ($id_faktor < 300000)
					{
						$id_faktor = 35;
					}
				}
				if ($kriteria->nama_kriteria == 'Jumlah Tanggungan')
				{
					$real_value = $id_faktor;
					if ($id_faktor == 0)
					{
						$id_faktor = 38;
					}
					else if ($id_faktor >= 1 && $id_faktor <= 2)
					{
						$id_faktor = 37;
					}
					else if ($id_faktor >= 3 && $id_faktor <= 5)
					{
						$id_faktor = 36;
					}
					else if ($id_faktor >= 6 && $id_faktor <= 8)
					{
						$id_faktor = 30;
					}
					else if ($id_faktor > 8)
					{
						$id_faktor = 29;
					}
				}

				$datacalon []= [
					'id_calon'		=> $calon->id_calon,
					'id_kriteria'	=> $kriteria->id_kriteria,
					'id_faktor'		=> $id_faktor,
					'real_value'    => $real_value
				];
			}

			Datacalon::insert($datacalon);
			$this->flashmsg('New data added');
			redirect('admin/data-calon-penerima-bantuan2');
		}

		if ($this->POST('hapus'))
		{
			$calon = Calon::find($this->uri->segment(3));
			$calon->delete();
			$this->flashmsg('Data deleted');
			redirect('admin/data-calon-penerima-bantuan2');
		}

		$this->data['calon']	= Calon::with('datacalon', 'datacalon.kriteria', 'datacalon.faktor')
									->get();

		$this->data['title']	= 'Data Calon Penerima Bantuan';
		$this->data['content']	= 'data_calon_penerima_bantuan2';
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
           redirect('admin/data_kriteria');
		}else if($this->input->post("ubah")){
		   $id = $this->input->post("id");
           $this->update_kriteria($id);
		}else if($this->input->post("faktor")){
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
	   if($this->input->post("tambah")){
            $faktor              = new Faktor();
            $faktor->nama_faktor = $this->input->post("nama_f");
            $faktor->bobot_faktor      = $this->input->post("bobot_f");
            $faktor->id_kriteria = $id_kriteria;
            $faktor->save();
            $this->flashmsg('Data added');
            redirect('admin/faktor_kriteria/'.$id_kriteria);
	    }
	    else if($this->input->post("perbarui")){
	    	$data  = [
               "nama_faktor" => $this->input->post('ubah_nama_f'),
               "bobot_faktor"       => $this->input->post('ubah_bobot_f')
	    	];
            Faktor::where('Id_faktor',$this->input->post('id_faktor'))->update($data);
            $this->flashmsg('Data updated');
            redirect('admin/faktor_kriteria/'.$id_kriteria);
	    }else if($this->input->post("hapus")){
            $id = $this->input->post("id_faktor");
            $faktor = Faktor::find($id);
            $faktor->delete();
            $this->flashmsg('Data deleted');
			redirect('admin/faktor_kriteria/'.$id_kriteria);
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
           $kriteria->kondisi = $this->input->post("kondisi_k_baru");
           $kriteria->bobot_kriteria = $this->input->post("bobot_k_baru");
           $kriteria->save();
           $this->flashmsg('Data updated');
           redirect('admin/data_kriteria');
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
           $kriteria->kondisi = $this->POST('kondisi');
           $res = $kriteria->save();
           
           $this->flashmsg('New data added');
		   redirect('admin/data_kriteria');
		}
        $this->data['title']	= 'Tambah Kriteria';
	    $this->data['content']	= 'tambah_kriteria';
	    $this->template($this->data, $this->module);  
	}

	public function perangkingan(){
	   if($this->input->post('perangkingan')){
          $this->load->model('Datacalon');
	   	    $data_calon = new Datacalon();
	   	    $data = $data_calon->get_data_calon();
          if($this->input->post('mfep')){
             $this->load->library("MFEP");
             $mfep = $this->mfep;
             $this->data["mfep"] = $mfep->do_mfep($data);
          }
          if($this->input->post('wp')){
            $this->load->library('WeightedProduct');
            $wp = $this->weightedproduct;
            $this->data['wp'] = $wp->do_wp($data);
          }
	   }
	   $this->data['title']	= 'Perangkingan';
	   $this->data['content']	= 'perangkingan';
	   $this->template($this->data, $this->module);	
	}

	
}