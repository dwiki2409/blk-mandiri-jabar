@extends('template/template')

@section('content')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Profile Lembaga</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Profile</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3">Tentang BLK Mandiri</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
					dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
					cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas.
					Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!
				</p>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="assets\images\profile1.jpg" alt="">
			</div>
		</div>
	</div>
</section>


<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Misi BLK Mandiri</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores
					assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa
					inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia,
					perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                    <img loading="lazy" class="img-fluid" src="assets\images\profile2.jpg" alt="">
			</div>
			<div class="col-md-6 mt-5 mt-md-0">
				<h3>Visi BLK Mandiri</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores
					assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa
					inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia,
					perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img loading="lazy" src="{{ url('assets') }}/images\company\company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>


<section class="promo-video section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Dokumentasi BLK Mandiri</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
					<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- /section title -->
			<div class="col-md-8 mx-auto">
        <iframe width="100%" height="360" src="https://www.youtube.com/embed/_JSKEJS3-HY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<!-- <iframe src="https://player.vimeo.com/video/51119176" width="100%" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> -->
			</div>
		</div>
	</div>
</section>

<!--
Start Call To Action
==================================== -->
<!-- <section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
			</div>
		</div>
	</div>
</section>   -->

<section class="section grallery bg-light">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Sneak Peak Gallery</h2>
					<p>Selamat datang di Galeri BLK Mandiri Jawa Barat! Di sini, kami memamerkan berbagai kegiatan pelatihan dan hasil karya peserta kami. Setiap gambar menceritakan perjalanan inspiratif dari individu-individu yang telah mengasah keterampilan mereka dan siap untuk menciptakan peluang usaha. Kami berkomitmen untuk memberikan pelatihan yang berkualitas, memfasilitasi pengalaman belajar yang mendalam, dan membangun jaringan yang kuat bagi para peserta.</p>
						<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="company-gallery">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-1.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-2.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-3.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-4.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-5.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-5.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-1.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-2.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-3.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-4.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-5.jpg" alt="">
					<img loading="lazy" src="{{ url('assets') }}/images\company\gallery-5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<!--
Start Counter Section
==================================== -->
<section class="counter-wrapper section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<div class="title">
					<h2>Lembaga Terbaik di Bidangnya</h2>
					<p>BLK Mandiri Jawa Barat dikenal sebagai lembaga terdepan dalam pelatihan keterampilan. Dengan pendekatan inovatif dan program yang disesuaikan dengan kebutuhan industri, kami berhasil menghasilkan lulusan yang siap bersaing di pasar kerja. Keberhasilan ini tercermin dalam banyaknya peserta yang telah berhasil menciptakan usaha mandiri dan memberikan kontribusi signifikan bagi masyarakat.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-alarm-outline"></i>
					<div>
						<span class="counter" data-count="1500">0</span>
					</div>
					<h3>Alumni</h3>
				</div>
			</div>
			<!-- end first count item -->

			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-analytics-outline"></i>
					<div>
						<span class="counter" data-count="130">0</span>
					</div>
					<h3>Program Pelatihan Diselesaikan</h3>
				</div>
			</div>
			<!-- end second count item -->

			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-compose-outline"></i>
					<div>
						<span class="counter" data-count="99">0</span>
					</div>
					<h3>Umpan Balik Positif</h3>

				</div>
			</div>
			<!-- end third count item -->

			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item kill-border">
					<i class="tf-ion-ios-bolt-outline"></i>
					<div>
						<span class="counter" data-count="250">0</span>
					</div>
					<h3>Peluang Usaha Diciptakan</h3>
				</div>
			</div>

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <p>
                Dengan dedikasi dan komitmen untuk terus meningkatkan kualitas pelatihan, BLK Mandiri Jawa Barat berupaya menciptakan generasi yang tidak hanya siap kerja, tetapi juga siap berwirausaha.
                </p>
            </div>
			<!-- end fourth count item -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->


@endsection
