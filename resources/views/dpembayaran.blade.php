<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ISHOT</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="assets/img/Fav.png"/>
	<link href="{!! asset('assets/sb-admin/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
	<!-- MetisMenu CSS -->
    <link href="{!! asset('assets/sb-admin/metisMenu/metisMenu.min.css') !!}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{!! asset('assets/sb-admin/datatables/datatables-plugins/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! asset('assets/sb-admin/datatables/datatables-responsive/dataTables.responsive.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('css/sb-admin-2.css') !!}" rel="stylesheet">
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

<h4>{{ Session::get('message')}}</h4><br>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pembayaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Pembayaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nama Team</th>
                                        <th class="text-center">Foto Resi</th>
                                        <th class="text-center">Nama Ketua</th>
                                        <th class="text-center">Konfirmasi Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($tims as $tim)   
                                    <tr class="odd gradeX text-center">
                                        <td>{{ $tim->namaTeam }}</td>
                                        <td><img src="storage/app/resi/{{$tim->resi}}" alt="" class="img-responsive img-circle" style="width: 100px; height: 100px; margin:0 auto;"></td>
                                        <td class="center">{{ $tim->namaKetua }}</td>
                                        <td class="center inline">
                                          @if ( $tim->status )
                                            Sudah Dikonfirmasi
                                          @else
                                          <form action="/team/{{ $tim->id }}" method="post">
                                            <input type="hidden" name="no" value="3">
                                            <input type="hidden" name="_method" value="put">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <input type="submit" name="Verifikasi" value="Konfirmasi" class="btn btn-success">
                                          </form>
                                          @endif

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

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="{{ asset('assets/sb-admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('assets/sb-admin/metisMenu/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('assets/sb-admin/datatables/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/sb-admin/datatables/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/sb-admin/datatables/datatables-responsive/dataTables.responsive.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    function myFunction() {
    alert("Konfirmasi berhasil");
}
    </script>

</body>
</html>