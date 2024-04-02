
		<?php 
			include "db.php"; 
			include "program/session.php"; 
			$ids = $_REQUEST['id'];
			$status = $_REQUEST['status'];
			
			$querys = mysql_query("UPDATE group_post SET status='$status'
									WHERE id='$ids'");
			
			if($querys){
				header('location:batch_posts.php');
			}
		?>