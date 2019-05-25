<?php
	
	function hitung($kata){
		$arr = str_split($kata);

		$hidup = ['a','i','u','e','o'];

		$found = array_intersect($hidup, $arr);

		$count = array_count_values($arr);

		$hasil = [];

		foreach ($found as $key) {
			$hasil[$key] = $count[$key];
		}

		$akhir = count($hasil);
		echo $akhir;
	}

	hitung('aku');

?>