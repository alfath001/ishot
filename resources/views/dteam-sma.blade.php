<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ISHOT</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="assets/img/Fav.png"/>
	<link href="assets/sb-admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css">

	<!-- MetisMenu CSS -->
    <link href="assets/sb-admin/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="assets/sb-admin/datatables/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/sb-admin/datatables/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic" rel="stylesheet" type="text/css">


</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ISHOT Adminpage</a>
            </div>
            <!-- /.navbar-header -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dpembayaran">Data Pembayaran</a>
                                </li>
                                <li>
                                    <a href="dteam">Data Team</a>
                                </li>
                                <li>
                                    <a href="dpeserta">Data Peserta</a>
                                </li>
                                <li>
                                    <a href="dreset">Data Reset</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fa fa-sign-out fa-fw"></i> Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <h4>{{ Session::get('message')}}</h4><br>
                <div class="col-lg-12">
                    <h1 class="page-header">Data Team SMA</h1>
                </div>
                <!-- /.col-lg-12 -->

                <a href="{{ route('dteam.kbmsi') }}" class="btn btn-primary">Team KBMSI</a>
                <br><br>

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Team SMA
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nama Team</th>
                                        <th class="text-center">Ide Team</th>
                                        <th class="text-center">Nama Ketua</th>
                                        <th class="text-center">Upload File</th>
                                        <th class="text-center">Pembayaran</th>
                                        <th class="text-center">Reset Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($tims as $tim)       
                                    <tr class="odd gradeX text-center">
                                        <td class="center">{{ $tim->namaTeam }}</td>
                                        <td class="center">{{ $tim->judul }}</td>
                                        <td class="center">{{ $tim->namaKetua }}</td>
                                        @if (isset($tim->file))
                                        <td class="center"> V </td>
                                        @else
                                        <td class="center"> X </td>
                                        @endif
                                        @if ($tim->status)
                                        <td class="center">Telah Dikonfirmasi</td>
                                        @else
                                          @if (isset($tim->resi))
                                        <td class="center">Belum Dikonfrimasi</td>
                                          @else
                                        <td class="center">Belum Bayar</td>  
                                          @endif
                                        @endif
                                        <td class="center">
                                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#reset-team"><i class="fa fa-check-circle"></i> Reset</a>
                                        </td>
                                    </tr>
                                 @endforeach     
                                </tbody>
                            </table>
                            <div class="text-center">
                              {{$tims->links()}}
                            </div>
                            <!-- /.table-responsive -->
                            <!-- <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- MODAL RESET PASS-->
        <div class="modal fade" id="reset-team" tabindex="-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Reset Password</h1>
                    <div style="border: 1px solid #3f51b5; width: 100px; text-align: center; margin:0 auto;"></div>
                    <br>
                    <form action="/user/{{ $tim->userid }}" method="post">
                        <input type="password" name="newpass" placeholder="Input New Password">
                        <input type="hidden" name="spe" value="passdt">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="setnewpass" class="login loginmodal-submit" value="Set Password">
                    </form>
                </div>
            </div>
        </div>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="assets/sb-admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/sb-admin/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="assets/sb-admin/datatables/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/sb-admin/datatables/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/sb-admin/datatables/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</html>