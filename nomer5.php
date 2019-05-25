<?php 
	
	function ganti($kata,$ganti1,$ganti2){
		$arr = str_split($kata);
		$pnj = count($arr);
		$i = 0;
		while($i < $pnj){
			if($arr[$i] == $ganti1){
				$arr[$i] = $ganti2;
			}
			echo $arr[$i];
			$i++;

		}
		

	}

	ganti("purwakarta",'a','o');
?>