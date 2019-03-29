<?php 

class WeightedProduct
{
	// private $nbf = [];
	// private $nbe = [];
	private $alternativeValues = [];
	private $normalizedWeights = [];

	private function normalizeWeight($data)
	{
		$sum 		= 0;
		$kriteria 	= $data[0]['kriteria']['bobot'];
		$sum 		= array_sum($kriteria);
		foreach ($kriteria as $value) 
		{
			array_push($this->normalizedWeights, $value / $sum);
		}
	}

	private function poweringValue($data)
	{
		foreach ($data as $value) 
		{
			$calon 			= [];
			$poweredVal 	= [];
			$calon["nama"] 	= $value["nama"];  
			for ($i = 0; $i < sizeof($value["kriteria"]["nama"]); $i++) 
			{
				switch ($value['kriteria']['kondisi'][$i])
				{
					case 'Cost(-)':
						array_push($poweredVal, pow($value["faktor"]["bobot"][$i], -1 * $this->normalizedWeights[$i]));
						break;

					case 'Benefit(+)':
						array_push($poweredVal, pow($value["faktor"]["bobot"][$i], $this->normalizedWeights[$i]));
						break;
				}
				
			}
			$calon["alternative_value"] = $poweredVal;
			array_push($this->alternativeValues, $calon);
		}
	}

	private function multiplyValues()
	{
        for ($i = 0; $i < sizeof($this->alternativeValues); $i++) 
        { 
        	$vect = 1;
        	foreach ($this->alternativeValues[$i]['alternative_value'] as $alternative_value)
        	{
        		$vect *= $alternative_value;
        	}
           $this->alternativeValues[$i]["vect"] = $vect;
        }
	}

	private function calculatePreference()
	{
		$sum = array_sum(array_column($this->alternativeValues, 'vect'));
		for ($i = 0; $i < sizeof($this->alternativeValues); $i++) 
        { 
           $this->alternativeValues[$i]["preference"] = $this->alternativeValues[$i]['vect'] / $sum;
        }

	}

	private function sortPreference()
	{
		$sort = [];
		foreach ($this->alternativeValues as $index => $value) 
		{
			$sort[$index] = $value["preference"];
		}

		array_multisort($sort, SORT_DESC, $this->alternativeValues);
	}

	public function calculateWp($data)
	{
		$this->normalizeWeight($data);
		$this->poweringValue($data);
		$this->multiplyValues();
		$this->calculatePreference();
		$this->sortPreference();
		return $this->alternativeValues;
	}


	// public function do_wp($data)
	// {
	// 	$this->calculate_nbf($data);
	// 	$this->calculate_nbe($data);
	// 	$this->calculate_tbe();
	// 	$this->calculatePreference();
	// 	$this->sortPreference();
	// 	return $this->nbe;
	// }

	// private function calculate_nbf($data)
	// {
	// 	$sum 		= 0;
	// 	$kriteria 	= $data[0]['kriteria']['bobot'];
	// 	$sum 		= array_sum($kriteria);
	// 	foreach ($kriteria as $value) 
	// 	{
	// 		array_push($this->nbf, $value / $sum);
	// 	}
	// }

	// private function calculate_nbe($data)
	// {
	// 	foreach ($data as $value) 
	// 	{
	// 		$calon 			= [];
	// 		$val_nbe 		= [];
	// 		$calon["nama"] 	= $value["nama"];  
	// 		for ($i = 0; $i < sizeof($value["kriteria"]["nama"]); $i++) 
	// 		{
	// 			switch ($value['kriteria']['kondisi'][$i])
	// 			{
	// 				case 'Cost(-)':
	// 					array_push($val_nbe, pow($value["faktor"]["bobot"][$i], -1 * $this->nbf[$i]));
	// 					break;

	// 				case 'Benefit(+)':
	// 					array_push($val_nbe, pow($value["faktor"]["bobot"][$i], $this->nbf[$i]));
	// 					break;
	// 			}
				
	// 		}
	// 		$calon["nbe"] 	= $val_nbe;
	// 		array_push($this->nbe, $calon);
	// 	}
	// }

	// private function calculate_tbe()
	// {
 //        for ($i = 0; $i < sizeof($this->nbe); $i++) 
 //        { 
 //        	$tbe = 1;
 //        	foreach ($this->nbe[$i]['nbe'] as $nbe)
 //        	{
 //        		$tbe *= $nbe;
 //        	}
 //           $this->nbe[$i]["tbe"] = $tbe;
 //        }
	// }

	
}