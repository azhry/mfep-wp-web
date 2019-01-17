<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'admin';
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function data_calon_penerima_bantuan()
	{
		if ($this->POST('import'))
		{
			$this->upload('data', 'data', 'file', '.xlsx');

			require_once APPPATH . 'libraries/SpreadsheetHandler.php';
			$excel = new SpreadsheetHandler();
			$sheet = $excel->read(FCPATH . 'data/data.xlsx');
			$excel->saveToDB($sheet);
			
			$this->flashmsg('New data imported');
			redirect('admin/data-calon-penerima-bantuan');
		}

		$this->load->model('Warga');
		if ($this->POST('hapus'))
		{
			$warga = Warga::find($this->uri->segment(3));
			$warga->delete();
			$this->flashmsg('Data deleted');
			redirect('admin/data-calon-penerima-bantuan');
		}

		if ($this->POST('tambah'))
		{
			$warga = new Warga();
			$warga->nama 				= $this->POST('nama');
			$warga->pekerjaan 			= $this->POST('pekerjaan');
			$warga->penghasilan 		= $this->POST('penghasilan');
			$warga->jumlah_tanggungan 	= $this->POST('jumlah_tanggungan');
			$warga->kondisi_rumah 		= $this->POST('kondisi_rumah');
			$warga->kepemilikan_rumah 	= $this->POST('kepemilikan_rumah');
			$warga->jaringan_listrik 	= $this->POST('jaringan_listrik');
			$warga->jenis_rumah 		= $this->POST('jenis_rumah');
			$warga->save();

			$this->flashmsg('New data added');
			redirect('admin/data-calon-penerima-bantuan');
		}

		$this->data['warga']	= Warga::get();
		$this->data['title']	= 'Data Calon Penerima Bantuan';
		$this->data['content']	= 'data_calon_penerima_bantuan';
		$this->template($this->data, $this->module);
	}
}