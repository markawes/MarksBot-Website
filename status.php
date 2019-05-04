<?php include ('./assets/php/genheader.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="65" />
	<title>MarksBot Status</title>
	<script src="assets/js/time.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="./assets/js/countdown.js"></script>
	<!-- MarksBot CSS -->
	<link rel="stylesheet" href="MarksBot.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript"> 
<!--
function faq() {
window.open( "faq.php", "wCWindow", 
"status=yes, height=178, width=481, top=200 left=400, menubar=no, resizable=no" )
}
//-->
</script>
 <style>
/* Tooltip */
  .toolTipC + .tooltip > .tooltip-inner {
    background-color: #73AD21; 
    color: #FFFFFF; 
    border: 1px solid green; 
    padding: 15px;
    font-size: 20px;
  }
.mbs  {border-collapse:collapse;border-spacing:0;}
.mbs td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.mbs th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.mbs .mbs-31ua{background-color:#ffcc67;border-color:inherit;text-align:left;vertical-align:top}
.mbs .mbs-krxx{background-color:#ffcc67;border-color:inherit;text-align:left}
</style>
<script>
$(document).ready(function(){
  $('[mbIdentifyAs="tooltip"]').tooltip();   
});
</script>
</head>
<body role="document">
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<?php include("./assets/includes/alert_message.inc")?>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">MarksBot Documentation</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php include("./assets/includes/nav_menu.inc")?>
				<!--<li><a class="toolTipC" href="#" mbIdentifyAs="tooltip" data-placement="bottom" title="Hooray!">Bottom</a></li> -->
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>
<div class="container theme-showcase" role="main">
	<div class="jumbotron">
	
	 	<p align = "right"><script src="assets/js/date.js"></script> | <span id="time"></span></p>
	<p align ="center">Just another boring service status page</p>
	<center>
		
<?php include("./assets/includes/bot_stats.inc")?>

	</div>
</div>

<div align = "center"><?php include('./assets/php/genfooter.php')?></div>
</body>
</html>