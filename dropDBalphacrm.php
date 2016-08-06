<?php
/*

* File:   dropDBalphacrm.php
* By:     Tony Chacon
* Date    2016-07-27
*
* This script * DROPs the database alphacrm
*
*
*========================================
*/

//Connect and Test MySQL and specific DB

	$hostname = "localhost";
	$username = "root";
	$password = "";
	
	$dbConnected = @mysql_connect($hostname, $username, $password);
	$dbSelected = @mysql_select_db($databaseName, $dbConnected);
	
	$dbSuccess = true;
	if($dbConnected){	
	} else{
		echo "MySQL connection FAILD<br /><br />";	
		$dbSuccess = false;
	}
	
	
// Execute code ONLY if connections were successful
if ($dbSuccess){

	$dbName = "alphacrm";
	$drop_SQL = "DROP DATABASE " . $dbName;
	
	if (mysql_query($drop_SQL)){
		echo " 'DROP DATABASE " .$dbName."' - Successful.";
		} else{
			echo " 'DROP DATABASE " .$dbName."' - Failed.";
		}
	}







?>