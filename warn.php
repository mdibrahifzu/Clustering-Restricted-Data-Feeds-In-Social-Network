<?php include_once 'views/profile/head.php'; ?>
	<body>
		<?php 
			include "db.php"; 
			include "program/session.php"; 
			$id = $_SESSION['id'];
			$querys = mysql_query("SELECT *FROM users WHERE id='$id'");
			$count_it = mysql_num_rows($querys);
			
			if($count_it==1){
				$fetch = mysql_fetch_array($querys);
			}else{
				header('location:index.php');
			}
			
		?>
		<div class="container width-100 set0">
				<div class="row set0">
					<div class="col-lg-12 col-sm-12 set0">
						<?php include_once 'views/profile/header.php'; ?>
						
						<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<a style="background:#ddd;" type="button" id="stars" class="btn btn-default" href="profile.php">
									<i class="fa fa-file-text-o"></i>
									
								</a>
							</div>
							
							
						</div>
						
						<div class="tab-content" style="margin-top:30px;">
							<div class="tab-pane fade in active" id="tab1">
								<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="border:0px;" id="glossy">
									<h1 style="color:red">Harmful Content in your post..Do you want to post it?</h1>
									<form name="form" method="post">
										<button type="submit" name="add_post" style="margin-top:16px;padding:5px;" class="br1 btn btn-warning  col-md-4" > Send Post  </button>
										<a href="add_posts.php" class="br1 btn btn-primary  col-md-4" style="margin-top:16px;padding:5px;">Cancel</a>
									</form>
									<?php 
									$uid=$_SESSION['id'];
										if(isset($_POST['add_post']))
										{
											$del=mysql_query("delete from users where id='$uid'");
											if($del)
											{
												echo "<br/><br/><h3 style='color:red'>Your Account Has been Blocked Because of Your Harmful Conent..</h3>";
											}
											
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<?php include_once 'views/footer.php'; ?>
		<script src="assets/js/profile.js"></script>
	</body>
</html>
	