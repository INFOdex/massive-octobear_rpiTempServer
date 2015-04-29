<HTML>
<BODY BACKGORUND="pug.jpg">

<?php
echo "<center><TABLE BGCOLOR = \"FFFFFF\" border=2><TR>";
$command = '/var/www/timecreated';
shell_exec($command);
echo "<TD><img src=\"graph.jpg\"></TD>";
echo "</TR></TABLE><center>";
?>

</HTML>
