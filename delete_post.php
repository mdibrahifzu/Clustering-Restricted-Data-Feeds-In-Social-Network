
		<?php 
			include "db.php"; 
			include "program/session.php"; 
			$ids = $_SESSION['id'];
			$id = $_REQUEST['id'];
			$querys = mysql_query("delete from blog	WHERE id='$id'");
			
			if($querys){
				header('location:friends_post.php');
			}
		?>