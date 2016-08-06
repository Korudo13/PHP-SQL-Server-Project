<?php
/*

* File:        createDBalphacrm.php
* By:          Tony Chacon
* Date:        2016-07-29
*
* This script CREATEs the database alphacrm
*
*
*======================================
*/



{ //Connect and Test MySQL adn specific DB

		$hostname = "localhost";
		$username = "root";
		$password = "";
		
		$databaseName = "alphacrm";
		
		$dbConnected = @mysql_connect($hostname, $username, $password);
		
		$dbSuccess = true;
		if($dbConnected){
		
			}else{
				echo "MySQL connection FAILED<br/><br/>";
				$dbSuccess = false;	
			}
		}
		
	
// Execute code ONLY if connections were successful
if ($dbSuccess){

	$dbName = "alphacrm";
	$create_SQL = "Create DATABASE " .$dbName;
	
	if (mysql_query($create_SQL)){
		echo "'Create DATABASE ".$dbName."' - Successful.";
		} else {
		echo "'Create DATABASE ".$dbName."' - Failed.";	
		}
}	


?>