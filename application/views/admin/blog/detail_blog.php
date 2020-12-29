	<?php foreach ($blog as $blg) { ?>

	<main role="main" class="container">
		<!-- Page Content -->
		<div class="container">

			<div class="row">

			<!-- Post Content Column -->
			<div class="col-lg-8">

				<!-- Title -->
				<h1 class="mt-4">
					<?= str_replace('-', ' ', $blg->JUDUL_POST); ?>
				</h1>

				<hr>

				<!-- Date/Time -->
				<span>
					<p><i class="fas fa-calendar"></i><?= date(' d F Y', strtotime($blg->TGL_POST)); ?>
					<i class="fa fa-folder"></i>
					<a class="link-black text-sm" href="#"><?= $blg->NM_CT; ?></a>
					
				</span>

				<hr>

				<!-- Preview Image -->
				<img class="img-fluid rounded" src="<?= base_url('assets/fotoblog/'.$blg->FOTO_POST);?>" alt="foto-post">

				<hr>
				<!-- Awalan Konten -->
				<p><?= htmlspecialchars_decode($blg->KONTEN_POST); ?></p>
				<!-- Akhiran Konten -->
				<br>
				<p>
					<i class="fas fa-tag"></i>
					<?php foreach($detail_tags as $dt){ ?>
					<a class="btn btn-sm-primary" href="#"><?= $dt->NM_TAGS; ?></a>
					<?php } ?>
				</p>

				<hr>
			</div>
			<!--  ======================= Awalan Sidebar ============================== -->
			<aside class="col-md-4 blog-sidebar">

				<!--  ======================= Awalan Kategori ============================== -->
				<div class="card my-4">
				<h5 class="card-header"><i class="fas fa-folder"></i>  Kategori</h5>
				<div class="card-body">
					<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled mb-0">
						<?php foreach ($kategori as $ktg) { ?>
							<li>
							<!-- href="<?= base_url('admin/blog/lihat_post_ktg/'. $ktg->NM_CT); ?>" -->
								<a class="text-dark" href="#"><?= $ktg->NM_CT; ?></a>
							</li>
						<?php } ?>
						</ul>
					</div>
					</div>
				</div>
				</div>
				<!--  ======================= Batas Artikel populer ============================== -->

				<!--  ======================= Awalan Media sosial ============================== -->
				<div class="card my-4">
				<h5 class="card-header">Ikuti akun sosial media kami</h5>
				<div class="card-body">
					<div class="social">
					<!-- <a href="https://www.facebook.com/preneuracademy/"><i class="fab fa-facebook"></i></a>
					<a href="https://www.instagram.com/preneuracademy/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCr5MmNPr-xNwbyt7Hrzu6Hw"><i class="fab fa-youtube"></i></a>
					<a href="https://twitter.com/preneuracademy"><i class="fab fa-twitter"></i></a>   -->
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>  
					</div>
				</div>
				</div>
				<!--  ======================= Batas Media sosial ============================== -->
			</aside>
			<!--  ======================= Batas Sidebar ============================== -->
			</div>
		</main>
		<!--  ======================= Batas Main class ============================== -->
	</div>
	<?php } ?>

	<!--  ========================== Subscribe me Area ============================  -->
	<section class="newsletter">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 text-center jumbotron bg-primary shadow">
						<img src="<?=base_url();?>assets/dist/img/subscribe.svg" width="200" alt="gambar-envelope">
						<div class="content text-center">
							<h2 class="text-white">SUBSCRIBE</h2>
							<p class="text-white">Dengan meng-klik subscribe artinya anda menyetujui layanan langganan ke website ini.</p>
							<div class="input-group p-5">
								<input type="email" class="form-control mr-2 mb-2" placeholder="Enter your email">
								<span class="input-group-btn">
								<button class="btn btn-warning ml-2 mb-2" type="submit">Subscribe Now</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
    		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#FFC107" fill-opacity="1"
					d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
				</path>
			</svg>
	</section>
