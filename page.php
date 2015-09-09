<?php
	if (!isset($title)) {
		$title = "New Project Template";
	}
	if (!isset($script)) {
		$script = "";
	} else {
		$script = <<<HERE
	<script type="text/javascript">
		$(document).ready(function() {
			$script
		});
	</script>
HERE;
	}
	if (!isset($body) || $body == "") {
		$body = <<<HERE
	<h1>404</h1>
	<p>
		We're sorry, but the page you requested could not be found.
	</p>
HERE;
	}
	print <<<HERE
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Default Project Template</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!-- All CSS -->
	<link href="css/custom.css" rel="stylesheet" />
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	<!-- JavaScripts -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-combobox.js"></script>
	<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
	<script type="text/javascript" src="js/summernote.js"></script>
	<script type="text/javascript" src="js/icheck.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
$script
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="nav-logo">
					<img src="img/bw.png"/><span class="nav-logo-title">Your Website Name
				</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
			<ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="navbar">
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Services</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle nav-logo" data-toggle="dropdown"><img src="img/bw.png"/><span class="text">John Smith<b class="caret"></b></span></a>
					<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>-->
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
            <!-- /link section -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" id="page-content">
$body
    </div>
    <!-- /.container -->
</body>
</html>
HERE;
?>