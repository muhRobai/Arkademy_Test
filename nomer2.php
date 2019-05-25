<?php 
	
	function tgl($date,$date2){
		$i = 0;

		$pecah = explode("-",$date);

		$tahun = $pecah[0];
		$bulan = $pecah[1];
		$hari = $pecah[2];

		do
		{
			
			$hasil = date("Y-m-d", mktime(0,0,0, $bulan, $hari+$i,$tahun));		
			echo $hasil;
			echo "<br>";	
			$i++;	
		}
		while($hasil != $date2);
	}

	tgl('2019-11-01','2019-11-05');

?>