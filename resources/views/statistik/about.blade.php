@extends('templates.unapp')

@section('css')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css"/>
<style type="text/css">
	.font-playfair_italic{
		font-family: 'Playfair Display', serif;
	}
	.glacial{
		font-family: 'GlacialIndifferenceRegular';
	}	
</style>

@stop

@section('js')
@stop

@section('menu')
<!-- MENU -->
<div class="col-md-10 text-right menu-1">
	<ul>
		<li><a href="{{url('home')}}">Home</a></li>
		<li class="active"><a href="{{url('about')}}">About</a></li>
	</ul>
</div>
<!-- END MENU -->
@stop

@section('content')

<section id="home" class="video-hero" style="height: 100vh; background-image: url(http://localhost/statistik/public/img/background-img.png);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
	<div class="overlay" style="opacity: 50%;"></div>
	<!-- <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> -->
	<div class="display-t text-center">
		<div class="display-tc">
			<div class="container">
				<div class="col-md-12 col-md-offset-0">
					<div class="animate-box">
						<hr>
						<h2 class="font-playfair_italic" style="font-size: 200px;">SI PETIK</h2>
						<h2 class="glacial" style="font-size: 25px;">Sistem Penentu Uji Statistik</h2>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="colorlib-about">
	<div class="container">
		<div class="row">
			<div class="col-md-6 animate-box">
				<div class="video colorlib-video" style="background-image: url({{ asset('img/thumbnail.png') }});">
					<a href="https://www.youtube.com/watch?v=0iDSho7ZtVk" class="popup-vimeo"><i class="icon-play3"></i></a>
					<div class="overlay"></div>
				</div>
			</div>
			<div class="col-md-6 animate-box">
				<h2 class="font-playfair_italic">Selayang Pandang</h2>
				<p style="text-align: justify;">Laman SI PETIK ini merupakan kegiatan aktualisasi Pelatihan Dasar CPNS Tahun 2020. Saya menyampaikan terima kasih kepada Fakultas Vokasi Universitas Airlangga selaku tempat saya mengabdi dan Puslatbang KMP LAN Makassar selaku penyelenggara Pelatihan Dasar CPNS Tahun 2020. Tak lupa, saya juga menyampaikan terima kasih kepada KPS (Ibu Lailatul Muqmiroh, dr., Sp.rad(K)), seluruh dosen, dan mahasiswa Prodi D-IV Teknologi Radiologi Pencitraan; para ahli statistik yang terlibat (Ibu Dr. Diah Indriani, S.Si., M.Si dan Ibu Ika Purnamasari, S.Si., M.Si); dan tim IT yang senantiasa membantu penyempurnaan laman ini.</p>
				<p style="text-align: justify;">Pelaksanaan kegiatan aktualisasi ini dibimbing oleh Bapak Dr. Ari Prasetyo, S.E., M.Si - Wakil Dekan II Fakultas Vokasi Universitas AIrlangga selaku Mentor dari instansi asal, dan Kak Lutfina Thalita E.Z., S.H. selaku coach dari Puslatbang KMP LAN Makassar.</p>
			</div>
		</div>
	</div>
</div>



<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{ asset('img/logo.jpg') }});" data-stellar-background-ratio="0">
	<div class="overlay" style="opacity: 75%;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center animate-box">
				<div class="counter-entry">
					<span class="icon"><i class="flaticon-ribbon"></i></span>
					<div class="desc">
						<h2 class="font-playfair_italic">Manfaatkan Laman SI PETIK</h2>
						<span class="colorlib-counter-label glacial">Agar uji statistik yang akan Anda lakukan benar, dan menghasilkan kesimpulan yang tepat</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="colorlib-about">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center animate-box">
				<div class="staff-entry">
					<a href="#" class="staff-img" style="background-image: url({{ asset('img/berlin.png') }});"></a>
					<div class="desc">
						<h3>Berliana Devianti Putri</h3>
						<span>Dosen Biostatistika<br>Prodi D-IV Teknologi Radiologi Pencitraan<br>Fakultas Vokasi Universitas Airlangga</span>
						<p></p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a ><i class="icon-twitter"></i></a></li>
								<li><a ><i class="icon-facebook"></i></a></li>
								<li><a ><i class="icon-linkedin"></i></a></li>
								<li><a ><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 text-center animate-box">
				<div class="staff-entry">
					<a href="#" class="staff-img" style="background-image: url({{ asset('img/cendra.png') }});"></a>
					<div class="desc">
						<h3>Cendra Devayana Putra</h3>
						<span>Pakar Pembangun Teknologi Informasi <br>Mahasiswa S2 Informasi Manajemen<br>National Cheng Kung University, Taiwan</span>
						<p></p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a ><i class="icon-twitter"></i></a></li>
								<li><a ><i class="icon-facebook"></i></a></li>
								<li><a ><i class="icon-linkedin"></i></a></li>
								<li><a ><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<!--
			<div class="col-md-4 text-center animate-box">
				<div class="staff-entry">
					<a href="#" class="staff-img" style="background-image: url(images/person1.jpg);"></a>
					<div class="desc">
						<h3>Cendra Devayana</h3>
						<span>Senior Developer</span>
						<p></p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>

<footer id="colorlib-footer">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-3 colorlib-widget">
				<h4>SI PETIK</h4>
				<p>Sistem Penentu Uji Statistik</p>
			</div>
		</div>
	</div>
</footer>
</div>
<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

@stop