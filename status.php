<?php
require("config.php");
$getid = md5($_SERVER['REMOTE_ADDR']);
$gettime = file_get_contents($datadir."/".$getid);
$getbalance = intval($gettime)-time();
if ($getbalance > 0)
{
echo "Your Time : ".$getbalance."<br/>Your Account : ".$getid;
}
else
{
echo "Nop!";
}
