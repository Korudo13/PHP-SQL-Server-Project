<?php
/*

* File:        updatecompanies01.php
* By:          Tony Chacon
* Date:        2016-08-03
*
* This script UPDATEs values of field COUNTRY in table tCompany
* to "United States" WHERE they have the value USA
*
*
*======================================
*/

//Connect and Test MySQL adn specific DB (return $dbSuccess = T/F)
{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		
		$databaseName = "alphacrm";
		
		$dbConnected = @mysql_connect($hostname, $username, $password); 
		$dbSelected = @mysql_select_db($databaseName, $dbConnected);
		
		$dbSuccess = true;

		if($dbConnected){
			if(!$dbSelected){
				echo "DB connection FAILED<br/><br/>";
				$dbSuccess = false;
			}

			}else{
				echo "MySQL connection FAILED<br/><br/>";
				$dbSuccess = false;	
			}
}

// Execute code ONLY if connections were successful
if ($dbSuccess){

// SQL to change country value from USA tto United States
	$company_SQLupdate = "UPDATE tCompany SET ";

	$company_SQLupdate .= "COUNTRY = 'United States' ";

	$company_SQLupdate .= "WHERE COUNTRY = 'USA' ";

	if(mysql_query($company_SQLupdate)){
	echo "UPDATE tCompany.COUNTRY - SUCCESSFUL.<br /><br />";
	} else {
	echo "UPDATE tCompany.COUNTRY - FAILED.<br /><br />";
	}
}	

?>