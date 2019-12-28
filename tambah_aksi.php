<?php 

include 'koneksi.php';

$name = $_POST['name'];
$skill = $_POST['skill'];



mysqli_query($koneksi,"insert into list values('$name','$skill')");


header("location:index.php");

?>