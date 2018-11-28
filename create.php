<?php
require("config.php");
$yourid = md5($_SERVER['REMOTE_ADDR']);
if (file_exists($datadir."/".$yourid))
{
echo "Your Account Aleady Created!";
}
else
{
echo "Your Account Has Been Created And You Have : ".$defaulttime." Second";
$yourtime = time()+$defaulttime;
file_put_contents($datadir."/".$yourid,$yourtime."\n");
}
