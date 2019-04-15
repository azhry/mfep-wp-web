<?php 

class MFEP
{
	private $nbf = [];
	private $nbe = [];

	public function do_mfep($data){
       $this->calculate_nbf($data);
       $this->calculate_nbe($data);
       $this->calculate_tbe();
       $this->sort_tbe();
       return $this->nbe;
	}

	private function calculate_nbf($data){
       $sum = 0;
       $kriteria = $data[0]["kriteria"]["bobot"];
       $sum = array_sum($kriteria);

       for($i=0;$i<sizeof($data[0]["kriteria"]["nama"]);$i++){
         $this->nbf[$i]["kriteria"]    =  $data[0]["kriteria"]["nama"][$i];
         $this->nbf[$i]["bobot"]       =  $data[0]["kriteria"]["bobot"][$i];
         $this->nbf[$i]["normalisasi"] =  $data[0]["kriteria"]["bobot"][$i]/$sum;
       }
	}

	private function calculate_nbe($data){
        $index_nbe = 0;
        for($i=0;$i<sizeof($data);$i++){
            $this->nbe[$i]["nama"] = $data[$i]["nama"];
            for($j=0;$j<sizeof($data[0]["kriteria"]["nama"]);$j++){
               $kriteria_calon = $data[$i]["kriteria"]["nama"][$j];
               $bobot_kriteria = $data[$i]["faktor"]["bobot"][$j];
                foreach ($this->nbf as $key_nbf => $value_nbf) {
                   $kriteria    = $value_nbf["kriteria"];
                   $normalisasi = $value_nbf["normalisasi"];
                   if($kriteria == $kriteria_calon){
                     $this->nbe[$i]["nbe"]["kode_kriteria"][$j] = $kriteria;
                     $this->nbe[$i]["nbe"]["nilai"][$j]         = $normalisasi*$bobot_kriteria;
                     break;
                   }   
              }
            }
        }
	}

	private function calculate_tbe(){
        for ($i=0; $i < sizeof($this->nbe) ; $i++) { 
           $this->nbe[$i]["tbe"] = array_sum($this->nbe[$i]["nbe"]["nilai"]);
        }
	}

	private function sort_tbe(){
		$sort = [];
		foreach ($this->nbe as $index => $value) {
			 $sort[$index] = $value["tbe"];
		}

		array_multisort($sort,SORT_DESC,$this->nbe);
	}

}