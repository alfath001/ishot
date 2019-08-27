<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ISHOT</title>

	<!-- Css Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" media="screen" href="particles/index/css/style.css">
	<link rel="stylesheet" href="css/cssnav.css">
	<link rel="stylesheet" href="css/custom.css">
	
	<!-- Proile Css -->
	<link rel="stylesheet" href="css/profile.css">

	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic" rel="stylesheet" type="text/css">

	<style>
		#mdl-long {
			padding: 30px;
			max-width: 100%;
			min-width: 700px;
			width: 100% !important;
			background-color: #F7F7F7;
			margin: 0 auto;
			border-radius: 2px;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			font-family: roboto;
		}
		@media only screen and (max-width: 480px) {
			#mdl-long{
				max-width: 100%;
				min-width: 100%;
				overflow: overlay;
			}
		}

		@media only screen and (max-width: 1024px) {
			#mdl-long{
				max-width: 100%;
				min-width: 100%;
				width: 100% !important;
				overflow: overlay;
			}
		}
		/*@media only screen and (max-width: 768px) {
			#mdl-long{
				max-width: 100%;
				min-width: 100%;
				width: 100% !important;
			}
		}*/
		@media (min-width: 768px) and (max-width: 1024px) {
			#mdl-long{
				max-width: 100%;
				min-width: 100%;
				/*width: 100% !important;*/
				overflow: overlay;
			}
		}
		/*@media only screen and (max-width: 1199px) {
			#mdl-long{
				max-width: 100%;
				min-width: 100%;
				width: 100% !important;
			}
		}*/
		.b-image{
			background-position: center top;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-color: rgba(0, 0, 0, 0);
			background-image: url(img/ishot/bg-1.png);
		}

		.affix-top {
			border-bottom: 1px solid #eee;
		}
		.affix-top .nav>li>a{
			font-size: 14px;
			font-family: Open Sans,sans-serif;
		}
	
</style>
</head>
<body>
	<div id="particles-js"></div>
	<div class="container">
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
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row user-menu-container square">
				<div class="col-md-7 user-details">
					<div class="row coralbg white">
						<div class="col-md-6 no-pad">
							<div class="user-pad">
								<h3>Welcome back,<!--  Orions Team --></h3>
								<h4 class="white"><i class="fa fa-check-circle-o"></i> Username Team</h4>
							</div>
						</div>
						<div class="col-md-6 no-pad">
							<div class="user-image">
								<img src="img/3.jpg" class="img-responsive thumbnail">
							</div>
						</div>
					</div>
					<div class="row overview">
						<div class="col-md-4 user-pad text-center">
							<h3>TGL JOIN</h3>
							<h3>01/02/2017</h3>
						</div>
						<div class="col-md-4 user-pad text-center">
							<h3>LAST LOGIN</h3>
							<h3>01/02/2017</h3>
						</div>
						<div class="col-md-4 user-pad text-center">
							<h3>STATUS</h3>
							<h3 class="green">TELAH BAYAR</h3>
						</div>
					</div>
				</div>
				<div class="col-md-1 user-menu-btns">
					<div class="btn-group-vertical square" id="responsive">
						<a href="#" class="btn btn-block btn-default active">
							<i class="fa fa-cloud-upload fa-3x"></i>
							<!-- <i class="fa fa-id-card-o fa-3x"></i> -->
						</a>
						<a href="#" class="btn btn-default">
							<i class="fa fa-id-card-o fa-3x"></i>

						</a>
						<a href="#" class="btn btn-default">
							<i class="fa fa-user coral-o fa-3x"></i>
						</a>
						<a href="#" class="btn btn-default">
							<i class="fa fa-laptop fa-3x"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4 user-menu user-pad">
					<div class="user-menu-content active">
						<h2 class="text-center">
							Pembayaran
						</h2>
						<center><i class="fa fa-cloud-upload fa-4x"></i></center>
						<div class="share-links">
							<center>
								<form action="">
									<div class="form-group">
										<label for="exampleInputFile">Upload Resi</label>
										<input type="file" id="exampleInputFile" style="margin-left: 30px; position: relative;">
									</div>
								</form>	
							</center>
							<center>
								<button type="button" class="btn btn-labeled btn-warning" href="#">
									<span class="btn-label"><i class="fa fa-cloud-upload"></i></span>Upload
								</button>
								<p class="help-block">Harap melakukan konfirmasi setelah melakukan pembayaran</p>
							</center>
						</div>
					</div>
					<div class="user-menu-content">
						<h3>
							Basic Biodata
						</h3>
						<ul class="user-menu-list">
							<li>
								<h4><i class="fa fa-bandcamp coral"></i> Nama Team : Orion</h4>
							</li>
							<li>
								<h4><i class="fa fa-tasks coral"></i> Ide Team : Smart City</h4>
							</li>
							<li>
								<h4><i class="fa fa-puzzle-piece coral"></i> Deskripsi Ide : Lorem ipsum dolor sit amet</h4>
							</li>
							<li>
								<h4><i class="fa fa-envelope-o coral"></i> Email Ketua : email@gmail.com</h4>
							</li>
							<center>
								<button type="button" class="btn btn-labeled btn-success" href="#" data-toggle="modal" data-target="#over-team">
									<span class="btn-label"><i class="fa fa-edit"></i></span>View Team
								</button><br class="visible-xs"><br class="visible-xs">
								<button type="button" class="btn btn-labeled btn-info" href="#" href="#" data-toggle="modal" data-target="#edit-team">
									<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
							</center>

						</ul>
					</div>
					<div class="user-menu-content">
						<h3>Biodata Ketua</h3>
						<ul class="user-menu-list">
							<li>
								<h4><i class="fa fa-user-o coral"></i> Nama Ketua : Anto Griezmann</h4>
							</li>
							<li>
								<h4><i class="fa fa-vcard-o coral"></i> NIM Ketua : 155150407111050</h4>
							</li>
							<li>
								<h4><i class="fa fa-location-arrow coral"></i> Alamat : Griyashanta</h4>
							</li>
							<li>
								<h4><i class="fa fa-envelope-o coral"></i> Email Ketua : grizvak@gmail.com</h4>
							</li>
							<li>
								<h4><i class="fa fa-mobile-phone coral"></i> Telepon : 082257486645</h4>
							</li>
							<li>
								<h4><i class="fa fa-paper-plane-o coral"></i> ID Line : griezvak</h4>
							</li>
							<center>
								<button type="button" class="btn btn-labeled btn-info" href="#" data-toggle="modal" data-target="#edit-ketua">
									<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
							</center>
						</ul>
					</div>
					<div class="user-menu-content">
						<h3>
							Skills
						</h3>
						<ul class="user-menu-list">
							<li>
								<h4><i class="fa fa-html5 coral"></i> HTML :<span class="coral"><strong> 5/5</strong></span></h4>
							</li>
							<li>
								<h4><i class="fa fa-css3 coral"></i> CSS :<span class="coral"><strong> 4/5</strong></span></h4>
							</li>
							<li>
								<h4><i class="fa fa-jsfiddle coral"></i> JS :<span class="coral"><strong> 3/5</strong></span></h4>
							</li>
							<center>
								<button type="button" class="btn btn-labeled btn-info" href="#" data-toggle="modal" data-target="#edit-skills">
									<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
							</center>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL OVERVIEW TEAM -->
		<div class="modal fade" id="over-team" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="loginmodal-container" id="mdl-long">
					<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase;">Overview Team</h1>
					<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div><br>
					<table class="table table-striped table-responsive hidden-xs">
						<th class="text-center">Photo</th>
						<th class="text-center">Nama</th>
						<th class="text-center">NIM</th>
						<th class="text-center">Alamat</th>
						<th class="text-center">Email</th>
						<th class="text-center">Telepon</th>
						<th class="text-center">ID Line</th>
						<th class="text-center">Aksi</th>
						<tr>
							<td><img src="img/a.jpg" alt="" class="img-responsive img-circle" style="min-width: 50px; height: 50px;" id="p-photo"></td>
							<td><h6 class="p-caption">Nama Ketua</h6></td>
							<td><h6 class="p-caption">NIM Ketua</h6></td>
							<td><h6 class="p-caption">Alamat Ketua</h6></td>
							<td><h6 class="p-caption">Email Ketua</h6></td>
							<td><h6 class="p-caption">Telepon Ketua</h6></td>
							<td><h6 class="p-caption">ID Line Ketua</h6></td>
							<td><button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target="	#edit-ketua" style="margin-top:5px;">
								<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
							</button>
						</td>
					</tr>
					<tr>
						<td><img src="img/a.jpg" alt="" class="img-responsive img-circle" style="width: 50px; height: 50px;" id="p-photo"></td>
						<td><h6 class="p-caption">Nama Anggota</h6></td>
						<td><h6 class="p-caption">NIM Anggota</h6></td>
						<td><h6 class="p-caption">Alamat Anggota</h6></td>
						<td><h6 class="p-caption">Email Anggota</h6></td>
						<td><h6 class="p-caption">Telepon Anggota</h6></td>
						<td><h6 class="p-caption">ID Line Anggota</h6></td>
						<td><button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target=" #edit-anggota" style="margin-top:5px;">
							<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
						</button>
					</td>
				</tr>
			</table>
			<table class="table table-responsive visible-xs">
				<th class="text-center">Photo</th>
				<th class="text-center">Nama</th>
				<th class="text-center">NIM</th>
				<th class="text-center">Alamat</th>
				<th class="text-center">Email</th>
				<th class="text-center">Telepon</th>
				<th class="text-center">ID Line</th>
				<th class="text-center">Aksi</th>
				<tr>
					<td><img src="img/a.jpg" alt="" class="img-responsive img-circle" style="width: 50px; height: 50px;" id="p-photo"></td>
					<td><h6 class="p-caption">Nama Ketua</h6></td>
					<td><h6 class="p-caption">NIM Ketua</h6></td>
					<td><h6 class="p-caption">Alamat Ketua</h6></td>
					<td><h6 class="p-caption">Email Ketua</h6></td>
					<td><h6 class="p-caption">Telepon Ketua</h6></td>
					<td><h6 class="p-caption">ID Line Ketua</h6></td>
					<td><button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target="	#edit-ketua" style="margin-top:5px;">
						<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
					</button>
				</td>
			</tr>
			<tr>
				<td><img src="img/a.jpg" alt="" class="img-responsive img-circle" style="width: 50px; height: 50px;" id="p-photo"></td>
				<td><h6 class="p-caption">Nama Anggota</h6></td>
				<td><h6 class="p-caption">NIM Anggota</h6></td>
				<td><h6 class="p-caption">Alamat Anggota</h6></td>
				<td><h6 class="p-caption">Email Anggota</h6></td>
				<td><h6 class="p-caption">Telepon Anggota</h6></td>
				<td><h6 class="p-caption">ID Line Anggota</h6></td>
				<td><button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target=" #edit-anggota" style="margin-top:5px;">
					<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
				</button>
			</td>
		</tr>
	</table>
</div>
</div>
</div>

<!-- MODAL EDIT TEAM -->
<div class="modal fade" id="edit-team" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase;">Edit Team</h1>
			<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
			<br>
			<form>
				<input type="text" name="username" placeholder="Nama Team">
				<input type="text" name="username" placeholder="Ide Team">
				<input type="text" name="username" placeholder="Deskripsi Ide">
				<input type="submit" name="daftar" class="login loginmodal-submit" value="Update">
			</form>
		</div>
	</div>
</div>

<!-- MODAL EDIT SKILLS -->
<div class="modal fade" id="edit-skills" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase; color: #070707;">Edit Skills</h1>
			<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
			<br>
			<form>
				<p class="help-block"><strong>HTML</strong></p>
				<input type="number" name="username" placeholder="5" min="1" max="5">
				<p class="help-block"><strong>CSS</strong></p>
				<input type="number" name="username" placeholder="4" min="1" max="5">
				<p class="help-block"><strong>JAVASCRIPT</strong></p>
				<input type="number" name="username" placeholder="3" min="1" max="5">
				<input type="submit" name="daftar" class="login loginmodal-submit" value="Update">
			</form>
		</div>
	</div>
</div>

<!-- MODAL EDIT KETUA -->
<div class="modal fade" id="edit-ketua" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase;">Edit Biodata Ketua</h1>
			<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
			<br>
			<form>
				<div class="form-group">
					<label for="exampleInputFile">Upload Foto</label>
					<input type="file" id="exampleInputFile" style="margin-left: 30px; position: relative;">
				</div>
				<input type="text" name="username" placeholder="Nama Ketua">
				<input type="text" name="username" placeholder="NIM Ketua">
				<input type="text" name="username" placeholder="Alamat">
				<input type="email" name="username" placeholder="Email Ketua">
				<input type="text" name="username" placeholder="No Telepon">
				<input type="text" name="username" placeholder="ID Line">
				<input type="submit" name="daftar" class="login loginmodal-submit" value="Update">
			</form>
		</div>
	</div>
</div>

<!-- MODAL EDIT ANGGOTA -->
<div class="modal fade" id="edit-anggota" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase;">Edit Biodata Anggota</h1>
			<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
			<br>
			<form>
				<div class="form-group">
					<label for="exampleInputFile">Upload Foto</label>
					<input type="file" id="exampleInputFile" style="margin-left: 30px; position: relative;">
				</div>
				<input type="text" name="username" placeholder="Nama Anggota">
				<input type="text" name="username" placeholder="NIM Anggota">
				<input type="text" name="username" placeholder="Alamat">
				<input type="email" name="username" placeholder="Email">
				<input type="text" name="username" placeholder="No Telepon">
				<input type="text" name="username" placeholder="ID Line">
				<input type="submit" name="daftar" class="login loginmodal-submit" value="Update">
			</form>
		</div>
	</div>
</div>
<!-- JAVASCRIPT BOOTSTRAP -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="particles/particles.js"></script>
<script src="particles/index/js/app.js"></script>

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
<script>
	$(document).ready(function() {
		var $btnSets = $('#responsive'),
		$btnLinks = $btnSets.find('a');
		$btnLinks.click(function(e) {
			e.preventDefault();
			$(this).siblings('a.active').removeClass("active");
			$(this).addClass("active");
			var index = $(this).index();
			$("div.user-menu>div.user-menu-content").removeClass("active");
			$("div.user-menu>div.user-menu-content").eq(index).addClass("active");
		});
	});

	$( document ).ready(function() {
		$("[rel='tooltip']").tooltip();    
		$('.view').hover(
			function(){
	            $(this).find('.caption').slideDown(250); //.fadeIn(250)
	        },
	        function(){
	        	    $(this).find('.caption').slideUp(250); //.fadeOut(205)
	        	}
	        	); 
	});
</script>
</body>
</html>
