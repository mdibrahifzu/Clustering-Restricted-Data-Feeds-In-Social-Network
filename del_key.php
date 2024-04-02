
		<?php 
			include "db.php"; 
			include "program/session.php"; 
			$ids = $_SESSION['id'];
			$pid = $_REQUEST['pid'];
			$querys = mysql_query("delete from privacy	WHERE pid='$pid'");
			
			if($querys){
				header('location:privacy.php');
			}
		?>