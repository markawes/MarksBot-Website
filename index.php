<?php include ('./assets/php/genheader.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MarksBot Documentation</title>
	<script src="assets/js/time.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
function changelog() {
window.open( "change-log.php", "wCWindow", 
"status=yes, height=178, width=481, top=200 left=400, menubar=no, resizable=no" )
}
function specialThanks() {
window.open( "special-thanks.php", "wCWindow", 
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
		<p>MarksBot is a Discord moderation and fun bot it has plenty of commands to keep you busy<p>If you need support you are welcome to join our <a class="toolTipC" href="https://discord.gg/yPDxEDu" mbIdentifyAs="tooltip" data-placement="top" title="Click here if you need help">Discord server</a> you can also invite MarksBot to your server by <a class="toolTipC" href="https://discordapp.com/oauth2/authorize?client_id=417143274713776139&scope=bot&permissions=2080767191" mbIdentifyAs="tooltip" data-placement="top" title="Invite me :)">clicking here</a> - If you have suggestions you can DM the bot or join the support server and post your suggestion in there.</p>
<?php include("./assets/includes/generalCommands.inc")?>
<br>
<?php include("./assets/includes/adminModCommands.inc")?>
<br>
<?php include("./assets/includes/userRequestedCommands.inc")?>
<br>
<?php include("./assets/includes/marksbotStaffCommands.inc")?>
<br />
<br>
<!-- Space for owner commands -->
<br />
	</div>
</div>
<p><b><center>Please note commands marked with an asterix ( * )  require a vote before they can be used</p></b></center>
<p><center><a href="https://discordbots.org/bot/417143274713776139" >
  <img src="https://discordbots.org/api/widget/417143274713776139.svg" alt="MarksBot" />
</a></center></p>
<!-- <center><img src="https://mark-wesley.co.uk/i/fq0.gif" alt="Please Invite" onClick='alert("Vote for MarksBot")'/><img src="https://cdn.discordapp.com/attachments/417444157301456897/540031820490866698/MB-ava-mw.gif" alt= "Please Vote" width="100" height="100"><img src="https://mark-wesley.co.uk/i/fq0.gif" alt= "We appreciate it" onClick='alert("<<< What he said")'/></center> -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
<div align = "right"><?php include('./assets/php/genfooter.php')?></div>
</body>
</html>