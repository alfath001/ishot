<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Idea Action Comp</title>
	<link rel="shortcut icon" type="image/png" href="assets/img/Fav.png"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cssnavseminar.css">
	<link rel="stylesheet" href="css/cssseminar.css">
	<link rel="stylesheet" href="css/seminarcss.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600" rel="stylesheet">
	<style>
	*{
		font-family: 'Source Sans Pro', sans-serif;
	}
	.affix-top .nav>li>a{
		font-weight: bold;
		font-family: Open Sans,sans-serif;
		font-size:13px;
	}
</style>
</head>
<body >
	<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="400">
		<div class="container" style="">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html" style="color: #fff"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index" style="color: #fff; font-weight: bold;">Home</a></li>
					<li class="dropdown">
						<a href="#event" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false" style="color: #fff; font-weight: bold;">Events <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="ideaaction">ISHOT Comp : Idea Action</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="itcase">ISHOT Comp : Business IT Case</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="seminar">ISHOT : Seminar IT</a></li>
						</ul>
					</li>
					<li class="hidden-xs"><a href="#bagian-timeline" style="color: #fff">Timeline</a></li>
					<li class="visible-xs"><a href="#bagian-timeline-xs" style="color: #fff">Timeline</a></li>
					@if (Route::has('login'))
					@if (Auth::check())
					@if(Auth::user()->admin)
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" style="color: #fff; font-weight: bold;" data-toggle="dropdown" role="button" aria-expanded="false">
							ADMIN <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="dpeserta">Halaman Admin</a>
							</li>
							<li>
								<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" style="color: #fff; font-weight: bold;" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->nama }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="/user/{{ Auth::user()->id }}">Profil</a>
								</li>
								<li>
									<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
							@endif
							@else
							<li style=" background: #FB4D80; /* For browsers that do not support gradients */
							background: -webkit-linear-gradient(left top, #FB4D80, #F66930); /* For Safari 5.1 to 6.0 */
							background: -o-linear-gradient(bottom right, #FB4D80, #F66930); /* For Opera 11.1 to 12.0 */
							background: -moz-linear-gradient(bottom right, #FB4D80, #F66930); /* For Firefox 3.6 to 15 */
							background: linear-gradient(to bottom right, #FB4D80, #F66930); /* Standard syntax */ border-radius: 30px;" data-toggle="modal" data-target="#login-modal"><a href="#login-modal" style="color: #fafafa; width: 100px; height: 40px;
							border-radius: 100px; border: 0px; padding-top: 10px; text-align: center; font-family: 'Open Sans', sans-serif;
							font-weight: 600; font-size: 13px;">Login</a></li>
							@endif
							@endif
						</ul>
					</div>
				</div>
			</nav>

			<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Login to Your Account</h1>
						<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
						<br>
						<form method="post" role="form" action="{{ route('login.custom') }}">
							{{ csrf_field() }}
							Email Ketua<input type="text" name="email" placeholder="Email Ketua">
							Password<input type="password" name="password" placeholder="Password"/>
							<input type="submit" name="login" class="login loginmodal-submit" value="Login">
						</form>

						<div class="login-help">
							<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- MODAL REGISTER FORM -->
			<div class="modal fade" id="register-modal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Registration Form</h1>
						<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
						<br>
						<form method="POST" role="form" action="{{ route('regis.custom') }}">
							Nama Ketua<input type="text" name="nama" placeholder="Input Nama Lengkap Ketua">
							Email Ketua<input type="text" name="email" placeholder="Input Email Ketua">
							Asal Sekolah<input type="text" name="sekolah" placeholder="Input Asal Sekolah">
							Password<input type="password" name="password" placeholder="Input Password"/>
							Re-type Password<input type="password" name="password_confirmation" placeholder="Re-type Password"/>
							Nama Team<input type="text" name="namaTeam" placeholder="Input Nama Team">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="submit" name="daftar" class="login loginmodal-submit" value="Daftar">
						</form>
					</div>
				</div>
			</div>
			<!-- MODAL FORGOT PASS FORM -->
			<div class="modal fade" id="forgot-modal" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Forgot Password</h1>
						<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
						<br>
						<p class="text-center">Harap Menghubungi Panitia</p>
					</div>
				</div>
			</div>

			<!-- MODAL COMING SOON -->
			<div class="modal fade" id="modal-coming" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Informasi</h1>
						<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
						<br>
						<p class="text-center">Pendaftaran Dibuka Tanggal 20 Oktober 2017</p>
						<p class="text-center">Prepare Your Team</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-12 col-xs-12 col-sm-12" id="box-image1">
				<img src="seminarfix/ss.png" alt="" id="image1" class="hidden-xs">
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12" align="center" id="content1">
				@if ($errors->has('password'))
				<div class="alert alert-danger alert-dismissible fade in" role="alert" style="width:30%;"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
					<p>Register Unsuccessful</p>
				</span>
				@endif
				@if ($errors->has('username'))
				<span class="help-block">
					<strong>{{ $errors->first('username') }}</strong>
					<p>Register Unsuccessful</p>
				</span>
				@endif
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
					<p>Register Unsuccessful</p>
				</span>
				@endif
				@if ($errors->has('namaTeam'))
				<span class="help-block">
					<strong>{{ $errors->first('namaTeam') }}</strong>
					<p>Register Unsuccessful</p>
				</span>
				</div>
				@endif
                
				<!--<h4>{{ Session::get('message')}}</h4><br>-->

				<h1 class="wow fadeInDown">Prepare Your Team</h1>
				<h1 class="wow fadeInDown">Build Some New Ideas</h1>
				<h4 class="wow fadeInUp">Create Your Own Ideas</h4>
				<h4 class="wow fadeInUp">To Solve Problem In Indonesia</h4>
				<div class="garis wow fadeInLeft"></div>
				<button class="btn btn-info wow fadeInLeft" data-toggle="modal" data-target="#register-modal" href="#" id="button-daftar">Daftar Sekarang</button>
				<br>
				<br>
				<a href="http://bit.ly/RULEBOOK-IDEACTION-2017">
				<button class="btn btn-info wow fadeInLeft" id="button-daftar" style="background: #36D1DC;  /* fallback for old browsers */
				background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
				background: linear-gradient(to right, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
				">Download Rulebook</button>
				</a>
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12" id="content2" align="center" data-offset-top="400">
				<img src="seminarfix/Ellipse2.png" alt="" id="gambar-ellipse1" class="hidden-xs">
				<h1 class="wow fadeInUp">ISHOT 2.0 : Idea Action Competition</h1>
				<p class="wow fadeInUp" style="line-height: 2.5; font-weight: 500;">Merupakan suatu kompetisi ideaction yang mengambil tema <b>“Mewarnai Perindustrian Indonesia dengan Solusi Teknologi Informasi yang Kreatif”</b> yang menguji kemampuan berfikir kritis para generasi muda untuk turut serta berpartisipasi memberikan kontribusi berupa ide-ide kreatif untuk dapat memecahkan permasalahan perindustrian yang ada pada saat ini. Ideaction sendiri yaitu memberikan ide-ide kreatif dan inovatif mengenai sebuah permasalahan yang ada dan diwujudkan dalam bentuk aksi nyata dengan pendekatan teknologi informasi. </p>
				<div class="garis wow fadeInDown"></div>
				<img src="seminarfix/Ellipse.png" alt="" id="dot1" class="hidden-xs">
				<img src="seminarfix/Ellipse.png" alt="" id="dot2" class="hidden-xs">
				<img src="seminarfix/Ellipse.png" alt="" id="dot3" class="hidden-xs">
				<img src="seminarfix/Ellipse3.png" alt="" id="gambar-ellipse2" class="hidden-xs">
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12" id="sec3" data-offset-top="1200">
				<div class="col-md-6 col-sm-6 wow slideInLeft" align="center" id="gambar2">
					<img src="assets/img/develop.png" alt="">
				</div>
				<div class="col-md-6 col-sm-6 wow zoomInLeft" id="box-cap3" data-offset-top="1200">
					<div class="col-md-12" id="judul-cap3">
						<h1>Alur <span>pendaftaran</span></h1>
					</div>
					<div class="col-md-12 col-xs-12 col-sm-12" id="cap3">
						<div class="col-md-1 col-xs-2">
							<img src="seminarfix/paper-plane.png" alt="">
						</div>
						<div class="col-md-11 col-xs-10" id="desc3">
							<p>Mendaftar pada halaman website www.ishot.kbmsi.or.id/ideaaction</p>
						</div>
					</div>
					<div class="col-md-12 col-xs-12" id="cap3">
						<div class="col-md-1 col-xs-2">
							<img src="seminarfix/paper-plane.png" alt="">
						</div>
						<div class="col-md-11 col-xs-10" id="desc3">
							<p>Lakukan pembayaran & konfirmasi bukti pembayaran</p>
						</div>
					</div>
					<div class="col-md-12 col-xs-12" id="cap3">
						<div class="col-md-1 col-xs-2">
							<img src="seminarfix/paper-plane.png" alt="">
						</div>
						<div class="col-md-11 col-xs-10" id="desc3">
							<p>Selamat tim anda berhasil menjadi peserta dari IdeAction Competition</p>
						</div>
					</div>
					<div class="col-md-12 col-xs-12" id="cap3">
						<div class="col-md-1 col-xs-2">
							<img src="seminarfix/paper-plane.png" alt="">
						</div>
						<div class="col-md-11 col-xs-10" id="desc3">
							<p>Untuk info lebih lanjut dapat mendownload Rulebook <a href="http://bit.ly/RULEBOOK-IDEACTION-2017">disini</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12" id="sec4" data-offset-top="1600">
				<h1 class="bold-speakers">Policy</h1>
				<div class="col-md-12 col-sm-12" id="sp">
					<div class="container">
						<div class="judul-sec4 wow slideInLeft">
							<h2>Syarat & Ketentuan</h2>
							<div class="garis-our"></div>
						</div>
						<div class="col-md-12 col-sm-12" id="box-card" data-offset-top="1700">
							<h5 style="font-weight:600; font-size: 18px;">Syarat & Ketentuan</h5>
							<ul>
								<li><p>Peserta merupakan siswa terdaftar SMA/K sederajat</p></li>
								<li><p>Peserta setiap tim terdiri dari 2-3 orang</p></li>
								<li><p>Setiap sekolah boleh mendaftarkan lebih dari 1 tim</p></li>
								<li><p>Setiap tim hanya boleh mengirimkan 1 karya</p></li>
								<li><p>Membayar biaya pendaftaran sebesar Rp 100.000,- per tim</p></li>
								<li><p>Pendaftaran dapat dilakukan melalui website www.ishot.kbmsi.or.id/ideaaction</p></li>
							</ul>
							<br><br>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" id="bagian-timeline" style="background: #DA22FF;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #9733EE, #DA22FF);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #9733EE, #DA22FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			">
			<div class="container">
				<div class="col-lg-12 col-md-12 col-sm-12" style="" id="kotak-jtimeline">
					<h1 style="color: #fff;" id="jtimeline">Timeline</h1>
				</div>
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs visible-md visible-sm" id="dot-carousel">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
				</ol>
				<div class="col-lg-2 col-md-2 col-sm-2 visible-lg" id="kotak-arrow-left">
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" id="arrow-left" style=""></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8" id="box-tl" style="">
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-lg-12 col-md-12 col-sm-12" id="box-tl1">
								<div class="col-lg-12 col-md-12 col-sm-12" id="box-tl2">
									<div class="col-lg-3 col-md-3 col-sm-3" id="kotak-button" >
										<center>
											<button class="btn btn-info" id="button-left" style="">
												<img src="assets/img/attach.png" alt="" class="img-responsive" id="circle-one">
											</button>
											<div class="button-garis"></div>
											<p id="tgl-button1">20/10/2017 <br> -  <br> 09/11/2017</p>
											<p id="capt-button1">Registration</p>
										</center>
									</div>

									<div class="col-lg-3 col-md-3 col-sm-3" id="kotak-button">
										<center>
											<button class="btn btn-info" id="button-mid1" style="">
												<img src="assets/img/tap.png" alt="" class="img-responsive" id="circle-one">
											</button>
											<div class="button-garis2"></div>
											<p id="tgl-button2">27/10/2017 <br> - <br> 10/11/2017</p>
											<p id="capt-button2">Submit Ide</p>
										</center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3" id="kotak-button">
										<center>
											<button class="btn btn-info" id="button-mid2" style="">
												<img src="assets/img/search.png" alt="" class="img-responsive" id="circle-one">
											</button>
											<div class="button-garis3"></div>
											<p id="tgl-button3" style="margin-top: 0px;">10/11/2017</p>
											<p id="capt-button3" style="margin-left: -15px;">Pengumuman<br> Finalis</p>
										</center>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3" id="kotak-button">
										<center>
											<button class="btn btn-info" id="button-right" style="">
												<img src="assets/img/promotion.png" alt="" class="img-responsive" id="circle-one">
											</button>
											<p id="tgl-button4" style="margin-left: 40px; margin-top:0px;">24/11/2017</p>
											<p id="capt-button4" style="margin-left: 20px;">Techical<br> Meeting</p>
										</center>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="col-lg-12 col-md-12 col-sm-12" id="box-tl1" style="">
								<div class="col-lg-12 col-md-12 col-sm-12" id="box-tl2" style="">
									<div class="col-lg-3 col-md-3 col-sm-3" id="kotak-button" style="">
										<center>
											<button class="btn btn-info" id="button-left" style="">
												<img src="assets/img/attach.png" alt="" class="img-responsive" id="circle-one">
											</button>
											<!-- <div class="button-garis"></div> -->
											<p id="tgl-button1">25/11/2017</p>
											<p id="capt-button1" style="margin-left: 15px;">Final</p>
										</center>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 visible-lg" id="kotak-arrow-right" style="">
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" id="arrow-right" style=""></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<!--Carousel xs-->
		<div class="col-lg-12 visible-xs" id="bagian-timeline-xs" style="background: #DA22FF;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #9733EE, #DA22FF);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #9733EE, #DA22FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			">
			<div class="container">
				<div class="col-lg-12" style="" id="kotak-jtimeline">
					<h1 style="" id="jtimeline">Timeline</h1>
				</div>
			</div>
			<div id="Carouselku" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators hidden-xs" id="indicator-xs">
					<li data-target="#Carouselku" data-slide-to="0" class="active"></li>
					<li data-target="#Carouselku" data-slide-to="1"></li>
					<li data-target="#Carouselku" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="col-xs-12" id="box-button-xs">
							<center>
								<button class="btn btn-info" id="button-xs" style="">
									<img src="assets/img/attach.png" alt="" class="img-responsive" id="circle-one">
								</button>
								<p id="capt-xs">Registration</p>
								<p id="tgl-xs">20/10/2017 - 09/11/2017</p>
							</center>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12" id="box-button-xs">
							<center>
								<button class="btn btn-info" id="button-xs" style="">
									<img src="assets/img/tap.png" alt="" class="img-responsive" id="circle-one">
								</button>
								<p id="capt-xs">Submit Ide</p>
								<p id="tgl-xs">27/10/2017 - 10/11/2017</p>
							</center>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12" id="box-button-xs">
							<center>
								<button class="btn btn-info" id="button-xs" style="">
									<img src="assets/img/search.png" alt="" class="img-responsive" id="circle-one">
								</button>
								<p id="capt-xs">Pengumuman Finalis</p>
								<p id="tgl-xs">17/11/2017</p>
							</center>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12" id="box-button-xs">
							<center>
								<button class="btn btn-info" id="button-xs" style="">
									<img src="assets/img/search.png" alt="" class="img-responsive" id="circle-one">
								</button>
								<p id="capt-xs">Technical Meeting</p>
								<p id="tgl-xs">24/11/2017</p>
							</center>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12" id="box-button-xs">
							<center>
								<button class="btn btn-info" id="button-xs" style="">
									<img src="assets/img/search.png" alt="" class="img-responsive" id="circle-one">
								</button>
								<p id="capt-xs">Final</p>
								<p id="tgl-xs">25/11/2017</p>
							</center>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#Carouselku" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#Carouselku" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="container-fluid" id="footer-sponsor">
			<div class="container">
				<div class="col-md-12 col-sm-6">
					<div class="col-md-6" id="box-sponsor">
						<!-- <h2>Sponsored by</h2> <hr class="garis-sponsor">  -->
					<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png" alt="" class="img-responsive" style="width: 80px; height: 30px;">
					<img src="http://flipersshop.com/wp-content/uploads/2013/04/gojek-logo.png" alt="" class="img-responsive" style="width: 80px; height: 50px;">
					<img src="https://www.obatkencingberdarah.xyz/wp-content/uploads/2017/03/logo-tokopedia.png" alt="" class="img-responsive" style="width: 100px; height: 60px;"> -->
				</div>
				<div class="col-md-6" id="box-medpar">
					<h2>Media Partner</h2> <hr class="garis-sponsor"> 
					<img src="assets/img/medpar/1.png" alt="" class="img-responsive" style="width: 100px; height: 80px;">
					<img src="assets/img/medpar/2.png" alt="" class="img-responsive" style="width: 40px; height: 60px;">
					<img src="assets/img/medpar/3.png" alt="" class="img-responsive" style="width: 40px; height: 60px;">
					<img src="assets/img/medpar/4.jpg" alt="" class="img-responsive" style="width: 40px; height: 40px;">
					<img src="assets/img/medpar/5.png" alt="" class="img-responsive" style="width: 50px; height: 50px;">
					<img src="assets/img/medpar/6.jpg" alt="" class="img-responsive" style="width: 50px; height: 50px;">
					<img src="assets/img/medpar/8.png" alt="" class="img-responsive" style="width: 60px; height: 40px;">
					<img src="assets/img/medpar/10.jpg" alt="" class="img-responsive" style="width: 50px; height: 50px;">
					<img src="assets/img/medpar/11.jpg" alt="" class="img-responsive" style="width: 50px; height: 50px;">
					<img src="assets/img/medpar/12.jpg" alt="" class="img-responsive" style="width: 50px; height: 50px;">
					<img src="assets/img/medpar/13.jpg" alt="" class="img-responsive" style="width: 50px; height: 50px;">
					<img src="assets/img/medpar/em/em.png" alt="" class="img-responsive" style="width: 100px; height: 20px;">
					<img src="assets/img/medpar/display/display.png" alt="" class="img-responsive" style="width: 100px; height: 30px;">
					<img src="assets/img/medpar/bcc.png" alt="" class="img-responsive" style="width: 100px; height: 60px;">
				</div>
			</div>	
		</div>
	</div>
	<div class="col-md-12 col-xs-12 col-sm-12" id="box-bottom">

		<img src="seminarfix/Path.png" alt="" id="gbr-back" class="hidden-xs">
		<div class="container" id="kontainer">
			<div class="col-md-12 col-xs-12 col-sm-12" id="isi-contact">	
				<h1 class="bold-contact">Contact</h1>			
				<div class="col-md-12 col-xs-12 col-sm-12" id="judul-c">
					<h2>Contact <span id="us">Us</span></h2>
				</div>
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="col-md-6 col-xs-12 col-sm-6">
						<div class="col-md-12 col-xs-12 col-sm-12" id="box-sosmed">
							<div class="col-md-1 col-xs-1 col-sm-1" id="ikon">
								<img src="seminarfix/line.png" alt="">
							</div>
							<div class="col-md-10 col-xs-10 col-sm-10" id="tw">@pvw6666f</div>
						</div>
						<div class="col-md-12 col-xs-12 col-sm-12" id="box-sosmed">
							<div class="col-md-1 col-xs-1 col-sm-1" id="ikon">
								<img src="assets/img/instagram-logo.png" alt="">
							</div>
							<div class="col-md-10 col-xs-10 col-sm-10" id="tw">ishot.kbmsi</div>
						</div>
						<div class="col-md-12 col-xs-12 col-sm-12" id="box-sosmed">
							<div class="col-md-1 col-xs-1 col-sm-1" id="ikon-phone" style="">
								<i class="glyphicon glyphicon-phone"></i>
							</div>
							<div class="col-md-10 col-xs-10 col-sm-10" id="tw">0877-7603-2811</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-6" id="alamat">
						<p>Fakultas Ilmu Komputer (FILKOM) Universitas Brawijaya Jalan Veteran No.8 Malang, Jawa Timur, Indonesia 65145 <br> E-mail:kbmsi@ub.ac.id</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
	$('#myModal').modal(options);
</script>
<script>
  var msg = '{{Session::get('message')}}';
  var exist = '{{Session::has('message')}}';
  if(exist){
    alert(msg);
  }
</script>

</html>