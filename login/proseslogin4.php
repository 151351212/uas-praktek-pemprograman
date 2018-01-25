<?php
include "validasilogin4.php";

$mysqli = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($mysqli->connect_error) {
 die("Connection failed: " . $mysqli->connect_error);
}

$id = $_POST['nim'];
$pass = $_POST['password'];

$query = "SELECT * FROM LOGIN4 WHERE ID='$id' AND PASSWORD='$pass'";
$result = $mysqli->query($query);

if($result->num_rows > 0){
$data = $result->fetch_assoc();
$_SESSION['nim'] = $id;
$_SESSION['nama'] = $data['nama'];
	echo "<script language='JavaScript'>window.alert('LOGIN Berhasil....Kilik OK');document.location='admin.php'</script>";
}else{
	echo "<script language='JavaScript'>window.alert('Username & Password Anda Salah');document.location='login.php'</script>";
}




?>