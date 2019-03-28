<?php 

class WeightedProduct
{
	private $nbf = [];
	private $nbe = [];

	public function do_wp($data)
	{
		$this->calculate_nbf($data);
		$this->calculate_nbe($data);
		$this->calculate_tbe();
		$this->calculate_preference();
		$this->sort_preference();
		return $this->nbe;
	}

	private function calculate_nbf($data)
	{
		$sum 		= 0;
		$kriteria 	= $data[0]['kriteria']['bobot'];
		$sum 		= array_sum($kriteria);
		foreach ($kriteria as $value) 
		{
			array_push($this->nbf, $value / $sum);
		}
	}

	private function calculate_nbe($data)
	{
		foreach ($data as $value) 
		{
			$calon 			= [];
			$val_nbe 		= [];
			$calon["nama"] 	= $value["nama"];  
			for ($i = 0; $i < sizeof($value["kriteria"]["nama"]); $i++) 
			{
				switch ($value['kriteria']['kondisi'][$i])
				{
					case 'Cost(-)':
						// echo $value['faktor']['bobot'][$i] . '^' . (-1 * $this->nbf[$i]) . ' = ' . pow($value["faktor"]["bobot"][$i], -1 * $this->nbf[$i]) . '<br>';
						array_push($val_nbe, pow($value["faktor"]["bobot"][$i], -1 * $this->nbf[$i]));
						break;

					case 'Benefit(+)':
						// echo $value['faktor']['bobot'][$i] . '^' . $this->nbf[$i] . ' = ' . pow($value["faktor"]["bobot"][$i], $this->nbf[$i]) . '<br>';
						array_push($val_nbe, pow($value["faktor"]["bobot"][$i], $this->nbf[$i]));
						break;
				}
				
			}
			$calon["nbe"] 	= $val_nbe;
			array_push($this->nbe, $calon);
		}
	}

	private function calculate_tbe()
	{
        for ($i = 0; $i < sizeof($this->nbe); $i++) 
        { 
        	$tbe = 1;
        	foreach ($this->nbe[$i]['nbe'] as $nbe)
        	{
        		$tbe *= $nbe;
        	}
           $this->nbe[$i]["tbe"] = $tbe;
        }
	}

	private function calculate_preference()
	{
		$sum = array_sum(array_column($this->nbe, 'tbe'));
		for ($i = 0; $i < sizeof($this->nbe); $i++) 
        { 
           $this->nbe[$i]["preference"] = $this->nbe[$i]['tbe'] / $sum;
        }

	}

	private function sort_preference()
	{
		$sort = [];
		foreach ($this->nbe as $index => $value) 
		{
			$sort[$index] = $value["preference"];
		}

		array_multisort($sort, SORT_DESC, $this->nbe);
	}
}