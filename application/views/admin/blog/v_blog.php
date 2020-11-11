<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Blog</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
						<li class="breadcrumb-item active">Blog</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		<?= $this->session->flashdata('message'); ?>
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="card-header">
			<div class="text-right">
				<a class="btn btn-primary" href="<?= base_url('admin/blog/tulis_blog'); ?>">Tulis
					artikel</a>
			</div>
		</div>
		<?php foreach ($blog as $blg) { ?>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="activity">
								<!-- Post -->
								<div class="post">
									<div class="user-block">
										<!-- <img class="img-circle img-bordered-sm"
											src="<?= base_url('assets/fotoicon/'. $blg->FOTO_POST); ?>"> -->
										<span class="username">
											<a
												href="<?= base_url('admin/blog/edit_artikel/' . $blg->ID_POST); ?>"><?= $blg->JUDUL_POST; ?></a>

										</span>
										<span>
											<i class="fa fa-folder"></i>
											<a class="link-black text-sm"
												href="<?= base_url('admin/blog/lihat_post_ktg'); ?>"><?= $blg->NM_CT; ?></a>

										</span>
									</div>
									<!-- /.user-block -->
									<!-- Karepnya nampilin sebagian kalimat di artikel -->
									<!-- <p>
											<?= $blg->KONTEN_POST ?>
										</p> -->
										
									<p>
									<!-- Nyari status post trus ditampilkan sesuai status post -->
										<?php 
										if ($blg->ST_POST == 0) {
											echo '<label for="">Draf</label>';
										} else {
											echo '<label for="">Dipublikasikan</label>';
										}
										?>

										<label for="TGL_POST"
											class="text-sm mr-2"><?= ' | '. date('d F Y', strtotime($blg->TGL_POST)); ?></label>
										<span class="float-right">
											<!-- dilihat tampilan blognya sebelum diposting -->
											<a href="<?= base_url('admin/blog/detail_blog/'.$blg->ID_POST);?>">Pratinjau</a>
											<!-- Nyari status post trus mau diposting apa nggak -->
											<?php 
											if ($blg->ST_POST == 0) {
												echo '<button type="button" id="detail" class="btn btn-warning btn-sm btn-round" style="color: white"
												data-toggle="modal" data-target="#modal_posting'. $blg->ID_POST.'">
												<i class="fas fa-arrow-circle-right"></i> Publikasikan</button>';
											} else {
												echo '<button type="button" id="detail" class="btn btn-success btn-sm btn-round" style="color: white"
												data-toggle="modal" data-target="#modal_posting'. $blg->ID_POST.'">
												<i class="fas fa-arrow-circle-left"></i> Kembalikan ke draf</button>';	
											}
											 ?>
											<!-- edit artikel -->
											<a href="<?= base_url('admin/blog/edit_artikel/' . $blg->ID_POST); ?>">
												<button type="button" class="btn btn-primary btn-circle btn-sm">
													<i class="fas fa-edit" style="color: white"></i> Edit
												</button>
											</a>
											<!-- hapus artikel -->
											<a href="<?= base_url('admin/blog/hapus_artikel/' .  $blg->ID_POST); ?>"
												onclick="return confirm('Anda yakin mau menghapus data ini ?')">
												<button type="button" class="btn btn-danger btn-circle btn-sm"
													style="color: white">
													<i class="fas fa-trash"></i> Hapus
												</button>
											</a>
										</span>
									</p>
								</div>
								<!-- /.post -->
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div>
		<?php } ?>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal posting -->
<?php 
foreach ($blog as $blg) { 
	$ID_POST = $blg->ID_POST;
	$ST_POST = $blg->ST_POST;	
	?>
<div class="modal fade" id="modal_posting<?= $ID_POST; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<?php 
			if ($ST_POST == 0) {
				echo '<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel">Publikasikan Artikel</h3>
					</div>
					<form action="'. base_url('admin/blog/pr_posting').'" method="post" class="form-horizontal">
						<div class="modal-body">
							<p>Apakah Anda yakin ingin mempublikasikan artikel ini?</p>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="ST_POST" value="'. $ST_POST. '">
							<input type="hidden" name="ID_POST" value="'. $ID_POST. '">
							<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
							<button class="btn btn-primary">Ya</button>
						</div>
					</form>';
			} else {
				echo '<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel">Kembalikan ke Draf</h3>
					</div>
					<form action="'. base_url('admin/blog/pr_posting').'" method="post" class="form-horizontal">
						<div class="modal-body">
							<p>Apakah Anda ingin mengembalikan artikel ke draf?</p>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="ST_POST" value="'. $ST_POST. '">
							<input type="hidden" name="ID_POST" value="'. $ID_POST. '">
							<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
							<button class="btn btn-primary">Ya</button>
						</div>
					</form>';
			}
			?>
		</div>
	</div>
</div>
<?php } ?>
