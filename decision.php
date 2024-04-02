
		<?php 
			include "db.php"; 
			include "program/session.php"; 
			$ids = $_SESSION['id'];
			$gid = $_REQUEST['id'];
			$user_decision = $_REQUEST['user_decision'];
			$querys = mysql_query("UPDATE group_member SET user_decision='$user_decision'
									WHERE group_id='$gid' && user_id='$ids'");
			
			if($querys){
				header('location:manage_group.php');
			}
		?>