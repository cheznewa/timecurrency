<?php
require("config.php");
$getid = $_GET["id"];
$gettime = file_get_contents($datadir."/".md5($getid));
$getbalance = intval($gettime)-time();
if ($getbalance > 0)
{
echo "Your Time : ".$getbalance."<br/>Your Account : ".$getid;
}
else
{
echo "Nop!";
}
