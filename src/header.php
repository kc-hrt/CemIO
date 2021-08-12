<?php
include '../admin/dbconfig.php';
session_start();

//$idletime=60;//after 60 seconds the user gets logged out
//if (time()-$_SESSION['timestamp']>$idletime){
//    session_destroy();
//    session_unset();
//}else{
//    $_SESSION['timestamp']=time();
//}
//on session creation
//$_SESSION['timestamp']=time();
	echo '<html class="full">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Hart Cemetery">
	    <meta name="author" content="Kasey Hart">
		
		<title>Hart Cemetery /dev</title>
		
		<!-- Style sheets -->
		<link rel="stylesheet" type="text/css" href="../css/datatables.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="../css/full.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="../css/simple-sidebar.css"/> -->
<!--		<style>
		    body {
		        padding-top: 10px;
		        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		    }
	    </style> -->
		
		
		<!-- Scripts -->
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.js"></script>
		
		<script type="text/javascript">
		// Javascript to enable link to tab
		var url = document.location.toString();
		if (url.match(\'#\')) {
		    $(\'.nav-tabs a[href="#\' + url.split(\'#\')[1] + \'"]\').tab(\'show\');
		} 
		
		// Change hash for page-reload
		$(\'.nav-tabs a\').on(\'shown.bs.tab\', function (e) {
		    window.location.hash = e.target.hash;
		})
		</script>
	    

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	
	
 <!-- Datatables -->
		<script type="text/javascript" src="../js/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$(\'#example\').DataTable();
			} );
		</script>
	</head>
	<body>

		
			<!-- Navigation -->
		    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		        <div class="container">
		        
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		                <a class="navbar-brand" href="../">' . $site_name . '</a>
		            </div>
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav">
		                    <li>
		                        <a href="../results">Search</a>
		                    </li>
		                    <li>
		                        <a href="../map">Map</a>
		                    </li></ul>';
		               
		               // checks to see if logged in
		                if(isset($_SESSION['login_user']))
		                {
		                $login_session=$_SESSION['login_user'];
		                
echo '		                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Admin Menu">'.$login_session.' <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../admin">Admin Settings</a>
                        </li>
                        <li>
                            <a href="../admin/NewOrder.php">New Order</a>
                        </li>
                        <li>
                            <a href="../admin/users.php">Users</a>
                        </li>
                        <li>
                            <a href="../admin/logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-fw fa-search"></i> <span class="hidden-lg hidden-md hidden-sm">Search Themes</span></a>
                </li>
            </ul>';
		                            }
		                            
echo '		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>
		    
		     <!-- Page Content -->
		     <div class="container">';	

?>