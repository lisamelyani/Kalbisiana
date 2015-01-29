<?php require_once("koneksi.php");?>
<?php
$sql = "SELECT * FROM user"; // todo adalah nama table di database
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil)
{
	die("Query database gagal.");
}
?>