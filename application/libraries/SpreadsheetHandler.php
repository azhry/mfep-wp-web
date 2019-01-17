<?php 

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class SpreadsheetHandler
{
	private $reader;
	private $CI;

	public function __construct()
	{
		$this->reader = new Xlsx(); 
		$this->CI =& get_instance();
	}

	public function read($filepath)
	{
		$spreadsheet 	= $this->reader->load($filepath);
		$sheet 			= $spreadsheet->getActiveSheet();
		return $sheet;
	}

	public function saveToDB($sheet)
	{
		$data 		= [];
		$columns 	= [];
		foreach ($sheet->getRowIterator() as $i => $row)
		{
			if ($i == 0)
			{
				continue;
			}

			$cellIterator 	= $row->getCellIterator();
			$record 		= [];
			$j = 0;
			foreach ($cellIterator as $cell)
			{
				if ($i == 1)
				{
					$columns []= $cell->getValue();
				}
				else
				{
					$record[$columns[$j]] = $cell->getValue();
				}
				$j++;
			}

			unset($record['No']);
			if ($i > 1)
			{
				$data []= $record;
			}
		}

		$this->CI->load->model('Warga');
		Warga::insert($data);
	}
}