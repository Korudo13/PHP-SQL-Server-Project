<?php

/*
* File:        peopletodelete.php
* By:          Tony Chacon
* Date:        2016-08-02
*
* This script INSERTs company details into table tCompany
*
*
*==================
*/

//Connect and Test MySQL adn specific DB (return $dbSuccess = T/F)

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

		// INSERT 4 deletable records into table tPeople

		$person_SQLinsert = "INSERT INTO tPerson ( ";
		// $person_SQLinsert .= "ID, ";
		$person_SQLinsert .= "Salutation, ";
		$person_SQLinsert .= "FirstName, ";
		$person_SQLinsert .= "LastName, ";
		$person_SQLinsert .= "CompanyID ";
		$person_SQLinsert .= ") ";

		$person_SQLinsert .= "VALUES ";

		{ //insert Person 1
			$person_SQLinsert .= "(";
			//$person_SQLinsert .= "'<autoincremented ID value>', ";
			$person_SQLinsert .= "'Mr', ";
			$person_SQLinsert .= "'Bill', ";
			$person_SQLinsert .= "'Bloggs', ";
			$person_SQLinsert .= "'' ";
			$person_SQLinsert .= "), ";
		}
		{ //insert Person 2
			$person_SQLinsert .= "(";
			//$person_SQLinsert .= "'<autoincremented ID value>', ";
			$person_SQLinsert .= "'Mrs', ";
			$person_SQLinsert .= "'Jennifer', ";
			$person_SQLinsert .= "'Bloggs', ";
			$person_SQLinsert .= "'1' ";
			$person_SQLinsert .= "), ";
		}
		{ //insert Person 3
			$person_SQLinsert .= "(";
			//$person_SQLinsert .= "'<autoincremented ID value>', ";
			$person_SQLinsert .= "'Ms', ";
			$person_SQLinsert .= "'Mary', ";
			$person_SQLinsert .= "'Berry', ";
			$person_SQLinsert .= "'300' ";
			$person_SQLinsert .= "), ";
		}
		{ //insert Person 4
			$person_SQLinsert .= "(";
			//$person_SQLinsert .= "'<autoincremented ID value>', ";
			$person_SQLinsert .= "'Mrs', ";
			$person_SQLinsert .= "'Juana', ";
			$person_SQLinsert .= "'Khan', ";
			$person_SQLinsert .= "'300' ";
			$person_SQLinsert .= ") ";
		}

		if (mysql_query($person_SQLinsert)){
			echo "INSERT INTO tPerson - SUCCESSFUL.<br/></br/>";
		} else{
			echo "INSERT INTO tPerson - FAILED.<br/></br/>";
		}

?>