<?php
	echo '<!DOCTYPE html><html class="full" lang="en">
	<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->
	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Hart Cemetery">
	    <meta name="author" content="Kasey Hart">
		
		<title>Hart Cemetery /dev</title>
		
		<!-- Style sheets -->
		<link rel="stylesheet" type="text/css" href="http://localhost/myopencemetery/css/datatables.min.css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost/myopencemetery/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost/myopencemetery/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost/myopencemetery/css/full.css"/>
<!--		<style>
		    body {
		        padding-top: 10px;
		        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		    }
	    </style> -->
		
		
		<!-- Scripts -->
		<script type="text/javascript" src="http://localhost/myopencemetery/js/datatables.min.js"></script>
		<script src="http://localhost/myopencemetery/js/jquery.js"></script>
	    

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	
	
 
		<script type="text/javascript" src="http://localhost/myopencemetery/js/datatables.min.js"></script>
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
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">Hart Cemetery (dev)</a>
		            </div>
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav">
		                    <li>
		                        <a href="./results">Search</a>
		                    </li>
		                    <li>
		                        <a href="./map">Map</a>
		                    </li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>
		    
		     <!-- Page Content -->
';	

echo '</div>

<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$(\'#example\')
		.removeClass( \'display\' )
		.addClass(\'table table-striped table-bordered\');
</script>
	</body>
</html>';
// include './src/footer.php';	

?>