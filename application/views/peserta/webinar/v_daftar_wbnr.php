<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $tittle; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('peserta/webinar')?>">Webinar</a></li>
						<li class="breadcrumb-item active"><?= $tittle; ?></li>
					</ol>
				</div>
			</div>
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<form action="<?= base_url('peserta/webinar/daftar_webinar'); ?>" enctype="multipart/form-data" method="POST">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<?php foreach ($webinar as $wbnr){ ?>
								<h3><?= str_replace('-', ' ', $wbnr->JUDUL_WEBINAR); ?></h3>
								<input type="hidden" name="ID_WEBINAR" value="<?= $wbnr->ID_WEBINAR; ?>">
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">

						<!-- Profile Image -->
						<div class="card card-primary card-outline">

							<div class="card-body box-profil" id="imgedit">
								<!-- <?= form_open_multipart('peserta/daftar_webinar'); ?> -->
								<div class="form-group">
									<div class="form-group text-center" style="position: relative;">
										<span class="img-div">
											<div class="text-center img-placeholder" onClick="triggerClick()">
												<label class="sm-0 text-primary"><small>(Klik gambar di bawah untuk
														mengganti)</small></label>
											</div>
											<div>
												<img src="<?= base_url(); ?>assets/dist/img/peserta/<?= $peserta['FTO_PS']; ?>"
													onClick="triggerClick()" id="profileDisplay" width="200px"
													alt="User profile picture">
											</div>
										</span>
										<input type="hidden" name="ID_PS" value="<?= $peserta['ID_PS']; ?>">
										<input type="file" name="FTO_PS" value="<?= $peserta['FTO_PS']; ?>"
											id="profileImage" class="form-control" style="display: none;">
										<input type="hidden" name="HAPUS_FOTO" value="<?= $peserta['FTO_PS']; ?>">
										<!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
										<label class="text-bold text-gray">Foto Profil</label>
										<div>
											<small class="text-danger text-bold">(Ukuran file gambar max 2 mb.)</small>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->

					<div class="col-md-9">
						<div class="card card-primary card-outline card-outline-tabs">
							<div class="card-body">
								<div class="tab-content" id="custom-tabs-four-tabContent">
									<!-- Profil -->
									<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
										aria-labelledby="custom-tabs-four-home-tab">
										<!-- <form class="form-horizontal" action="<?= base_url('peserta/profil'); ?>" method="POST"> -->
										<div class="form-group row">
											<label for="nama" class="col-sm-3 col-form-label">Nama</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-user"></i></span>
												</div>
												<input type="text" class="form-control" id="NM_PS" name="NM_PS" autocomplete="off"
													placeholder="Nama Lengkap" value="<?= $peserta['NM_PS']; ?>">
											</div>
											<div class="offset-sm-3">
												<small class="form-text text-success">Gunakan huruf kapital</small>
												<!-- <?= form_error('nmps', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<label for="email" class="col-sm-3 col-form-label">Email</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text"><i
															class="fas fa-envelope"></i></span>
												</div>
												<input type="email" class="form-control" id="EMAIL_PS" name="EMAIL_PS"
													placeholder="Email" value="<?= $peserta['EMAIL_PS']; ?>" disabled>
											</div>
											<div class="offset-sm-2">
												<!-- <?= form_error('email', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<label for="hp" class="col-sm-3 col-form-label">No Handphone</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-phone"></i></span>
												</div>
												<input type="number" class="form-control" id="HP_PS" name="HP_PS"
													placeholder="No Handphone" value="<?= $peserta['HP_PS']; ?>">
											</div>
											<div class="offset-sm-2">
												<!-- <?= form_error('hp', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text"><i
															class="fas fa-map-marker-alt"></i></span>
												</div>
												<input type="text" class="form-control" id="ALMT_PS" name="ALMT_PS"
													placeholder="Alamat" value="<?= $peserta['ALMT_PS']; ?>">
											</div>
											<div class="offset-sm-2">
												<!-- <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text" for="jk"><i
															class="fas fa-venus-mars"></i></span>
												</div>
												<select class="custom-select form-control" name="JK_PS" id="JK_PS">
													<option selected>--Pilih--</option>
													<option value="Laki-laki"
														<?= $peserta['JK_PS'] == "Laki-laki" ? "selected" : "" ?>>
														Laki-laki
													</option>
													<option value="Perempuan"
														<?= $peserta['JK_PS'] == "Perempuan" ? "selected" : "" ?>>
														Perempuan
													</option>
												</select>
											</div>
											<div class="offset-sm-2">
												<!-- <?= form_error('jk', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text"><i
															class="fas fa-user-tie"></i></span>
												</div>
												<select name="PEKERJAAN" id="PEKERJAAN"
													class="custom-select form-control">
													<option selected>--Pilih--</option>
													<option value="Pelajar/Mahasiswa"
														<?= $peserta['PEKERJAAN'] == "Pelajar/Mahasiswa" ? "selected" : "" ?>>
														Pelajar/Mahasiswa</option>
													<option value="Wiraswasta"
														<?= $peserta['PEKERJAAN'] == "Wiraswasta" ? "selected" : "" ?>>
														Wiraswasta</option>
													<option value="PNS"
														<?= $peserta['PEKERJAAN'] == "PNS" ? "selected" : "" ?>>PNS
													</option>
													<option value="Petani"
														<?= $peserta['PEKERJAAN'] == "Petani" ? "selected" : "" ?>>
														Petani
													</option>
													<option value="Peternak"
														<?= $peserta['PEKERJAAN'] == "Peternak" ? "selected" : "" ?>>
														Peternak</option>
													<option value="TNI/Polisi"
														<?= $peserta['PEKERJAAN'] == "TNI/Polisi" ? "selected" : "" ?>>
														TNI/Polisi</option>
													<option value="Lain-lain"
														<?= $peserta['PEKERJAAN'] == "Lain-lain" ? "selected" : "" ?>>
														Lain-lain</option>
												</select>
											</div>
											<div class="offset-sm-2">
												<!-- <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<label for="agama" class="col-sm-3 col-form-label">Agama</label>
											<div class="input-group mb-1 col-sm-9">
												<div class="input-group-prepend">
													<span class="input-group-text" for="agama"><i
															class="fas fa-praying-hands"></i></span>
												</div>
												<select class="custom-select form-control" name="AGAMA_PS"
													id="AGAMA_PS">
													<option selected>--Pilih Agama--</option>
													<option value="Islam"
														<?= $peserta['AGAMA_PS'] == "Islam" ? "selected" : "" ?>>Islam
													</option>
													<option value="Hindu"
														<?= $peserta['AGAMA_PS'] == "Hindu" ? "selected" : "" ?>>Hindu
													</option>
													<option value="Buddha"
														<?= $peserta['AGAMA_PS'] == "Buddha" ? "selected" : "" ?>>Buddha
													</option>
													<option value="Kristen"
														<?= $peserta['AGAMA_PS'] == "Kristen" ? "selected" : "" ?>>
														Kristen
													</option>
													<option value="Katolik"
														<?= $peserta['AGAMA_PS'] == "Katolik" ? "selected" : "" ?>>
														Katolik
													</option>
													<option value="Konghucu"
														<?= $peserta['AGAMA_PS'] == "Konghucu" ? "selected" : "" ?>>
														Konghucu
													</option>
												</select>
											</div>
											<div class="offset-sm-2">
												<!-- <?= form_error('agama', '<small class="text-danger">', '</small>'); ?> -->
											</div>
										</div>
										<div class="form-group row">
											<div class="offset-sm-3 col-sm-9">
												<button type="submit" class="btn btn-primary" id="btn-save"><i
														class="fas fa-save"></i> Daftar Webinar</button>
											</div>
										</div>
										<!-- <?= form_close() ?> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->