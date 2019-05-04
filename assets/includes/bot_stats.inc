<table class="mbs">
  <tr>
    <th class="mbs-31ua">MarksBot</th>
    <th class="mbs-krxx"><? 
$ip = "thecloud.serveftp.com"; 
$port = "6275"; 
if (! $sock = @fsockopen($ip, $port, $num, $error, 5)) 
echo '<B><FONT COLOR=red>Offline</b>- The technical wizards are working hard to bring MarksBot back online</FONT>'; 
else{ 
echo '<B><FONT COLOR=black>Online</b> <b>All Systems Running</b> <img src="https://mark-wesley.co.uk/images/ip.gif"></FONT>'; 
fclose($sock);
}
?></th>
  </tr>
  <tr>
    <td class="mbs-31ua">Website</td>
    <td class="mbs-31ua"><? 
$ip = "107.189.2.116"; 
$port = "21"; 
if (! $sock = @fsockopen($ip, $port, $num, $error, 5)) 
echo '<B><FONT COLOR=red>Offline</b>- The technical wizards are working hard to bring MarksBot back online</FONT>'; 
else{ 
echo '<B><FONT COLOR=black>Online</b> <b>All Systems Running</b> <img src="https://mark-wesley.co.uk/images/ip.gif"></FONT>'; 
fclose($sock);
}
?></td>
  </tr>
  <tr>
    <td class="mbs-31ua" colspan="2">Refreshing in <span id="countdown"></span> seconds</td>
  </tr>
</table>