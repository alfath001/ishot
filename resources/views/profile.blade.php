<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ISHOT</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/Fav.png') }}"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Css Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" media="screen" href="{{ asset('particles/index/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/cssnav.css')}}">
	<link rel="stylesheet" href="{{ asset('css/custom.css')}}">
	
	<!-- Proile Css -->
	<link rel="stylesheet" href="{{ asset('css/profile.css')}}">

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
			background-image: url(assets/img/ishot/bg-1.png);
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
						<li><a href="/" style="color: #000; font-weight: bold;">Home</a></li>
						<li class="dropdown">
							<a href="#event" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false" style="color: #000; font-weight: bold;">Events <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/ideaaction">ISHOT Comp : Idea Action</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="/itcase">ISHOT Comp : Business IT Case</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="/seminar">ISHOT : Seminar IT</a></li>
							</ul>
						</li>
						<!--<li><a href="#timeline" style="color: #000; font-weight: bold; margin-right: 10px;">Timeline</a></li>-->
						 @if (Route::has('login'))
			                @if (Auth::check())
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
						@endif
						
					</ul>
				</div>
			</div>
		</nav>


		<div class="container">
			<div class="row user-menu-container square">
				<div class="col-md-7 user-details">

				@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif
				@if ($errors->has('resi'))
				<span class="help-block">
					<strong>{{ $errors->first('resi') }}</strong>
				</span>
				@endif
				@if ($errors->has('file'))
				<span class="help-block">
					<strong>{{ $errors->first('file') }}</strong>
				</span>
				@endif
				
				<!--<div class="alert alert-success">-->
    <!--                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
    <!--                <strong>Success!</strong> {{ Session::get('message')}}-->
    <!--            </div>-->
                    
				<!--<h4>{{ Session::get('message')}}</h4><br>-->

					<div class="row coralbg white">
						<div class="col-md-6 no-pad">
							<div class="user-pad">
								<h3>Welcome back,<!--  Orions Team --></h3>
							@if(isset($user))
								<h4 class="white"><i class="fa fa-check-circle-o"></i> {{ $user->nama }}</h4>
							</div>
						</div>
						<div class="col-md-6 no-pad">
							<div class="user-image">
								<img src="{{ asset('assets/img/3.jpg')}}" class="img-responsive thumbnail">
							</div>
						</div>
					</div>
					<div class="row overview">
						<div class="col-md-4 user-pad text-center">
							<h3>TGL JOIN</h3>
							<h3>{{ date('d/m/Y', strtotime($user->created_at)) }}</h3>
						</div>
						<div class="col-md-4 user-pad text-center">
						    @if ($user->status)
						    @if ($user->kbmsi)
						    <h3>SOAL IT CASE</h3>
						    <br/>
							<a href="https://drive.google.com/file/d/0Bx_FsXCBmsfBVXhkNHFaVTF6SXM/view?usp=sharing" class="btn btn-primary">Download Soal</a>
							@endif
							@endif
						</div>
						<div class="col-md-4 user-pad text-center">
							<h3>STATUS</h3>
							@if ($user->status)
							<h3 class="green" style="color:green;">TELAH DIKONFIRMASI</h3>
							@else
							  @if (isset($user->resi))
							<h3 class="green" style="color:blue;">BELUM DIKONFIRMASI</h3>
							  @else
							<h3 class="green" style="color:orange;">BELUM BAYAR</h3>  
							  @endif
							@endif
						</div>
					</div>
				</div>
				<div class="col-md-1 user-menu-btns">
					<div class="btn-group-vertical square" id="responsive">
						<a href="#" class="btn btn-block btn-default">
							<i class="fa fa-cloud-upload fa-3x"></i>
							<!-- <i class="fa fa-id-card-o fa-3x"></i> -->
						</a>
						<a href="#" class="btn btn-default active">
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
					<div class="user-menu-content">
						<h2 class="text-center">
							Pembayaran
						</h2>
						<center><i class="fa fa-cloud-upload fa-4x"></i></center>
						<div class="share-links">
							<form action="/team/{{ $user->kode }}" method="post" enctype="multipart/form-data">
							<center>
									<div class="form-group">
										<label for="exampleInputFile">Upload Resi</label>
										<input type="file" id="exampleInputFile" name="resi" style="margin-left: 30px; position: relative;">
									</div>
							</center>
							<center>
								<input type="hidden" name="no" value="1">
								<input type="hidden" name="_method" value="put">
 			                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-labeled btn-warning">
									<span class="btn-label"><i class="fa fa-cloud-upload"></i></span>Upload
								</button>
								<br>
								<p class="help-block" style="font-size:11px; font-weight:bold;">Klik tombol Upload setelah memilih file!</p>
								<p class="help-block" style="font-size:11px;">format file harus berupa <b>.jpeg, .jpg, .png</b></p>
								
							</center>
							</form>		
						</div>
					</div>
					<div class="user-menu-content active">
						<h3>
							Basic Biodata
						</h3>
						<ul class="user-menu-list">
							<li>
								<h4><i class="fa fa-bandcamp coral"></i> Nama Team : {{ $user->namaTeam }}</h4>
							</li>
							@if (!$user->kbmsi)
							<li>
								<h4><i class="fa fa-tasks coral"></i> Ide Team : {{ $user->judul }}</h4>
							</li>
						    @endif
							@if (!$user->kbmsi)
							<li>
								<h4><i class="fa fa-puzzle-piece coral"></i> Sekolah : {{ $user->sekolah }}</h4>
							</li>
							@endif
							<li>
								<h4><i class="fa fa-envelope-o coral"></i> Email Ketua : {{ $user->email }}</h4>
							</li>
							<center>
								<button type="button" class="btn btn-labeled btn-success" href="#" data-toggle="modal" data-target="#over-team">
									<span class="btn-label"><i class="fa fa-edit"></i></span>View Team
								</button><br class="visible-xs"><br class="visible-xs">
							
							@if ( !$user->veran )	
								<button type="button" class="btn btn-labeled btn-info" href="#" href="#" data-toggle="modal" data-target="#edit-team">
									<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
							</center>
							<br>
							<center>
	                          <button type="button" class="btn btn-labeled btn-primary" href="#" data-toggle="modal" data-target="#veran">
	                          	<span class="btn-label"><i class="fa fa-check"></i></span>Verifikasi Anggota
	                      	  </button>
	                        @endif
	                    	</center>
						</ul>
					</div>
					<div class="user-menu-content">
						<h3>Biodata Ketua</h3>
						<ul class="user-menu-list">
							<li>
								<h4><i class="fa fa-user-o coral"></i> Nama Ketua : {{ $user->namaKetua }}</h4>
							</li>
							<li>
							@if ($user->kbmsi)
								<h4><i class="fa fa-vcard-o coral"></i> NIM Ketua : {{ $user->nim }}</h4>
							@else	
								<h4><i class="fa fa-vcard-o coral"></i> NIS Ketua : {{ $user->nim }}</h4>
							@endif
							</li>
							<li>
								<h4><i class="fa fa-envelope-o coral"></i> Email Ketua : {{ $user->email }}</h4>
							</li>
							<li>
								<h4><i class="fa fa-mobile-phone coral"></i> Telepon : {{ $user->noTelp }}</h4>
							</li>
							<li>
								<h4><i class="fa fa-paper-plane-o coral"></i> ID Line : {{ $user->idLine }}</h4>
							</li>
							@if (!$user->verket)
							<center>
								<button type="button" class="btn btn-labeled btn-info" href="#" data-toggle="modal" data-target="#edit-ketua">
									<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
								<button type="submit" class="btn btn-labeled btn-warning" href="#" data-toggle="modal" data-target="#reset-pass">
									<span class="btn-label"><i class="fa fa-key"></i></span>Ganti Password
								</button>
							</center>
							<br>
							<center>
	                          <button type="button" class="btn btn-labeled btn-primary" href="#" data-toggle="modal" data-target="#verket">
	                          	<span class="btn-label"><i class="fa fa-check"></i></span>Verifikasi Ketua
	                      	  </button>
	                    	</center>
	                        @endif
						</ul>
					</div>
					<div class="user-menu-content">
						<h3>
							Upload Ide
						</h3>
						<div class="share-links">
							<center>
						@if ($user->status && $user->veran && $user->verket)	
							@if ($user->kbmsi)
								<form  action="/itcase/{{ $user->idide }}" method="post" enctype="multipart/form-data">
							@else
								<form  action="/ideaaction/{{ $user->idide }}" method="post" enctype="multipart/form-data">
							@endif
									<div class="form-group">
										<!--<label for="exampleInputFile">Upload Ide</label>-->
										<!--<br><br>-->
										<!--<input type="file" name="file" id="exampleInputFile" style="margin-left: 30px; position: relative;">-->
										<iframe src="https://bccdrophere-filkom.ub.ac.id/ishot2017" height="300" width="300"></iframe>
									</div>
							</center>
							<center>
								<input type="hidden" name="no" value="1">
								<input type="hidden" name="_method" value="put">
 			                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<!--<button type="submit" class="btn btn-labeled btn-info">-->
								<!--	<span class="btn-label"><i class="fa fa-cloud-upload"></i></span>Upload-->
								<!--</button>-->
								<br>
								<!--<p class="help-block" style="font-size:13px; font-weight:bold;">Klik tombol Upload setelah memilih file!</p>-->
								<p class="help-block" style="font-size:13px;">format file : <br> IdeAction (.pptx) <br> IT Case (.pdf)</p>
								<br>
								<!--<p class="help-block">Upload ide kamu dengan format .pdf</p>-->
							</center>
								</form>
						@else
							<center>
								<h4>Harap Melakukan Pembayaran</h4>
								<br>
								<h4>Pastikan Status Anda "Sudah Dikonfirmasi"</h4>
								<br>
								<h4>Melakukan Verifikasi Data Anggota</h4>
								<br>
								<h4>Melakukan Verifikasi Data Ketua</h4>
							</center>
						@endif
						</div>
					</div>
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
						<th class="text-center">Nama</th>
						@if ($user->kbmsi)
						<th class="text-center">NIM</th>
						@else
						<th class="text-center">NIS</th>
						@endif
						<th class="text-center">Email</th>
						<th class="text-center">ID Line</th>
						<th class="text-center">Aksi</th>
						<tr>
							<td><h6 class="p-caption">{{$user->namaKetua}}</h6></td>
							<td><h6 class="p-caption">{{$user->nim}}</h6></td>
							<td><h6 class="p-caption">{{$user->email}}</h6></td>
							<td><h6 class="p-caption">{{$user->idLine}}</h6></td>
							<td>@if ($user->verket)
								<h6 class="p-caption">XX</h6>
								@else
								<button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target="	#edit-ketua" style="margin-top:5px;">
								<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
								@endif
							</td>
						</tr>
						<tr>
							@if (isset($user->emailan1))
							<td><h6 class="p-caption">{{$user->namaan1}}</h6></td>
							<td><h6 class="p-caption">{{$user->niman1}}</h6></td>
							<td><h6 class="p-caption">{{$user->emailan1}}</h6></td>
							<td><h6 class="p-caption">{{$user->idLinean1}}</h6></td>
							@else
							<td><h6 class="p-caption">Nama Anggota 1</h6></td>
							<td>@if ($user->kbmsi)
								<h6 class="p-caption">NIM Anggota 1</h6>
								@else
								<h6 class="p-caption">NIS Anggota 1</h6>
								@endif
							</td>
							<td><h6 class="p-caption">Email Anggota 1</h6></td>
							<td><h6 class="p-caption">ID Line Anggota 1</h6></td>
							@endif
							<td>@if ($user->veran)
								<h6 class="p-caption">XX</h6>
								@else
								<button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target=" #edit-anggota1" style="margin-top:5px;">
								<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
								@endif
							</td>
						</tr>
						@if($user->veran && !isset($user->emailan2))
						@else
						<tr>
							@if (isset($user->emailan2))
							<td><h6 class="p-caption">{{$user->namaan2}}</h6></td>
							<td><h6 class="p-caption">{{$user->niman2}}</h6></td>
							<td><h6 class="p-caption">{{$user->emailan2}}</h6></td>
							<td><h6 class="p-caption">{{$user->idLinean2}}</h6></td>
							@else
							<td><h6 class="p-caption">Nama Anggota 2</h6></td>
							<td>@if ($user->kbmsi)
								<h6 class="p-caption">NIM Anggota 1</h6>
								@else
								<h6 class="p-caption">NIS Anggota 1</h6>
								@endif
							</td><td><h6 class="p-caption">Email Anggota 2</h6></td>
							<td><h6 class="p-caption">ID Line Anggota 2</h6></td>
							@endif
							<td>@if ($user->veran)
								<h6 class="p-caption">XX</h6>
								@else
								<button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target=" #edit-anggota2" style="margin-top:5px;">
								<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
								</button>
								@endif
							</td>
						</tr>
						@endif
				</table>
				<table class="table table-responsive visible-xs">
					<th class="text-center">Nama</th>
					@if ($user->kbmsi)
					<th class="text-center">NIM</th>
					@else
					<th class="text-center">NIS</th>
					@endif
					<th class="text-center">Email</th>
					<th class="text-center">ID Line</th>
					<th class="text-center">Aksi</th>
					<tr>
						<td><h6 class="p-caption">{{$user->namaKetua}}</h6></td>
						<td><h6 class="p-caption">{{$user->nim}}</h6></td>
						<td><h6 class="p-caption">{{$user->email}}</h6></td>
						<td><h6 class="p-caption">{{$user->idLine}}</h6></td>
						<td>@if ($user->verket)
							<h6 class="p-caption">XX</h6>
							@else
							<button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target="	#edit-ketua" style="margin-top:5px;">
							<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
							</button>
							@endif
						</td>
					</tr>
					<tr>
						@if (isset($user->emailan1))
						<td><h6 class="p-caption">{{$user->namaan1}}</h6></td>
						<td><h6 class="p-caption">{{$user->niman1}}</h6></td>
						<td><h6 class="p-caption">{{$user->emailan1}}</h6></td>
						<td><h6 class="p-caption">{{$user->idLinean1}}</h6></td>
						@else
						<td><h6 class="p-caption">Nama Anggota 1</h6></td>
						<td>@if ($user->kbmsi)
							<h6 class="p-caption">NIM Anggota 1</h6>
							@else
							<h6 class="p-caption">NIS Anggota 1</h6>
							@endif
						</td>
						<td><h6 class="p-caption">Email Anggota 1</h6></td>
						<td><h6 class="p-caption">ID Line Anggota 1</h6></td>
						@endif
						<td>@if ($user->veran)
							<h6 class="p-caption">XX</h6>
							@else
							<button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target=" #edit-anggota1" style="margin-top:5px;">
							<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
							</button>
							@endif
						</td>
					</tr>
					<tr>
						@if (isset($user->emailan2))
						<td><h6 class="p-caption">{{$user->namaan2}}</h6></td>
						<td><h6 class="p-caption">{{$user->niman2}}</h6></td>
						<td><h6 class="p-caption">{{$user->emailan2}}</h6></td>
						<td><h6 class="p-caption">{{$user->idLinean2}}</h6></td>
						@else
						<td><h6 class="p-caption">Nama Anggota 2</h6></td>
						<td>@if ($user->kbmsi)
							<h6 class="p-caption">NIM Anggota 1</h6>
							@else
							<h6 class="p-caption">NIS Anggota 1</h6>
							@endif
						</td>
						<td><h6 class="p-caption">Email Anggota 2</h6></td>
						<td><h6 class="p-caption">ID Line Anggota 2</h6></td>
						@endif
						<td>@if ($user->veran)
							<h6 class="p-caption">XX</h6>
							@else
							<button type="button" class="btn btn-labeled btn-info" href="#" data-dismiss="modal" data-toggle="modal" data-target=" #edit-anggota2" style="margin-top:5px;">
							<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
							</button>
							@endif
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="modal fade" id="veran" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Verifikasi Anggota</h1>
                <div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
                <br><br>
                <center>
                	<h2 style="font-size:16px; font-weight:bold;">Yakin Ingin Melakukan Verifikasi Anggota ?</h2>
                	<p style="padding-top:10px; font-size:13px; color:#000;">Data yang telah diverifikasi tidak dapat diubah kembali</p>
                </center>
                <br><br>
                <form action="/team/{{ $user->kode }}" method="post">
                    <input type="hidden" name="no" value="5">
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="submit" name="Verifikasi" value="Verifikasi Anggota" class="btn btn-primary">
                </form>
                <center>
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            	</center>
            </div>
        </div>
    </div>

	<div class="modal fade" id="verket" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Verifikasi Ketua</h1>
                <div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
                <br><br>
                <center>
                	<h2 style="font-size:16px; font-weight:bold;">Yakin Ingin Melakukan Verifikasi Ketua ?</h2>
                	<p style="padding-top:10px; font-size:13px; color:#000;">Data yang telah diverifikasi tidak dapat diubah kembali</p>
                </center>
                <br><br>
                <form action="/team/{{ $user->kode }}" method="post">
                    <input type="hidden" name="no" value="6">
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="submit" name="Verifikasi" value="Verifikasi Ketua" class="btn btn-primary">
                </form>
                <center>
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            	</center>
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
	 			<form action="/team/{{ $user->kode }}" method="post">
					Nama Team <input type="text" name="namaTeam" placeholder="Nama Team" value="{{ $user->namaTeam }}">
					@if (!$user->kbmsi)
					Judul Ide <input type="text" name="judul" placeholder="Ide Team" value="{{ $user->judul }}">
					@endif
					@if (!$user->kbmsi)
					Sekolah <input type="text" name="sekolah" placeholder="Sekolah" value="{{ $user->sekolah }}">
					@endif
					<input type="hidden" name="si" value="{{ $user->kbmsi }}">
	                <input type="hidden" name="ek" value="{{ $user->email }}">
	                <input type="hidden" name="no" value="2">
	                <input type="hidden" name="_method" value="put">
	                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="update" class="login loginmodal-submit" value="Update">
				</form>
			</div>
		</div>
	</div>

	<!-- MODAL RESET PASS-->
        <div class="modal fade" id="reset-pass" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Ganti Password</h1>
                    <div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
                    <br>
                    <form action="/user/{{ $user->id }}" method="post">
                        Password Lama <input type="password" name="oldpass" placeholder="Input Password Lama">
                        Password Baru <input type="password" name="password" placeholder="Input Password Baru">
                        Retype Password Baru <input type="password" name="password_confirmation" placeholder="Re-Input Password Baru">
                        <input type="hidden" name="spe" value="passpr">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="setnewpass" class="login loginmodal-submit" value="Set Password">
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
				<form action="/team/{{ $user->kode }}" method="post">
					Nama Ketua <input type="text" name="nama" placeholder="Nama Ketua" value="{{ $user->namaKetua }}">
					@if ($user->kbmsi)
					NIM Ketua <input type="text" name="nim" placeholder="NIM Ketua" value="{{ $user->nim }}">
					@else
					NIS Ketua <input type="text" name="nim" placeholder="NIS Ketua" value="{{ $user->nim }}">
					@endif
					Email Ketua <input type="email" name="email" placeholder="Email Ketua" value="{{ $user->email }}">
					No Telepon Ketua <input type="text" name="noTelp" placeholder="No Telepon" value="{{ $user->noTelp }}">
					ID Line Ketua <input type="text" name="idLine" placeholder="ID Line" value="{{ $user->idLine }}">
	                <input type="hidden" name="no" value="4">
	                <input type="hidden" name="nk" value="{{ $user->namaKetua }}">
	                <input type="hidden" name="ek" value="{{ $user->email }}">
	                <input type="hidden" name="nt" value="{{ $user->namaTeam }}">
	                <input type="hidden" name="_method" value="put">
	                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="update" class="login loginmodal-submit" value="Update">
				</form>
			</div>
		</div>
	</div>

	<!-- MODAL EDIT ANGGOTA -->
	<div class="modal fade" id="edit-anggota1" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase;">Edit Biodata Anggota</h1>
				<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
				<br>
				<form action="/team/{{ $user->kode }}" method="post">
					Nama Anggota <input type="text" name="namaan1" placeholder="Nama Anggota 1" value="{{$user->namaan1}}">
					@if ($user->kbmsi)
					NIM Anggota <input type="text" name="niman1" placeholder="NIM Anggota 1" value="{{$user->niman1}}">
					@else
					NIS Anggota <input type="text" name="niman1" placeholder="NIS Anggota 1" value="{{$user->niman1}}">
					@endif
					Email Anggota <input type="email" name="emailan1" placeholder="Email Anggota 1" value="{{$user->emailan1}}">
					ID Line Anggota <input type="text" name="idLinean1" placeholder="ID Line Anggota 1" value="{{$user->idLinean1}}">
	                <input type="hidden" name="no" value="7">
	                <input type="hidden" name="nt" value="{{ $user->namaTeam }}">
	                <input type="hidden" name="_method" value="put">
	                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="daftar" class="login loginmodal-submit" value="Update">
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="edit-anggota2" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1 style="font-family:Open Sans; font-weight: bold; text-transform: uppercase;">Edit Biodata Anggota</h1>
				<div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
				<br>
				<form action="/team/{{ $user->kode }}" method="post">
					Nama Anggota <input type="text" name="namaan2" placeholder="Nama Anggota 2" value="{{$user->namaan2}}">
					@if ($user->kbmsi)
					NIM Anggota <input type="text" name="niman2" placeholder="NIM Anggota 2" value="{{$user->niman2}}">
					@else
					NIS Anggota <input type="text" name="niman2" placeholder="NIS Anggota 2" value="{{$user->niman2}}">
					@endif
					Email Anggota <input type="email" name="emailan2" placeholder="Email Anggota 2" value="{{$user->emailan2}}">
					ID Line Anggota <input type="text" name="idLinean2" placeholder="ID Line Anggota 2" value="{{$user->idLinean2}}">
	                <input type="hidden" name="no" value="8">
	                <input type="hidden" name="nt" value="{{ $user->namaTeam }}">
	                <input type="hidden" name="_method" value="put">
	                <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="daftar" class="login loginmodal-submit" value="Update">
				</form>
			</div>
		</div>
	</div>
	@else
	<h1>GAK ADA USER</h1>
	@endif

<!-- JAVASCRIPT BOOTSTRAP -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('particles/particles.js')}}"></script>
<script src="{{ asset('particles/index/js/app.js')}}"></script>

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
<script>
  var msg = '{{Session::get('message')}}';
  var exist = '{{Session::has('message')}}';
  if(exist){
    alert(msg);
  }
</script>
</body>
</html>
