<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  	<!-- VENDOR CSS -->
  	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
  	<!-- MAIN CSS -->
  	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
  	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
  	<!-- GOOGLE FONTS -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  	<!-- ICONS -->
  	<link rel="smi-logo" sizes="76x76" href="{{asset('admin/assets/img/smilogo.jpg')}}">
  	<link rel="icon" type="image/jpg" sizes="96x96" href="{{asset('admin/assets/img/smilogo.jpg')}}">

  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
          <a href="/dashboard"><img src="{{asset('admin/smi.png')}}" alt="smi Logo" class="img-responsive logo" style="width:20px"></a>
        </div>
        <div class="container-fluid">
          <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                  <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="main">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">

              <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left;
              border-radius:50%; margin-right:25px;"></img>
              <h2> Profile {{$user->name}}</h2>

            </div>

          </div>

        </div>


      </div>


  		<div class="clearfix"></div>
  		<footer>
  			<div class="container-fluid">
  				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://sekolahmusikindonesia.co.id/smi-semarang/">SEKOLAH MUSIK INDONESIA</a>
  </p>
  			</div>
  		</footer>
  	</div>
  	<!-- END WRAPPER -->
  	<!-- Javascript -->
  	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
  	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>


  </body>
</html>
