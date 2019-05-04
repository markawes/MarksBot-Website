
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link href="MarksBot.css" rel="stylesheet" type="text/css" />-->
<body bgcolor="0x2caecb">
<title>MarksBot Recent Changes</title>
	
</head>
<center>
<body>

        <p><b>Recent Changes</b> | <a href="faq.php">Reload</a></p>
		<p>The following changes were recently made to MarksBot</p>
		
		<center><p>24th April 2019</p></center>
		<li>Added command m.afk (Sets you to AFK, if someone tags you it will tell them you are AFK and display the message you set)</li>
		
		<center><p>22nd April 2019</p></center>
		<li>Added blacklist system so guilds can be blacklisted from adding MarksBot</li>
		<li>Reworked the staff commands</li>
		<li>Added command m.addstaff (Adds a user as a verified MarksBot Staff member)</li>
		<li>Added command m.removestaff (Removes a MarksBot staff member)</li>
		<li>Added command m.sc (Verifies if you are a MarksBot Staff member)</li>
		<li>Added command m.guildblacklist (Lists the IDS of all blacklisted guilds)</li>
		<li>Added command m.guildban (Adds a guild ID to the blacklist ,this prevents MarksBot from joining the guild)</li>
		<li>Added command m.guildunban (Removes a guild ID from the blacklist, allowing MarksBot to join the guild)</li>
		<li>Improved the m.restart command</li>
		<li>Added MarksBot Staff Commands list to website</li>
		<li>Updated the help command to reflect staff commands</li>
		<li>Updated site css file to accommodate MarksBot Staff Commands</li>
		
		<center><p>30th March 2019</p></center>
		<li>Added "Other bots" section to the website</li>
		<li>Adjusted way options appear on the navbar</li>
		<li>Added mongodb support to MarksBot</li>
		
		<center><p>19th March 2019</p></center>
		<li>m.botemoji has been vaulted</li>
		<li>Added command m.addemoji (Allows you to add an emoji via URL)</li>
		
		<center><p>10th March 2019</p></center>
		<li><a href="support" target="parent">Support page</a> added to the website</li>
		
		<center><p>8th March 2019</p></center>
		<li>Added command m.check (Checks if users have invite links in their status message)</li>
		<li>Added command m.ipcheck (Displays information about requested IP address)</li>
		
		<center><p>5th March 2019</p></center>
		<li>MarksBot will now react with a heart when users vote for him</li>
		<li>You can now mention MarksBot to find his prefix</li>
		
		<center><p>4th March 2019</p></center>
		<li>Nav bar on website fixed for mobile devices</li>
		<li>Penguins removed from footer (sorry!)</li>
		
		<center><p>2nd March 2019</p></center>
		<li>Status page added to the website</li>
		<li>Website loading time improved</li>
		<li>Added includes to the website for efficiency</li>
		<!--<li>Added command m.fnn - Shows the Fortnite In-game news</li>
		<li>Added command m.fnss - Shows the Fortnite Server Status</li>-->
		
		<center><p>23nd Feb 2019</p></center>
		<li>Added command m.discord - Checks the discord status</li>
		<li>Added command m.imdb - Query the imdb api</li>
		<li>Tooltips added to links on website</li>
		
		<center><p>18th Feb 2019</p></center>
		<li>Softban command has been added</li>
		<li>Fortnite Item Shop has been added (m.fns) & (m.fns2)</li>
		<li>Help command has been simplified</li>
		<li>The (m.bill) command no longer needs a vote on DBL before it can be used</li>
		<li>Various bug fixes</li>
		
<br><br />			
	<?php
  $file= 'faq.php';
  if (file_exists($file)) {
    echo "Last Updated: " . date ("F d Y H:i:s.", filemtime($file));
  }
?>
        
</body>
</html>
