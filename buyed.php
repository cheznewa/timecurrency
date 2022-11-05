<?php
require("config.php");
$getam = $_POST["amount"];
$getto = $_POST["to"];
$getid = $_POST["from"];
$gettime = intval(file_get_contents($datadir."/".md5($getid)));
$gettimeto = intval(file_get_contents($datadir."/".$getto));
$getb = $gettime-time();
if ($getam <= $getb)
{
if ($gettime-time() > 0)
{
file_put_contents($datadir."/".md5($getid),$gettime - $getam);
file_put_contents($datadir."/".$getto,$gettimeto + $getam);
echo "Buyed/donated!";
}
else
{
echo "Nop!";
}
}
else
{
echo "Sorry!";
}
