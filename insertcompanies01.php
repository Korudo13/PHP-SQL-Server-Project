<?php
/*

* File:        insertcompanies01.php
* By:          Tony Chacon
* Date:        2016-08-02
*
* This script INSERTs company details into table tCompany
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

				
		$company_SQLinsert = "INSERT INTO tCompany ( ";
		// $company_SQLinsert .=  "ID, ";
		$company_SQLinsert .=  "preName, ";
		$company_SQLinsert .=  "Name, ";
		$company_SQLinsert .=  "RegType, ";
		$company_SQLinsert .=  "StreetA, ";
		$company_SQLinsert .=  "StreetB, ";
		$company_SQLinsert .=  "StreetC, ";
		$company_SQLinsert .=  "City, ";
		$company_SQLinsert .=  "State, ";
		$company_SQLinsert .=  "Zipcode, ";
		$company_SQLinsert .=  "COUNTRY ";
		$company_SQLinsert .=  ") ";
		
		$company_SQLinsert .=  "VALUES ";
		
		{ // insert Pie Company 
			$company_SQLinsert .=  "(";
			//$company_SQLinsert .=  "'<autoincremented ID value>', ";
			$company_SQLinsert .=  "'The', ";
			$company_SQLinsert .=  "'First Company', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'1111 First Street', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Firstville', ";
			$company_SQLinsert .=  "'DE', ";
			$company_SQLinsert .=  "'11111', ";
			$company_SQLinsert .=  "'USA' ";
			$company_SQLinsert .=  "), ";
		}

		{ // insert TMIT 		
			$company_SQLinsert .=  "(";
			//$company_SQLinsert .=  "'<autoincremented ID value>', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'That Cool Company', ";
			$company_SQLinsert .=  "'Limited', ";
			$company_SQLinsert .=  "'1337 Elite Street', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Coolsville', ";
			$company_SQLinsert .=  "'CA', ";
			$company_SQLinsert .=  "'13371', ";
			$company_SQLinsert .=  "'USA' ";
			$company_SQLinsert .=  "), ";
		}

		{ // insert JACASTA 		
			$company_SQLinsert .=  "(";
			//$company_SQLinsert .=  "'<autoincremented ID value>', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Third Place', ";
			$company_SQLinsert .=  "'LLC', ";
			$company_SQLinsert .=  "'3 R.Place', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Bronzeville', ";
			$company_SQLinsert .=  "'NJ', ";
			$company_SQLinsert .=  "'33333', ";
			$company_SQLinsert .=  "'USA' ";
			$company_SQLinsert .=  ") ";
		}
		
		
		if (mysql_query($company_SQLinsert))  {	
			echo "INSERT INTO tCompany - SUCCESSFUL.<br /><br />";
		} else {
			echo "INSERT INTO tCompany - FAILED.<br /><br />";
		}
}

?>

	