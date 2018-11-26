<?php
require("config.php");
$getid = $_SERVER['REMOTE_ADDR'];
$gettime = file_get_contents($datadir."/".$getid);
$getbalance = intval($gettime)-time();
if ($getbalance > 0)
{
echo "Your Time : ".$getbalance;
}
else
{
echo "Nop!";
}