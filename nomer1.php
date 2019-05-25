
<!DOCTYPE html>
<html>
<head>
	<title>Input Biodata</title>
</head>
<body>
	<form method="POST">
		<label>Nama :</label><br>
		<input type="teks" name="nama"><br>
		<label>Alamat :</label><br>
		<input type="teks" name="alamat"><br>
		<label>Hobi</label><br>
		<input type="teks" name="hobi"><br>
		<label>Status</label><br>
		<select name="status">
			<option value="0">Belum menikah</option>
			<option value="1">menikah</option>
		</select><br>
		<label>Sekolah</label><br>
		<input type="teks" name="sekolah"><br>
		<label>Skil</label><br>
		<input type="teks" name="skil1"><br>
		<input type="teks" name="skil2"><br>
		<input type="teks" name="skil3"><br>
		<input type="teks" name="skil4"><br><br>

		<input type="submit" name="simpan" value="simpan">
	</form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$namaa = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$hobi[]	= $_POST['hobi'];
	$status = $_POST['status'];
	$sekolah = $_POST['sekolah'];
	$skil[] = $_POST['skil1'];
	$skil[] = $_POST['skil2'];
	$skil[] = $_POST['skil3'];
	$skil[] = $_POST['skil4'];

	if ($status == 0){
		$status = false;
	}else{
		$status = true;
	}

class skills{
	var $skil;

	public function tampungskil($temp4){
		return $this->skil=$temp4;
	}

	public function cetakskil(){
		echo $this->skil;
	}

}

class univ{
	var $univ;

	public function tampungsekolah($temp2){
		return $this->sekolah=$temp2;
	}

	public function cetaksekolah(){
		echo $this->sekolah;
	}
}



class biodata{
	var $nama;
	var $alamat;
	var $sekolah;
	var $status;
	var $skil;
	var $hobi;


	public function tampung($temp){
		return $this->nama=$temp;
	}

	public function tampungalamat($temp1){
		return $this->alamat=$temp1;
	}
	
	

	public function tampungstatus($temp3){
		return $this->status=$temp3;
	}

	
	public function tampunghobi($temp5){
		return $this->hobi=$temp5;
	}

	public function cetaknama(){
		echo $this->nama;
	}

	public function cetakalamat(){
		echo $this->alamat;
	}


	public function cetakstatus(){
		echo $this->status;
	}

	public function cetakhobi(){
		echo $this->hobi;
	}
	

}

$namaku = new biodata();
$bid = new skills();
$uni = new univ();

$data = array(
		'nama' => $namaku -> tampung($namaa),
		'alamat' => $namaku -> tampungalamat($alamat),
		'hobi' => $namaku -> tampunghobi($hobi),
		'status' => $namaku -> tampungstatus($status),
		'sekolah' => $uni -> tampungsekolah($sekolah),
		'skil' => $bid -> tampungskil($skil)
);

$json_data = json_encode($data);

echo $json_data;

	}
?>

