<?php
/*

* File:        createDBalphacrm.php
* By:          Tony Chacon
* Date:        2016-07-29
*
* This script CREATEs tables tCompany and tPerson in the database alphacrm
*
*
*
*======================================
*/

//Connect and Test MySQL adn specific DB
{
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

if ($dbSuccess){

		//   SQL script to create table tCompany
		$createCoyTable_SQL = "CREATE TABLE alphacrm.tCompany ( ";
		$createCoyTable_SQL .= "ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
		$createCoyTable_SQL .= "preName VARCHAR( 50 ) , ";
		$createCoyTable_SQL .= "Name VARCHAR( 250 ) NOT NULL, ";
		$createCoyTable_SQL .= "RegType VARCHAR ( 50 ) NULL, ";

		$createCoyTable_SQL .= "StreetA VARCHAR( 150 ) NULL, ";
		$createCoyTable_SQL .= "StreetB VARCHAR( 150 ) NULL, ";
		$createCoyTable_SQL .= "StreetC VARCHAR( 150 ) NULL, ";
		$createCoyTable_SQL .= "City VARCHAR( 150 ) NULL, ";
		$createCoyTable_SQL .= "State VARCHAR( 150 ) NULL, ";
		$createCoyTable_SQL .= "Zipcode VARCHAR( 50 ) NULL, ";
		
		$createCoyTable_SQL .= "COUNTRY VARCHAR( 250 ) NOT NULL ";
		$createCoyTable_SQL .= ")";
		
		if (mysql_query($createCoyTable_SQL)){
			echo "'Create TABLE tCompany' - Successful.<br/ ><br/ >";
		}

			// SQL script to create table tPerson
		$createPersonTable_SQL = "CREATE TABLE alphacrm.tPerson ( ";
		$createPersonTable_SQL .= "ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
		$createPersonTable_SQL .= "Salutation VARCHAR( 20 ) , ";
		$createPersonTable_SQL .= "FirstName VARCHAR( 50 ) , ";
		$createPersonTable_SQL .= "LastName VARCHAR( 50 ) NOT NULL, ";
		$createPersonTable_SQL .= "CompanyID INT ( 11 ) NOT NULL ";
		$createPersonTable_SQL .= ")";
		
		if (mysql_query($createPersonTable_SQL)){
			echo "'Create TABLE tPerson' - Successful.<br/ ><br/ >";		
		}
}

?>