<?php include_once 'views/login/head.php'; ?>
	<body>
		<?php include "db.php"; session_start(); session_destroy();?>
		<div class="container width-100 set0">
			<div class="row set0">
				<?php include_once 'views/login/header.php'; ?>
				<div class="col-lg-12 col-sm-12 set0">
						<?php include_once 'views/login/index_tab.php'; ?>
					<div class="tab-content" style="margin-top:20px;">
						<?php include_once 'views/login/login.php'; ?>
						<?php include_once 'views/login/signup.php'; ?>
						<?php include_once 'views/login/terms.php'; ?>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">
							<p class="DEVELOPED">DEVELOPED BY:
                                            Mohamed ibrahim </p>
					</div>
				</div>		
			</div>	
		</div>
		<script src="assets/js/jquery.1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
