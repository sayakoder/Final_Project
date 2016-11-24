	<div class="page-content">
		<div class="page-header">
		<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>

					<i class="ace-icon fa fa-check green"></i>

					Selamat Datang di
					<strong class="green">
						Admin
						<small>CRUD</small>
					</strong>,
					Mulailah Aktivitasmu Dengan Semangat
				</div>
			<h1><?=$judul ?>
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					overview &amp; stats
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				

				<div class="row">
					<div class="col-sm-6">
						<div class="widget-box">
							<div class="widget-header widget-header-flat widget-header-small">
								<h5 class="widget-title">
									<i class="ace-icon fa fa-signal"></i>
									Traffic Sources
								</h5>

								<div class="widget-toolbar no-border">
									<div class="inline dropdown-hover">
										<button class="btn btn-minier btn-primary">
											This Week
											<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
										</button>

										<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
											<li class="active">
												<a href="#" class="blue">
													<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
													This Week
												</a>
											</li>

											<li>
												<a href="#">
													<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
													Last Week
												</a>
											</li>

											<li>
												<a href="#">
													<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
													This Month
												</a>
											</li>

											<li>
												<a href="#">
													<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
													Last Month
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									<div id="piechart-placeholder"></div>

									<div class="hr hr8 hr-double"></div>

									<div class="clearfix">
										<div class="grid3">
											<span class="grey">
												<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
												&nbsp; likes
											</span>
											<h4 class="bigger pull-right">1,255</h4>
										</div>

										<div class="grid3">
											<span class="grey">
												<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
												&nbsp; tweets
											</span>
											<h4 class="bigger pull-right">941</h4>
										</div>

										<div class="grid3">
											<span class="grey">
												<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
												&nbsp; pins
											</span>
											<h4 class="bigger pull-right">1,050</h4>
										</div>
									</div>
								</div><!-- /.widget-main -->
							</div><!-- /.widget-body -->
						</div><!-- /.widget-box -->
					</div><!-- /.col -->

					<div class="col-sm-6">
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="widget-title lighter">
									<i class="ace-icon fa fa-signal"></i>
									Statistik Data sekolah
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="ace-icon fa fa-chevron-up"></i>
									</a>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-4">
									<div id="sales-charts"></div>
								</div><!-- /.widget-main -->
							</div><!-- /.widget-body -->
						</div><!-- /.widget-box -->
					</div><!-- /.col -->

				</div><!-- /.row -->


				<div class="hr hr32 hr-dotted"></div>



				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
</div><!-- /.page-content --