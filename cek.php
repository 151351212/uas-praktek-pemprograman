<?php

session_start();

include "koneksi.php";
if (mysqli_connect_errno())
{
echo "Koneksi bermasalah: " . mysqli_connect_error();
}
// checking the user
if(isset($_POST['submit']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $pilihuser = "select * from log where user='$user' AND pass='$pass'";
    $run_user = mysqli_query($con, $pilihuser);
    

    $cek_user = mysqli_num_rows($run_user);


    if($cek_user>0)
    {
       
        
        echo "<script language='JavaScript'>window.alert('LOGIN Berhasil..');document.location='index2.php'</script>";
    }
    else 
    {
        echo "<script language='JavaScript'>window.alert('Username & Password Anda Salah');document.location='index.php'</script>";
       
    }

}

?>

