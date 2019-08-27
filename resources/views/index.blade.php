<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<title>ISHOT 2.0</title>

	<link rel="shortcut icon" type="image/png" href="assets/img/Fav.png"/>
	<link rel="stylesheet" media="screen" href="{!! asset('particles/index/css/style.css') !!}">
	<link rel="stylesheet" href="{!! asset('assets/css/master.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}"> 
	<link rel="stylesheet" href="{!! asset('css/animate.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/cssnav.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<style>
	*{
		font-family: Monserrat, sans-serif;
	}
	@media screen and (min-width: 320px) and (max-width : 480px){
	    .affix-top .nav>li>a{
	        color:#000 !important;
	    }
			/*#headblue{
				background-image: url('img/tim.png'); background-repeat: no-repeat center center fixed; height: 500px; -webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				

				}*/
				#bagian-timeline-xs{				background-image: url('img/Group13.png'); background-repeat: no-repeat center center fixed; height: 350px; -webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover; color: #9290A1; padding-left: 0; padding-right: 0;
			}
			#box-gambar-headblue img{
				width: 100%;
				position: absolute;
				top: 0px;
				left: -50px;
			}
			#box-headblue{
				padding: 0;
			}
			#konten-headblue{
				width: 100%; color: #fff;
			}
			#judul-headblue{
				padding-bottom: 0; padding-top: 100px;
				text-align:center;
			}
			#desc-headblue{
				padding-bottom: 30px; text-align: center;
			}
			#tombol-cek{
				width: 150px; height: 40px; background-color: #FB4D80; border-radius: 100px; border: 0px; padding-top: 10px;
				margin:0px auto;
				text-align:center;
				display:block;
			}
			#konten2{
				background-color: #fff; padding: 0px; text-align: center; margin-top: 0px; padding-top: 50px; padding-bottom: 50px;
			}
			#container-konten2{
				width: 100%; padding-bottom: 50px; padding: 0;
			}
			#box-konten2{
				/*background-color: red;*/
				padding: 0;
			}
			#box-card-konten2{
				padding-top: 50px; background-color: #F2F3F7; padding-bottom: 30px;
			}
			#judul-konten2{
				padding-bottom: 50px; border-bottom: 0px solid;
			}
			#box-card2{
				padding-bottom: 50px;
			}
			#bagian-rc{
				padding-top: 15%;
			}
			#container-rc{
				padding-bottom: 10%;
				padding: 0;
			}
			#judul-rc{
				color: #F48FB5; border-left: 5px solid #3C3874; padding-left: 10px; font-size: 130%;
			}
			#bagian-timeline{				background-image: url('img/Group13.png'); background-repeat: no-repeat center center fixed; height: 900px; -webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; color: #9290A1; padding-left: 0; padding-right: 0;
		}
		#box-tl{
			padding-right: 0; padding-left: 0;
		}
		#box-tl1{
			height: 900px; z-index: 1; padding-left: 0; padding-right: 0; 
		}
		#box-tl2{
			padding-right:0; padding-left: 0; height: 255px;width: 80%; position: relative; left: 70px; border-bottom: 3px dotted transparent; padding-top: 50px;
		}
		#kotak-button{
			border: 1px solid transparent ; padding: 10px;
		}
		#button-left{
			border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 0px 0px 0px grey; padding: 10px; position: relative; top: 0px; left: -35px;
		}
		#button-mid1{
			border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 0px 0px 0px grey; padding: 10px; position: relative; top: 0px; left:-35px;
		}
		#button-mid2{
			border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 0px 0px 0px grey; padding: 10px; position: relative; top: 0px; left:-35px;
		}
		#button-right{
			border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 0px 0px 0px grey; padding: 10px; position: relative; top: 0px; right: 0px; left: -35px;
		}
		#dot-carousel{
			position: relative;
			border: 1px solid transparent;
			top: 800px;
		}
		#kotak-jtimeline{
			margin-bottom: -80px;
		}
		#jtimeline{
			border-left: 5px solid #fefefe; padding-left: 10px; margin-top: 40px;
		}
		.footer img{
			margin-top: 10px;
		}
	}
	@media screen and (min-width: 767px) and (max-width: 1023px){
		/*.button-garis{
			width: 50px;
			height: 0px;
			border: 1px dotted #fefefe;
			border-radius: 100px;
			position: absolute;
			top: 230px;
			left: 120px;
		}

		.button-garis2{
			width: 50px;
			height: 0px;
			border: 1px dotted #fefefe;
			border-radius: 100px;
			position: absolute;
			top: 108px;
			left: 300px;
		}

		.button-garis3{
			width: 50px;
			height: 0px;
			border: 1px dotted #fefefe;
			border-radius: 100px;
			position: absolute;
			top: -15px;
			left: 480px;
		}
		#button-left{
			border-radius: 100px;
			width: 100px; 
			height: 100px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey; 
			padding: 10px; 
			position: relative; 
			top: 165px; 
			left: -250px;
		}
		#button-left:hover, #button-mid1:hover, #button-mid2:hover, #button-right:hover{
			border-radius: 100px;
			width: 100px; 
			height: 100px; 
			background-color: #7D89DD ; 
			box-shadow: 1px 2px 20px grey; 
			-webkit-transition: 0.3s ease-in-out;
		}
		#button-mid1{
			border-radius: 100px;
			width: 100px;
			height: 100px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey;  
			padding: 10px; 
			position: relative; 
			top: 50px; 
			left: -70px;
		}
		#button-mid2{
			border-radius: 100px;
			width: 100px; 
			height: 100px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey;  
			padding: 10px; 
			position: relative; 
			top: -70px; 
			left: 110px;
		}
		#button-right{
			border-radius: 100px;
			width: 100px; 
			height: 100px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey;   
			padding: 10px; 
			position: relative; 
			top: -190px; 
			right: -290px;
		}
		#capt-button1{
			color: #fff;
			position: absolute;
			top: 290px;
			left: 20px;
		}
		#tgl-button1{
			color: #fff;
			position: absolute;
			top : 310px;
			left: 20px;
		}
		#capt-button2{
			color: #fff;
			position: absolute;
			top: 170px;
			left: 200px;
		}
		#tgl-button2{
			color: #fff;
			position: absolute;
			top : 190px;
			left: 200px;
		}
		#capt-button3{
			color: #fff;
			position: absolute;
			top: 46px;
			left: 380px;
		}
		#tgl-button3{
			color: #fff;
			position: absolute;
			top : 66px;
			left: 380px;
		}
		#capt-button4{
			color: #fff;
			position: absolute;
			top: -75px;
			left: 560px;
		}
		#tgl-button4{
			color: #fff;
			position: absolute;
			top : -55px;
			left: 560px;
			}*/
			#box-gambar-headblue img{
				position: relative;
				top: -200px;
				width: 40%;
				margin-left:0px;
				margin:0px auto;
				display:block;
				
			}
			#konten-headblue{
			    text-align:center !important;
			}
			#desc-headblue{
			    text-align:center !important;
			}
			#gambar-headblue{
			    padding-left:0px !important;
			}
			#sem{
				padding-bottom: 20px;
			}
			#desc-card{
				text-align: center;
			}
			#dot-timeline-bot1{
				position: relative;top: -20px;
			}
			#judul-rc{
				color: #F48FB5; border-left: 5px solid #3C3874; padding-left: 10px; font-size: 150%;
			}
			#bagian-timeline{				background-image: url('img/Group13.png'); background-repeat: no-repeat center center fixed; height: 500px; -webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; color: #9290A1; padding-left: 0; padding-right: 0;
		}
		#box-tl{
			padding-right: 0; padding-left: 0;
		}
		#box-tl1{
			height: 500px; z-index: 1; padding-left: 0; padding-right: 0; 
		}
		#box-tl2{
			padding-right:0; padding-left: 0; height: 255px;width: 80%; position: relative; left: 70px;
		}
		#kotak-button{
			border: 1px solid transparent ; padding: 10px;
		}
	/*#button-left{
		border-radius: 100px;width: 60px; height: 60px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: 90px; left: -220px;
	}
	#button-mid1{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: 70px; left: -70px;
	}
	#button-mid2{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: -255px; left: 100px;
	}
	#button-right{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: -275px; right: -240px;
		}*/
	}
	@media only screen and (min-width: 1024px) and (max-width: 1024px){
		#box-gambar-headblue img{
			position: relative;
			top: -260px;
			left: -150px;
		}
		#capt-button1{
			color: #fff;
			position: absolute;
			top: 350px;
			left: 25px;
		}
		#tgl-button1{
			color: #fff;
			position: absolute;
			top : 370px;
			left: 27px;
		}
		#capt-button2{
			color: #fff;
			position: absolute;
			top: 175px;
			left: 245px;
		}
		#tgl-button2{
			color: #fff;
			position: absolute;
			top : 195px;
			left: 245px;
		}
		#capt-button3{
			color: #fff;
			position: absolute;
			top: 6px;
			left: 475px;
		}
		#tgl-button3{
			color: #fff;
			position: absolute;
			top : 25px;
			left: 475px;
		}
		#capt-button4{
			color: #fff;
			position: absolute;
			top: -165px;
			left: 705px;
		}
		#tgl-button4{
			color: #fff;
			position: absolute;
			top : -145px;
			left: 705px;
		}
		.button-garis{
			width: 50px;
			height: 0px;
			border: 1px dotted #fefefe;
			border-radius: 100px;
			position: absolute;
			top: 260px;
			left: 150px;
		}

		.button-garis2{
			width: 50px;
			height: 0px;
			border: 1px dotted #fefefe;
			border-radius: 100px;
			position: absolute;
			top: 90px;
			left: 370px;
		}

		.button-garis3{
			width: 50px;
			height: 0px;
			border: 1px dotted #fefefe;
			border-radius: 100px;
			position: absolute;
			top: -83px;
			left: 600px;
		}
		#button-left{
			border-radius: 100px;
			width: 120px; 
			height: 120px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey; 
			padding: 10px; 
			position: relative; 
			top: 165px; 
			left: -43px;
		}
		#button-left:hover, #button-mid1:hover, #button-mid2:hover, #button-right:hover{
			border-radius: 100px;
			width: 120px; 
			height: 120px; 
			background-color: #7D89DD ; 
			box-shadow: 1px 2px 20px grey; 
			-webkit-transition: 0.3s ease-in-out;
		}
		#button-mid1{
			border-radius: 100px;
			width: 120px;
			height: 120px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey;  
			padding: 10px; 
			position: relative; 
			top: 165px; 
			left: -10px;
		}
		#button-mid2{
			border-radius: 100px;
			width: 120px; 
			height: 120px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey;  
			padding: 10px; 
			position: relative; 
			top: 165px; 
			left: 10px;
		}
		#button-right{
			border-radius: 100px;
			width: 120px; 
			height: 120px; 
			background-color: #fff; 
			box-shadow: 1px 2px 20px grey;   
			padding: 10px; 
			position: relative; 
			top: 165px; 
			right: -40px;
		}
		#box-gambar-headblue{
			padding-top: 0px;
		}
		#gambar-headblue{
			margin-top: -200px; z-index: 1; width: 50%; margin-left: 470px;
		}
		#box-headblue{
			padding-top: 125px; padding: 125px;
		}
		#konten-headblue{
			width: 100%; color: #fff;
		}
		#judul-headblue{
			padding-bottom: 30px;
		}
		#desc-headblue{
			padding-bottom: 30px; text-align: justify;
		}
		#tombol-cek{
			width: 150px; height: 40px; background-color: #FB4D80; border-radius: 100px; border: 0px; padding-top: 10px;
		}

		#bagian-timeline{				background-image: url('img/Group13.png'); background-repeat: no-repeat center center fixed; height: 500px; -webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover; color: #9290A1; padding-left: 0; padding-right: 0;
	}
	#box-tl{
		padding-right: 0; padding-left: 0;
	}
	#box-tl1{
		height: 500px; z-index: 1; padding-left: 0; padding-right: 0; 
	}
	#box-tl2{
		padding-right:0; padding-left: 0; height: 255px;width: 80%; position: relative; left: 100px;
	}
	#kotak-button{
		border: 1px solid transparent ; padding: 10px;
	}
	#button-left{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: 170px; left: -350px;
	}
	#button-mid1{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: 0px; left: -130px;
	}
	#button-mid2{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: -170px; left: 100px;
	}
	#button-right{
		border-radius: 100px;width: 150px; height: 150px; background-color: #fff; box-shadow: 5px 5px 5px grey; padding: 10px; position: relative; top: -340px; right: -330px;
	}
}
</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
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
					<li><a href="/" style="color: #000; font-weight: bold;">Home</a></li>
					<li class="dropdown">
						<a href="#event" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false" style="color: #000; font-weight: bold;">Events <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="ideaaction">ISHOT Comp : Idea Action</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="itcase">ISHOT Comp : Business IT Case</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="seminar">ISHOT : Seminar IT</a></li>					
						</ul>
					</li>
					<!--<li><a href="#bagian-timeline" style="color: #000; font-weight: bold; margin-right: 10px;">Timeline</a></li>-->
					@if (Route::has('login'))
					@if (Auth::check())
					@if(Auth::user()->admin)
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" style="color: #000; font-weight: bold;" data-toggle="dropdown" role="button" aria-expanded="false">
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
							<a href="#" class="dropdown-toggle" style="color: #000; font-weight: bold;" data-toggle="dropdown" role="button" aria-expanded="false">
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
							<!--<li style=" background: #FB4D80; /* For browsers that do not support gradients */-->
							<!--background: -webkit-linear-gradient(left top, #FB4D80, #F66930); /* For Safari 5.1 to 6.0 */-->
							<!--background: -o-linear-gradient(bottom right, #FB4D80, #F66930); /* For Opera 11.1 to 12.0 */-->
							<!--background: -moz-linear-gradient(bottom right, #FB4D80, #F66930); /* For Firefox 3.6 to 15 */-->
							<!--background: linear-gradient(to bottom right, #FB4D80, #F66930); /* Standard syntax */ border-radius: 30px;" data-toggle="modal" data-target="#modal-coming"><a href="/#modallogin" style="color: #fafafa; width: 100px; height: 40px;-->
							<!--border-radius: 100px; border: 0px; padding-top: 10px; text-align: center; font-family: 'Open Sans', sans-serif;-->
							<!--font-weight: 600; font-size: 13px;">Login</a></li>-->
							@endif
							@endif
						</ul>
					</div>
				</div>
			</nav>

			<!-- MODAL LOGIN FORM -->
			<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Login to Your Account</h1>
						<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
						<br>
						<form method="post" role="form" action="{{ route('login.custom') }}">
							{{ csrf_field() }}
							<input type="text" name="email" placeholder="Email">
							<input type="password" name="password" placeholder="Password">
							<input type="submit" name="login" class="login loginmodal-submit" value="Login">
						</form>

						<div class="login-help">
							<!-- <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Register</a> -  --><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgot-modal">Forgot Password</a>
						</div>
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
   <!--         @if (session('message'))-->
			<!--<div onload="alert('sssss')">-->
   <!--                 {{ Session::get('message')}}-->
   <!--         </div>-->
   <!--         @endif-->

			<div class="col-lg-12" id="headblue" style="padding-left: 0px; padding-right: 0px; overflow: hidden;" >
				<div id="particles-js"></div>
				<div class="col-lg-6 col-xs-12 visible-xs" id="box-gambar-headblue" style="">
					<img id="gambar-headblue" src="{{ ('assets/img/group25.png') }}" alt="">
				</div>
				<div class="col-lg-6 col-xs-12 wow fadeInLeft" id="box-headblue" style="margin-top: 80px;">
					<div class="container" id="konten-headblue" style="">
						<h1 id="judul-headblue" style="color: #EC4242">ISHOT 2.0</h1>
						<p id="desc-headblue" style="color: #000; text-transform: uppercase;">Make Your Trends Through Technology <br> <span style="font-style: italic;">#TechnologyForLife</span>
						</p>
						<a href="#box-konten2" class="btn btn-info" id="tombol-cek" role="button" style="">Check Now</a>
					</div>
				</div>


				<div class="col-lg-6 col-xs-12 hidden-xs" id="box-gambar-headblue" style="">
					<img id="gambar-headblue" src="{{ ('assets/img/group25.png') }}" alt="">
				</div>
			</div>
			<div class="col-lg-12" id="box-konten2" style="">
				<div class="container" id="container-konten2" style="">
					<div class="col-lg-12 col-md-12 col-sm-12" id="konten2" style="">
						<div class="col-lg-12 wow fadeInDown" data-wow-delay="1s" id="judul-konten2">
							<h2>We come with new events</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur illum harum, expedita fugit dolor incidunt, enim facilis, unde voluptas minus delectus ratione repellat accusamus aliquid doloribus soluta atque excepturi consequatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quod aut nihil repudiandae, provident exercitationem nulla esse et tempora dicta! Quae similique atque facere pariatur, cumque animi at suscipit doloremque!</p> -->
						</div>
						<div class="col-lg-12" id="box-card-konten2" style="">
							<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft" id="box-card2">
								<div class="gambar"><img id="gambar-card" src="assets/img/business-card.png" alt="" style=""></div>
								<div class="desc">
									<h4>Business IT Case Comp</h4>
									<p id="desc-card" style="">Business IT Case Competition ISHOT 2.0 merupakan kompetisi case-solving yang diselenggarakan oleh Eksekutif Mahasiswa Sistem Informasi Fakultas Ilmu Komputer Universitas Brawijaya.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s" id="box-card2">
								<div class="gambar"><img id="gambar-card" src="assets/img/develop.png" alt="" style=""></div>
								<div class="desc">
									<h4>Idea Action Comp</h4>
									<p id="desc-card" style="">Merupakan suatu kompetisi ideaction yang mengambil tema “Mewarnai Perindustrian Indonesia dengan Solusi Teknologi Informasi yang Kreatif”</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="2s" id="box-card2">
								<div class="gambar"><img id="gambar-card" src="assets/img/audience.png" alt="" style=""></div>
								<div class="desc">
									<h4 id="sem" style="">Seminar IT</h4>
									<p id="desc-card"  style="">Merupakan puncak dari rangkaian acara ISHOT (Information System Hot Trends) yang membahas secara lengkap tentang IOT(Internet of Things) pada dunia bisnis dengan tema IOT For The Business.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12" id="bagian-rc" style="">
				<div class="container" id="container-rc" style="">
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft"><img src="{{ ('assets/img/william-iven.png') }}" alt="" id="gambar-rc" style=""></div>
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
						<h1 id="judul-rc" style=""><a href="itcase">Business IT Case Competition</a></h1>
						<p id="desc-rc" style="line-height: 2.5;">Business IT Case Competition ISHOT 2.0 merupakan kompetisi case-solving yang diselenggarakan oleh Eksekutif Mahasiswa Sistem Informasi Fakultas Ilmu Komputer Universitas Brawijaya. Peserta dari Business IT Case Competition ISHOT 2.0 yaitu mahasiswa aktif program studi Sistem Informasi Fakultas Ilmu Komputer Universitas Brawijaya. Dalam kompetisi ini, kemampuan penyelesaian masalah peserta dalam menganalisis dan menyelesaikan kasus bisnis akan diuji.</p>
					</div>
				</div>
				<div class="container" id="container-rc" style="">
				    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight visible-xs"><img src="{{ ('assets/img/william-iven-1.png') }}" alt="" id="gambar-rc" style=""></div>
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
						<h1 id="judul-rc" style="">Idea Action Competition</h1>
						<p id="desc-rc" style="line-height: 2.5">Merupakan suatu kompetisi ideaction yang mengambil tema “Mewarnai Perindustrian Indonesia dengan Solusi Teknologi Informasi yang Kreatif” yang menguji kemampuan berfikir kritis para generasi muda untuk turut serta berpartisipasi memberikan kontribusi berupa ide-ide kreatif untuk dapat memecahkan permasalahan perindustrian yang ada pada saat ini. Ideaction sendiri yaitu memberikan ide-ide kreatif dan inovatif mengenai sebuah permasalahan yang ada dan diwujudkan dalam bentuk aksi nyata dengan pendekatan teknologi informasi.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight hidden-xs"><img src="{{ ('assets/img/william-iven-1.png') }}" alt="" id="gambar-rc" style=""></div>
				</div>
				<div class="container" id="container-rc" style="">
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft"><img src="{{ ('assets/img/william-iven-2.png') }}" alt="" id="gambar-rc" style=""></div>
					<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
						<h1 id="judul-rc" ><a href="seminar.html">Seminar IT</a></h1>
						<p id="desc-rc" style="line-height: 2.5;">Merupakan puncak dari rangkaian acara ISHOT (Information System Hot Trends) yang membahas secara lengkap tentang IOT(Internet of Things) pada dunia bisnis dengan tema IOT For The Business.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-12" id="bagian-quote" style="">
				<div class="container" id="container-quote" style="">
					<div class="col-lg-12">
						<center>
							<p id="quote" style="">Innovations that are guided by smallholder farmers, adapted to local circumstances, and sustainable for the economy and environment will be necessary to ensure food security in the future. - Bill Gates
							</p>
						</center>
					</div>
				</div>
			</div>

{{-- 			<div class="col-lg-12 hidden-xs" id="bagian-timeline" style="background-image: url('assets/img/Group13.png');">
				<br>
				<div class="container">
					<div class="col-lg-12" style="" id="kotak-jtimeline">
						<h1 style="" id="jtimeline">Timeline</h1>
					</div>
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!- Indicators ->
					<ol class="carousel-indicators visible-xs visible-md visible-sm" id="dot-carousel">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="col-lg-2 visible-lg" id="kotak-arrow-left" style="">
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" id="arrow-left" style=""></span>
							<span class="sr-only">Previous</span>
						</a>
					</div>
					<div class="col-lg-8" id="box-tl" style="">
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-lg-12" id="box-tl1" style="">
									<div class="col-lg-12" id="box-tl2" style="">
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-left" style="">
													<img src="{{('assets/img/attach.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis"></div>
												<p id="tgl-button1">13/09/2017</p>
												<p id="capt-button1">Registration</p>
											</center>
										</div>

										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-mid1" style="">
													<img src="{{('assets/img/tap.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis2"></div>
												<p id="tgl-button2">13/09/2017</p>
												<p id="capt-button2">Registration</p>
											</center>
										</div>
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-mid2" style="">
													<img src="{{('assets/img/search.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis3"></div>
												<p id="tgl-button3">13/09/2017</p>
												<p id="capt-button3">Registration</p>
											</center>
										</div>
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-right" style="">
													<img src="{{('assets/img/promotion.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<p id="tgl-button4">13/09/2017</p>
												<p id="capt-button4">Registration</p>
											</center>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="col-lg-12" id="box-tl1" style="">
									<div class="col-lg-12" id="box-tl2" style="">
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-left" style="">
													<img src="{{('assets/img/attach.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis"></div>
												<p id="tgl-button1">13/09/2017</p>
												<p id="capt-button1">Registration</p>
											</center>
										</div>

										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-mid1" style="">
													<img src="{{('assets/img/tap.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis2"></div>
												<p id="tgl-button2">13/09/2017</p>
												<p id="capt-button2">Registration</p>
											</center>
										</div>
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-mid2" style="">
													<img src="{{('assets/img/search.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis3"></div>
												<p id="tgl-button3">13/09/2017</p>
												<p id="capt-button3">Registration</p>
											</center>
										</div>
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-right" style="">
													<img src="{{('assets/img/promotion.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<p id="tgl-button4">13/09/2017</p>
												<p id="capt-button4">Registration</p>
											</center>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="col-lg-12" id="box-tl1" style="">
									<div class="col-lg-12" id="box-tl2" style="">
										<div class="col-lg-3" id="kotak-button">
											<center>
												<button class="btn btn-info" id="button-left" style="">
													<img src="{{('assets/img/attach.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis"></div>
												<p id="tgl-button1">13/09/2017</p>
												<p id="capt-button1">Registration</p>
											</center>
										</div>

										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-mid1" style="">
													<img src="{{('assets/img/tap.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis2"></div>
												<p id="tgl-button2">13/09/2017</p>
												<p id="capt-button2">Registration</p>
											</center>
										</div>
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-mid2" style="">
													<img src="{{('assets/img/search.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<div class="button-garis3"></div>
												<p id="tgl-button3">13/09/2017</p>
												<p id="capt-button3">Registration</p>
											</center>
										</div>
										<div class="col-lg-3" id="kotak-button" style="">
											<center>
												<button class="btn btn-info" id="button-right" style="">
													<img src="{{('assets/img/promotion.png')}}" alt="" class="img-responsive" id="circle-one">
												</button>
												<p id="tgl-button4">13/09/2017</p>
												<p id="capt-button4">Registration</p>
											</center>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 visible-lg" id="kotak-arrow-right" style="">
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" id="arrow-right" style=""></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div> --}}

			<!--Carousel xs-->
			{{-- <div class="col-lg-12 visible-xs" id="bagian-timeline-xs">
				<div class="container">
					<div class="col-lg-12" style="" id="kotak-jtimeline">
						<h1 style="" id="jtimeline">Timeline</h1>
					</div>
				</div>
				<div id="Carouselku" class="carousel slide" data-ride="carousel">
					<!- Indicators ->
					<ol class="carousel-indicators hidden-xs" id="indicator-xs">
						<li data-target="#Carouselku" data-slide-to="0" class="active"></li>
						<li data-target="#Carouselku" data-slide-to="1"></li>
						<li data-target="#Carouselku" data-slide-to="2"></li>
					</ol> --}}

					<!-- Wrapper for slides -->
	{{-- 				<div class="carousel-inner">
						<div class="item active">
							<div class="col-xs-12" id="box-button-xs">
								<center>
									<button class="btn btn-info" id="button-xs" style="">
										<img src="{{ ('assets/img/new-file.png') }}" alt="" class="img-responsive" id="circle-one">
									</button>
									<p id="capt-xs">Registration</p>
									<p id="tgl-xs">13/09/2017</p>
								</center>
							</div>
						</div>

						<div class="item">
							<div class="col-xs-12" id="box-button-xs">
								<center>
									<button class="btn btn-info" id="button-xs" style="">
										<img src="{{ ('assets/img/new-file.png') }}" alt="" class="img-responsive" id="circle-one">
									</button>
									<p id="capt-xs">Registration</p>
									<p id="tgl-xs">13/09/2017</p>
								</center>
							</div>
						</div>

						<div class="item">
							<div class="col-xs-12" id="box-button-xs">
								<center>
									<button class="btn btn-info" id="button-xs" style="">
										<img src="{{ ('assets/img/new-file.png') }}" alt="" class="img-responsive" id="circle-one">
									</button>
									<p id="capt-xs">Registration</p>
									<p id="tgl-xs">13/09/2017</p>
								</center>
							</div>
						</div>
					</div>

					<!- Left and right controls ->
					<a class="left carousel-control" href="#Carouselku" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#Carouselku" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div> --}}

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

	<div class="col-lg-12" style="background-color: #ECECEC">
		<div class="container">
			<div class="footer" style="padding-bottom: 2%; padding-top: 2%;">
			    <a href="https://www.instagram.com/ishot.kbmsi/">
				<img src="{{ ('assets/img/instagram-logo.png') }}" alt="" style="padding-left:2%;">
				</a>
				<a href="http://line.me/ti/p/~@pvw6666f"><img src="{{ ('assets/img/line.png') }}" alt="" style="padding-left: 0.1%">
				</a>
				<!--<img src="{{ ('assets/img/twitter.png') }}" alt="" style="padding-left: 0.2%">-->
				<a href="#top">
				<img src="{{ ('assets/img/Group22.png') }}" alt="" class="pull-right">
				</a>
			</div>
		</div>
	</div>
</body>
<!-- scripts -->
<script src="particles/particles.js"></script>
<script src="particles/index/js/app.js"></script>

<!-- stats.js -->
<script>
	var count_particles, stats, update;
	stats = new Stats;
	stats.setMode(0);
	stats.domElement.style.position = 'absolute';
	stats.domElement.style.left = '0px';
	stats.domElement.style.top = '0px';
	document.body.appendChild(stats.domElement);
	count_particles = document.querySelector('.js-count-particles');
	update = function() {
		stats.begin();
		stats.end();
		if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
			count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
		}
		requestAnimationFrame(update);
	};
	requestAnimationFrame(update);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
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