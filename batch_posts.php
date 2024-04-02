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
								<a type="button" id="stars" class="btn btn-default" href="profile.php">
									<i class="fa fa-file-text-o"></i>
									<div class="hidden-xs"> Profile </div>
								</a>
							</div>
							
								<div class="btn-group" role="group">
								<a type="button" id="stars" class="btn btn-default" href="privacy.php">
									<i class="fa fa-file-text-o"></i>
									<div class="hidden-xs"> My Privacy </div>
								</a>
							</div>
							
							<div class="btn-group" role="group">
								<a type="button" id="favorites" class="btn btn-default" href="friends_post.php">
									<i class="fa fa-heart-o"></i>
									
									<div class="hidden-xs"> Friends Post </div>
								</a>
							</div>
							
							<div class="btn-group" role="group">
								<a type="button" id="following" class="btn btn-default" href="add_posts.php"> 
									<i class="fa fa-pencil-square-o"></i>
									
									<div class="hidden-xs"> Add Posts </div>
								</a>
							</div>
							
							<div class="btn-group" role="group">
								<a type="button" id="batch" class="btn btn-default" href="manage_group.php">
									<i class="fa fa-heart-o"></i>
									
									<div class="hidden-xs"> Manage Groups </div>
								</a>
							</div>
							
							<div class="btn-group" role="group">
								<a style="background:#ddd;" type="button" id="batch" class="btn btn-default" href="batch_posts.php">
									<i class="fa fa-heart-o"></i>
									
									<div class="hidden-xs"> Group data </div>
								</a>
							</div>
						</div>
						
						<div class="tab-content" style="margin-top:30px;">
							<?php include_once 'views/profile/add_batch_posts.php'; ?>
						</div>
					</div>
				</div>
		</div>
		<?php include_once 'views/footer.php'; ?>
		<script src="assets/js/profile.js"></script>
	</body>
</html>
	