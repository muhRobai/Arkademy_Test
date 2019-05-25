<?php 
	function kotak($jml){
		if(($jml % 2) == 1){
			$mid = ($jml+1)/2;
			for ($i=1 ; $i <= $jml ; $i++ ) { 
				for ($j=1; $j <= $jml; $j++) { 
					 if ($i == 1 || $i == $jml){
					 	echo "x ";
					 }elseif($j == $mid){
					 	echo "x ";
					 }else{
					 	echo "= ";
					 }

				}
				echo "<br>";
			}
		}else{
			echo "harus ganjil ";
		}

		

		
	}

	kotak(6);

?>