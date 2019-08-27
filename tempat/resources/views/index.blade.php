<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ISHOT 2.0</title>
	<link rel="shortcut icon" type="image/png" href="img/Fav.png"/>
	<link rel="stylesheet" media="screen" href="particles/index/css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/cssnav.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600" rel="stylesheet">
	<style>
		*{
			font-family: Monserrat, sans-serif;
		}
		@media screen and (min-width: 320px) and (max-width : 480px){
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
		}
		#desc-headblue{
			padding-bottom: 30px; text-align: justify;
		}
		#tombol-cek{
			width: 150px; height: 40px; background-color: #FB4D80; border-radius: 100px; border: 0px; padding-top: 10px; margin-left: 60px;
		}
		#konten2{
			background-color: #fff; padding: 0px; text-align: center; margin-top: 0px; padding-top: 50px; padding-bottom: 50px;
		}
		#container-konten2{
			width: 100%; padding-bottom: 50px; padding: 0;
		}
		#box-konten2{
			background-color: red;
			padding: 0;
		}
		#box-card-konten2{
			padding-top: 50px; background-color: #F2F3F7; padding-bottom: 30px;
		}
		#judul-konten2{
			padding-bottom: 50px; border-bottom: 3px solid;
		}
		#box-card2{
			padding-bottom: 50px;
		}
		#bagian-rc{
			padding-top: 0%;
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
}
@media screen and (min-width: 767px) and (max-width: 1023px){
	.button-garis{
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
	}
	#box-gambar-headblue img{
		position: relative;
		top: -300px;
		left: 200px;
		width: 50%;
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
					<li><a href="index.html" style="color: #000; font-weight: bold;">Home</a></li>
					<li class="dropdown">
						<a href="#event" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false" style="color: #000; font-weight: bold;">Events <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Event1</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Event2</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Event3</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Event4</a></li>
						</ul>
					</li>
					<li><a href="#timeline" style="color: #000; font-weight: bold; margin-right: 10px;">Timeline</a></li>
					<li style=" background: #FB4D80; /* For browsers that do not support gradients */
					background: -webkit-linear-gradient(left top, #FB4D80, #F66930); /* For Safari 5.1 to 6.0 */
					background: -o-linear-gradient(bottom right, #FB4D80, #F66930); /* For Opera 11.1 to 12.0 */
					background: -moz-linear-gradient(bottom right, #FB4D80, #F66930); /* For Firefox 3.6 to 15 */
					background: linear-gradient(to bottom right, #FB4D80, #F66930); /* Standard syntax */ border-radius: 30px;" data-toggle="modal" data-target="#login-modal"><a href="#modallogin" style="color: #fafafa; width: 100px; height: 40px;
					border-radius: 100px; border: 0px; padding-top: 10px; text-align: center; font-family: 'Open Sans', sans-serif;
					font-weight: 600; font-size: 13px;">Login</a></li>
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
				<form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password"/>
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				</form>

				<div class="login-help">
					<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Register</a> - <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgot-modal">Forgot Password</a>
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
				<form>
					<input type="text" name="username" placeholder="Input Username">
					<input type="password" name="pass" placeholder="Input Password"/>
					<input type="password" name="pass" placeholder="Re-type Password"/>
					<input type="text" name="team" placeholder="Input Nama Team">
					<input type="text" name="email" placeholder="Input Email Ketua">
					<input type="text" name="telepon" placeholder="Input No.Telepon Ketua">
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
				<form>
					<input type="text" name="email" placeholder="Input Email Ketua">
					<input type="submit" name="forgot" class="login loginmodal-submit" value="Reset Password">
				</form>
			</div>
		</div>
	</div>

	<div class="col-lg-12" id="headblue" style="padding-left: 0px; padding-right: 0px; overflow: hidden;" >
		<div id="particles-js"></div>
		<div class="col-lg-6 col-xs-12 wow fadeInLeft" id="box-headblue" style="margin-top: 80px;">
			<div class="container" id="konten-headblue" style="">
				<h1 id="judul-headblue" style="color: #EC4242">ISHOT 2.0</h1>
				<p id="desc-headblue" style="color: #000; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nobis iusto laudantium! Porro minima accusamus iusto atque distinctio laudantium consequuntur assumenda, est suscipit nulla. In pariatur, obcaecati animi repudiandae. Autem!</p>
				<a href="#" class="btn btn-info" id="tombol-cek" role="button" style="">Check Now</a>
			</div>
		</div>


		<div class="col-lg-6 col-xs-12" id="box-gambar-headblue" style=""><img id="gambar-headblue" src="img/Group25.png" alt="" style="">
		</div>
	</div>
	<div class="col-lg-12" id="box-konten2" style="">
		<div class="container" id="container-konten2" style="">
			<div class="col-lg-12 col-md-12 col-sm-12" id="konten2" style="">
				<div class="col-lg-12 wow fadeInDown" data-wow-delay="1s" id="judul-konten2">
					<h2>We come with new events</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur illum harum, expedita fugit dolor incidunt, enim facilis, unde voluptas minus delectus ratione repellat accusamus aliquid doloribus soluta atque excepturi consequatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quod aut nihil repudiandae, provident exercitationem nulla esse et tempora dicta! Quae similique atque facere pariatur, cumque animi at suscipit doloremque!</p>
				</div>
				<div class="col-lg-12" id="box-card-konten2" style="">
					<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft" id="box-card2">
						<div class="gambar"><img id="gambar-card" src="img/business-card.png" alt="" style=""></div>
						<div class="desc">
							<h4>Business Case Comp</h4>
							<p id="desc-card" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque dolores repellat, iure. Numquam aut eveniet maiores neque aspernatur<span class="hidden-sm hidden-lg">, accusamus fugit dicta nesciunt commodi nostrum similique a, illum possimus eaque at!</span></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s" id="box-card2">
						<div class="gambar"><img id="gambar-card" src="img/develop.png" alt="" style=""></div>
						<div class="desc">
							<h4>Idea Solving Comp</h4>
							<p id="desc-card" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque dolores repellat, iure. Numquam aut eveniet maiores neque aspernatur<span class="hidden-sm hidden-lg">, accusamus fugit dicta nesciunt commodi nostrum similique a, illum possimus eaque at!</span></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="2s" id="box-card2">
						<div class="gambar"><img id="gambar-card" src="img/audience.png" alt="" style=""></div>
						<div class="desc">
							<h4 id="sem" style="">Seminar IT</h4>
							<p id="desc-card"  style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque dolores repellat, iure. Numquam aut eveniet maiores neque aspernatur<span class="hidden-sm hidden-lg">, accusamus fugit dicta nesciunt commodi nostrum similique a, illum possimus eaque at!</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12" id="bagian-rc" style="">
		<div class="container" id="container-rc" style="">
			<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft"><img src="img/william-iven.png" alt="" id="gambar-rc" style=""></div>
			<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
				<h1 id="judul-rc" style="">Business Case Competition</h1>
				<p id="desc-rc" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi totam hic, voluptates eius illo nemo enim necessitatibus autem aut iusto, odio libero cupiditate, recusandae, deleniti distinctio magnam sapiente! Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<br>
				<p id="desc-rc" class="hidden-sm" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi totam hic, voluptates eius illo nemo enim necessitatibus autem aut iusto, odio libero cupiditate, recusandae, deleniti distinctio magnam sapiente! Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
			</div>
		</div>
		<div class="container" id="container-rc" style="">
			<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
				<h1 id="judul-rc" style="">Idea Solving Competition</h1>
				<p id="desc-rc" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi totam hic, voluptates eius illo nemo enim necessitatibus autem aut iusto, odio libero cupiditate, recusandae, deleniti distinctio magnam sapiente! Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<br>
				<p id="desc-rc" class="hidden-sm" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi totam hic, voluptates eius illo nemo enim necessitatibus autem aut iusto, odio libero cupiditate, recusandae, deleniti distinctio magnam sapiente! Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight"><img src="img/william-iven-1.png" alt="" id="gambar-rc" style=""></div>
		</div>
		<div class="container" id="container-rc" style="">
			<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft"><img src="img/william-iven-2.png" alt="" id="gambar-rc" style=""></div>
			<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
				<h1 id="judul-rc" ><a href="seminar.html">Seminar IT</a></h1>
				<p id="desc-rc" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi totam hic, voluptates eius illo nemo enim necessitatibus autem aut iusto, odio libero cupiditate, recusandae, deleniti distinctio magnam sapiente! Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
				<br>
				<p id="desc-rc" class="hidden-sm" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi totam hic, voluptates eius illo nemo enim necessitatibus autem aut iusto, odio libero cupiditate, recusandae, deleniti distinctio magnam sapiente! Numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
			</div>
		</div>
	</div>
	<div class="col-lg-12" id="bagian-quote" style="">
		<div class="container" id="container-quote" style="">
			<div class="col-lg-12">
				<center>
					<p id="quote" style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, quod reprehenderit, excepturi eius modi voluptatum debitis blanditiis! Quos aperiam repudiandae voluptatum, sunt beatae, eveniet eaque reprehenderit amet odio sint earum. Lore	m ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odio rerum distinctio est ullam fugiat iure, libero cum pariatur vitae perferendis, aliquid vel eligendi aspernatur. Blanditiis tempore ea accusantium ipsam.</p>
				</center>
			</div>
		</div>
	</div>

	<div class="col-lg-12 hidden-xs" id="bagian-timeline">
		<div class="container">
			<div class="col-lg-12" style="" id="kotak-jtimeline">
				<h1 style="" id="jtimeline">Timeline</h1>
			</div>
		</div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
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
											<img src="img/new-file.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis"></div>
										<p id="tgl-button1">13/09/2017</p>
										<p id="capt-button1">Registration</p>
									</center>
								</div>

								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-mid1" style="">
											<img src="img/glasses.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis2"></div>
										<p id="tgl-button2">13/09/2017</p>
										<p id="capt-button2">Registration</p>
									</center>
								</div>
								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-mid2" style="">
											<img src="img/spider-web.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis3"></div>
										<p id="tgl-button3">13/09/2017</p>
										<p id="capt-button3">Registration</p>
									</center>
								</div>
								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-right" style="">
											<img src="img/at.png" alt="" class="img-responsive" id="circle-one">
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
											<img src="img/new-file.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis"></div>
										<p id="tgl-button1">13/09/2017</p>
										<p id="capt-button1">Registration</p>
									</center>
								</div>

								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-mid1" style="">
											<img src="img/glasses.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis2"></div>
										<p id="tgl-button2">13/09/2017</p>
										<p id="capt-button2">Registration</p>
									</center>
								</div>
								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-mid2" style="">
											<img src="img/spider-web.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis3"></div>
										<p id="tgl-button3">13/09/2017</p>
										<p id="capt-button3">Registration</p>
									</center>
								</div>
								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-right" style="">
											<img src="img/at.png" alt="" class="img-responsive" id="circle-one">
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
											<img src="img/new-file.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis"></div>
										<p id="tgl-button1">13/09/2017</p>
										<p id="capt-button1">Registration</p>
									</center>
								</div>

								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-mid1" style="">
											<img src="img/glasses.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis2"></div>
										<p id="tgl-button2">13/09/2017</p>
										<p id="capt-button2">Registration</p>
									</center>
								</div>
								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-mid2" style="">
											<img src="img/spider-web.png" alt="" class="img-responsive" id="circle-one">
										</button>
										<div class="button-garis3"></div>
										<p id="tgl-button3">13/09/2017</p>
										<p id="capt-button3">Registration</p>
									</center>
								</div>
								<div class="col-lg-3" id="kotak-button" style="">
									<center>
										<button class="btn btn-info" id="button-right" style="">
											<img src="img/at.png" alt="" class="img-responsive" id="circle-one">
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
	</div>

	<!--Carousel xs-->
	<div class="col-lg-12 visible-xs" id="bagian-timeline-xs">
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
								<img src="img/new-file.png" alt="" class="img-responsive" id="circle-one">
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
								<img src="img/new-file.png" alt="" class="img-responsive" id="circle-one">
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
								<img src="img/new-file.png" alt="" class="img-responsive" id="circle-one">
							</button>
							<p id="capt-xs">Registration</p>
							<p id="tgl-xs">13/09/2017</p>
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


	<div class="col-lg-12" style="background-color: #ECECEC">
		<div class="container">
			<div class="footer" style="padding-bottom: 2%; padding-top: 2%;">
				<img src="img/instagram-logo.png" alt="" style="padding-left:2%;">
				<img src="img/line.png" alt="" style="padding-left: 0.1%">
				<img src="img/twitter.png" alt="" style="padding-left: 0.2%">
				<img src="img/group22.png" alt="" class="pull-right">
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
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
	$('#myModal').modal(options);
</script>

</html>