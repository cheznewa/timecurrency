<?php
require("config.php");
$yourpriv = bin2hex(random_bytes(32));
$yourid = md5($yourpriv);
echo "Your Account Has Been Created And You Have : ".$defaulttime." Second<br/>";
echo "Your ID : $yourid<br/>Your Private : $yourpriv<br/>";
$yourtime = time()+$defaulttime;
file_put_contents($datadir."/".$yourid,$yourtime."\n");

