<?php
    $hostName = 'localhost';
    $userName = 'root';
    $password = '';
    $databaseName = 'db';
    
    $con = mysqli_connect($hostName, $userName, $password, $databaseName); 
    
    if (!$con) 
    {
		echo ("Ops! Failed to connect to MySQL: " . $con  ->connect_error);
        exit();
	}
?>