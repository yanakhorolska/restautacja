<?php
if($_POST)
	{
		$db=mysqli_connect('localhost','root','','baza');
			mysqli_set_charset($db,'utf8');
		
			echo "dodano rezerwację do bazy";
			$data=$_POST['data_rez'];
			$numer=$_POST['liczba_osób'];
			$telefon=$_POST['telefon'];
			
			mysqli_query($db, "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) values ('$data', '$numer', '$telefon')");
		
		
		mysqli_close($db);
	}

?>