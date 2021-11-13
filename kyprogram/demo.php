<form method="POST">
	<label>Angka1</label>
	<input type="number" name="angka1" placeholder=""></br>
	<label>Angka2</label>
	<input type="number" name="angka2" placeholder=""></br>
	<select name="operator">
		<option value="+">penjumlahan</option>
		<option value="-">pengurangan</option>
		<option value="*">perkalian</option>
		<option value="/">pembagian</option>
	</select>
	<br>
	<input type="submit" name="kirim" value="hitung">
</form>
<?php
	if(isset($_POST["kirim"])){
		//proses
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operator = $_POST['operator'];

		if($operator=="+"){
			$hasil = $angka1+$angka2;
			echo "<h1>" .$hasil."</h1>";
		}elseif($operator=="-"){
			$hasil = $angka1-$angka2;
			echo "<h1>" .$hasil."</h1>";
		}elseif($operator=="*"){
			$hasil = $angka1*$angka2;
			echo "<h1>" .$hasil."</h1>";
		}else{
			$hasil = $angka1/$angka2;
			echo "<h1>" .$hasil."</h1>";
		}

	}