<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<title>Selamat Datang</title>

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo site_url('assets/font-awesome/4.2.0/css/font-awesome.min.css'); ?>" />

	<!-- text fonts -->
	<link rel="stylesheet" href="<?php echo site_url('assets/fonts/fonts.googleapis.com.css'); ?>" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?php echo site_url('assets/css/ace.min.css'); ?>" />

			<link rel="stylesheet" href="<?php echo site_url('assets/css/ace-rtl.min.css'); ?>" />

	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Admin</span>
									<span class="white" id="id-text2">CRUD</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Powered By : wawan.net</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Silahkan Login Disini
											</h4>

											<div class="space-6"></div>

											<form method="POST" action="<?=site_url('login/act_login')?>">
												
												<?php echo $this->session->flashdata('alert_msg'); ?>
												
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="nama_user" class="form-control" placeholder="Username" required="" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo site_url('assets/js/jquery.2.1.1.min.js'); ?>"></script>

	


<script type="text/javascript">
	window.jQuery || document.write("<script src='<?php echo site_url('assets/js/jquery.min.js'); ?>'>"+"<"+"/script>");
</script>



		
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo site_url('assets/js/jquery.mobile.custom.min.js'); ?>'>"+"<"+"/script>");
</script>

