<div class="page-content">
	<div class="page-header">
		<h1>
			Tabel
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Tabel Siswa
			</small>
		</h1>
	</div><!-- /.page-header -->

	<!-- PAGE CONTENT BEGINS -->
	<div class="row">
		<div class="col-xs-12">
			<?php echo $this->session->flashdata('alert_msg');?>
			<div class="table-header">
				<a href="javascript:modalTambah()" class="btn btn-xs btn-danger">Tambah Siswa</a>
				<input type="button" class="btn btn-xs btn-success" value="Refresh" onclick="window.location.href=window.location.href;" />
				<!-- <strong>Tampilan Awal Tabel CRUD</strong> -->
			</div>

			<div>
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<i class="ace-icon glyphicon glyphicon-user bigger-110 hidden-480"></i>
								ID</th>

								<th class="center">
									<i class="ace-icon glyphicon glyphicon-user bigger-110 hidden-480"></i>
									Nama</th>

									<th class="center">
										<i class="ace-icon fa fa-users bigger-110 hidden-480"></i>kelamin</th>
										<th  class="center">
											<i class="ace-icon fa fa-heart bigger-110 hidden-480"></i>
											<i class="ace-icon fa fa-heart-o bigger-110 hidden-480"></i>
											status</th>

											<th class="center">
												<i class="ace-icon fa fa-home bigger-110 hidden-480"></i>
												Alamat
											</th>
											<th  class="center">
												<i class="ace-icon fa fa-book bigger-110 hidden-480"></i>
												Kelas</th>

												<th class="center">
													<i class="ace-icon fa fa-pencil-square-o bigger-110 hidden-480"></i>
													Opsi</th>
												</tr>
											</thead>

											<tbody align="center">
												<?php foreach ($data_siswa as $key => $value){?>
												<tr>
													<td class="danger"><?= $value->id_siswa?></td>
													<td class="info"><?= $value->nama_siswa?></td>
													<td class="danger"><?= $value->nama_kelamin?></td>
													<td class="info"><?= $value->status?></td>
													<td class="danger"><?= $value->alamat?></td>
													<td class="hidden-480">
														<span class="label label-sm label-inverse arrowed-in"><?= $value->nama_kelas?></span>
													</td>
													<td>
														<div class="hidden-sm hidden-xs action-buttons">
															<a class="green" onclick="modalEdit(<?= $value->id_siswa;?>)">
																<i class="ace-icon fa fa-pencil bigger-130"></i>
															</a>

														<!-- 	<a class="red" onclick = "return confirm('apakah anda yakin ingin menghapus field ini ??')" href="<?php //echo site_url('siswa/hapus/'. $value->id_siswa); ?>">
																<i class="ace-icon fa fa-trash-o bigger-130"></i>
															</a> -->
															<a class="red" onclick="javascript:modalHapus(<?=$value->id_siswa;?>)">
																<i class="ace-icon fa fa-trash-o bigger-130"></i>
															</a>
														</div>
													</td>
												</tr>
												<?php } ?> <!-- tutup foreach -->
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div><!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
			<div class="page-content">
				<!-- Modal Tambah -->
				<script>
					function modalTambah()
					{
						$('#infoku').modal('show');
					}
				</script>
				<div class="modal fade" id="infoku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<?php
						$data['kelamin'] 	= $this->M_kelamin->getKelamin();
						$data['kelas'] 	= $this->M_kelas->getKelas();
						$this->load->view('siswa/form_tambah_siswa/form_tambah_siswa.php', $data); 
						?>
					</div><!--modal-dialog-->
				</div><!--tutup modal tambah-->

				<!-- Modal Edit -->
				<script>

					function modalEdit(param)
					{
							// console.log(param);
							// $('#edit').modal();
							// ambilData(param);

							$.ajax({
								url: "<?= site_url('siswa/edit')?>",
								type: 'POST',
								//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
								data: {id_siswa: param}
							})
							.done(function(hasil) {
								//console.log(hasil);
								$('#edit').modal('show');
								$('#modal_content').html(hasil);
								// alert('halo');
							});
						}










					// function ambilData(param)
					// 	{

					// 		$.ajax({
					// 			url: "<?//= site_url('siswa/edit')?>",
					// 			type: 'POST',
					// 			dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
					// 			data: {id_siswa: param},
					// 		})
					// 		.done(function() {
					// 			console.log("success");
					// 		});

					// 	}	

					// modalEdit(1);		


				</script>
				<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document" id="modal_content">
					</div><!--modal-dialog-->
				</div><!--tutup modal edit-->
				
				<!-- ______________________________________modal hapus -->
				<script>
					function modalHapus(busek)
					{
						$('#hapus').modal('show');

						$('#id_bedes').attr({
							action: '<?=site_url('siswa/hapus/')?>'+busek,
							property2: 'value2'
						});
					}
				</script>
				<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="page-content">
							<br><br>
							<div class="alert alert-block alert-info" align="center">

								<strong class="red ace-icon fa fa-exclamation-circle"></strong>

								Apakah Anda Yakin
								<strong class="red">
									Menghapus
								</strong>
								<i class="ace-icon glyphicon glyphicon-trash red"></i>
								<strong class="blue">DATA INI</strong>
								<strong class="red">..............</strong>
								<strong class="green"><?php echo " ??"; ?></strong>
								<br><br>


								<h3 class="header smaller lighter grey">
									<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>
									Pilih Lanjutkan
									<small>Jika Anda Setuju</small>
								</h3>



								<form class="form-horizontal" method="POST" id="id_bedes">
									<div class="form-group" align="center">

										<button class="btn btn-white btn-default btn-round" id="kembali" data-dismiss="modal">
											<i class="ace-icon fa fa-times red2"></i>
											Batal
										</button>

										<button form="id_bedes" type="submit" class="btn btn-white btn-warning btn-bold">
											<i class="ace-icon fa fa-trash-o bigger-120 green"></i>
											Lanjutkan
										</button>

									</div>
								</form>

							</div>
						</div>
					</div><!--modal-dialog-->
				</div><!--tutup modal hapus-->
</div><!--container-->