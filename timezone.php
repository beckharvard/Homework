<?php

	if ($_SESSION['views'] != 0;) {
 		session_destroy();
 	}
 	else {
    session_start();
    $_SESSION['time'] = $_GET['time'];
    }
  
?>