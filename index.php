<?php
//MMS Blogger version 01
//Modified by Exzs Dot Com
//http://www.exzs.com
//mmsblog@exzs.com
//24072005
//Please visit our forum to discuss about this MMS Blog
//Thanks from The Management

//Get your ID @ http://www.exzs.com/04/modules/mms/index.php?action=registerform
//Or your can email us (mmsblog@exzs.com) if the link above not valid due to version change
//Registration FOC until further notice :-)

require('../../mainfile.php');
require(XOOPS_ROOT_PATH.'/header.php');
?>
<?php
require('../../mainfile.php');
require(XOOPS_ROOT_PATH.'/header.php');
?>

<!--mms-->
<?php
include"config.php";

$web=$_SERVER['PHP_SELF'];
$url=$_SERVER['HTTP_HOST'];
$v=$_GET["v"];
$action=$_GET["action"];
$dir=$_GET["dir"];
$name=$_GET["name"];
$text=$_GET["text"];
$submit=$_GET["submit"];
$fail=$_GET["fail"];
$pass=$_GET["pass"];

include "http://mms.awek.org/index.php?action=$action&from=$from&v=$v&dir=$dir&name=$name&text=$text&submit=$submit&url=$url$web&urllink=$url&pass=$pass&fail=$fail";

?>
<!--mms-->

<?php
require(XOOPS_ROOT_PATH.'/footer.php');
?>