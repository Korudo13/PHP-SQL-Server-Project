<?php
/*

* File:        insertcompanies01.php
* By:          Tony Chacon
* Date:        2016-08-06
*
* This script DELETEs people details into table tPeople
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

//     Execute code ONLY if connections were successful
if($dbSuccess){

	/*$people_SQLdelete = "DELETE FROM tPerson WHERE LastName = 'Bloggs'";

	if(mysql_query($people_SQLdelete)){
		echo "DELETE tPerson - SUCCESSFUL<br/><br/>";
	} else{
		echo "DELETE tPerson - FAILED<br/><br/>";
	}*/

	$people_SQLdelete = "DELETE FROM tPerson WHERE CompanyID > '200'";

	if(mysql_query($people_SQLdelete)){
		echo "DELETE tPerson - SUCCESSFUL.<br/><br/>";
	} else{
		echo "DELETE tPerson - FAILED.<br/><br/>";
	}

}

?> 