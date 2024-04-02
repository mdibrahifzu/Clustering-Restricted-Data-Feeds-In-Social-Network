<?php
			include "db.php"; 
			include "program/session.php"; 
			$id = $_SESSION['id'];
	$group_id = $_GET['group_id'];
	$get_it = mysql_query("SELECT *FROM group_member WHERE group_id='$group_id'");
	$sno = 1;
	while($fetch_all=@mysql_fetch_array($get_it)){
		echo '<tr>'; 
		echo '<td class=text-center>'.$sno.'</td>'; 
		echo '<td class=text-center>'.$fetch_all['user_name'].'</td>'; 
		echo '<td class=text-center>'.$fetch_all['user_decision'].'</td>'; 
		echo '</tr>'; 
		
		$sno++;
	}
	
?>