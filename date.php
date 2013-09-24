<?php

	# the default time zone for this page. 	
		
		date_default_timezone_set ('America/New_York');


		
	# get the time in 24-hour format of an hour with leading zeros

		function sun() {
		
			$sunState = date(G);
		
		/* 
			If the time is between 6am and 8pm, make the variable 
			used for the background light blue (i.e. day).
			Otherwise, make the background variable black (i.e. night).	
		*/
			
	
	
			if ($sunState < 5 OR $sunState >= 19) {		
				$sunStatus = '#000000';
			}
			else {
				$sunStatus = '#00FFFF';
			}		
			
			
			return  $sunStatus;	
		}
	

?>

