

		
	<?php
		
		
		$connect= mysql_connect("localhost","root","")or die("couldnot connect");
		
		$select=mysql_select_db("friend",$connect) or die("database blood does not exist");
	?>