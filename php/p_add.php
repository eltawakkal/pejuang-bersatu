<?php
	require 'koneksi.php';


	// if ($_POST['nama']!='') {

	$tim_login = $_COOKIE['tim_log'];

    $jaringan = $_POST["jaringan"];
    $nik = $_POST["nik"];
	$nama = $_POST["nama"];
	$amanah = $_POST["amanah"];
	$alamat = $_POST["alamat"];
	$rt_rw = $_POST["rt_rw"];
	$kel = $_POST["kel"];
	$kec = $_POST["kec"];
	$kab_kota = $_POST["kab_kota"];
	$phone = $_POST["phone"];

	$sql = "SELECT * FROM tb_anggota WHERE nik='$nik' and nama='$nama' and amanah='$amanah' and alamat='$alamat' and rt_rw='$rt_rw' and kel='$kel' and kec='$kec' and kab_kota='$kab_kota' and phone='$phone'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0){

		if ($tim_login=="Tim Pejuang Bersatu") {
			$sql = "INSERT INTO tb_anggota (jaringan, nik, nama, amanah, alamat, rt_rw, kel, kec,  kab_kota, phone) VALUES ('$jaringan','$nik', '$nama', '$amanah', '$alamat', '$rt_rw', '$kel', '$kec',  '$kab_kota', '$phone')";
		} else if ($tim_login="Tim Perempuan Pejuang") {
			$sql = "INSERT INTO tb_tpp (jaringan, nik, nama, amanah, alamat, rt_rw, kel, kec,  kab_kota, phone) VALUES ('$jaringan','$nik', '$nama', '$amanah', '$alamat', '$rt_rw', '$kel', '$kec',  '$kab_kota', '$phone')";
		}

	
		if ($conn->query($sql) === TRUE) {
			header('location: ../pages/entri_data.php?status=2');
			exit();
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
		header('location: ../pages/entri_data.php?status=1');
		exit();
	}

	$conn->close();

?>
