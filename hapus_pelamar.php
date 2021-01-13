<?php  

session_start();
include 'connect.php';

if (isset($_GET['id'])) {
	
	$id 		= 	$_GET['id'];

	$query		= 	"DELETE FROM pelamar WHERE Id = $id";

	$exec 		= 	mysqli_query($connect, $query);
}
?>