<?php 

class WeightedProduct
{
	private $alternativeValues = [];
	private $normalizedWeights = [];
	private $weights = [];

	private function normalizeWeight($data)
	{
		$sum 		= 0;
		$kriteria 	= $data[0]['kriteria']['bobot'];
		$label = $data[0]['kriteria']['nama'];
		$sum 		= array_sum($kriteria);
		foreach ($kriteria as $i => $value) 
		{
			$this->normalizedWeights[$label[$i]] = $value / $sum;
			$this->weights[$label[$i]] = $value;
		}
	}

	public function getNormalizedWeights()
	{
		return $this->normalizedWeights;
	}

	public function getWeights()
	{
		return $this->weights;
	}

	private function poweringValue($data)
	{
		foreach ($data as $z => $value) 
		{
			$calon 				= [];
			$poweredVal 		= [];
			$criteriaVal 		= [];
			$vectCalculations 	= [];
			$calon["nama"] 		= $value["nama"];  

			for ($i = 0; $i < sizeof($value["kriteria"]["nama"]); $i++) 
			{
				switch ($value['kriteria']['kondisi'][$i])
				{
					case 'Cost(-)':
						$val = pow($value["faktor"]["bobot"][$i], -1 * $this->normalizedWeights[$value['kriteria']['nama'][$i]]);
						$vectCalculations[$value['kriteria']['nama'][$i]] = [
							'type'				=> 'Cost(-)',
							'factor'			=> $value["faktor"]["bobot"][$i],
							'normalized_weight'	=> $this->normalizedWeights[$value['kriteria']['nama'][$i]],
							'val'				=> $val
						];
						
						array_push($poweredVal, $val);
						$criteriaVal[$value['kriteria']['nama'][$i]] = $val;
						break;

					case 'Benefit(+)':
						$val = pow($value["faktor"]["bobot"][$i], $this->normalizedWeights[$value['kriteria']['nama'][$i]]);
						$vectCalculations[$value['kriteria']['nama'][$i]] = [
							'type'				=> 'Benefit(+)',
							'factor'			=> $value["faktor"]["bobot"][$i],
							'normalized_weight'	=> $this->normalizedWeights[$value['kriteria']['nama'][$i]],
							'val'				=> $val
						];
						
						array_push($poweredVal, $val);
						$criteriaVal[$value['kriteria']['nama'][$i]] = $val;
						break;
				}
			}
			$calon["alternative_value"] = $poweredVal;
			$calon['criteria_value'] = $criteriaVal;
			$calon['vector_calculations'] = $vectCalculations;
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
}