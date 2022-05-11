

<?php 
require 'robot.php';
@import('cord_sql');  


if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }

elseif (!empty(gethostname()))   //to check if ip is pass from proxy
    {
      $ipaddress = gethostname()."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }




  
$topic='ZAAZOO';
$sqll="SELECT * FROM track WHERE post_id = ? AND user_ip= ?";
$rtr=$conn->prepare($sqll);
$rtr->bindparam(1,$topic);
$rtr->bindparam(2,$ipaddress);
$rtr->execute();
$cnt=$rtr->rowCount();
if ($cnt < 1) {


  
$sqlll="INSERT INTO track( post_id,user_ip) VALUE(?,?)";

$rtrr=$conn->prepare($sqlll);

$rtrr->bindparam(1,$topic);
$rtrr->bindparam(2,$ipaddress);
$rtrr->execute();
}


$Sci_con=$conn->prepare("SELECT * FROM webd");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$webname = $Sci_col['webname'];
$weblogo = $Sci_col['img2'];
$webbanner = $Sci_col['img1'];
$profile = $Sci_col['img3'];
 $description = "Build your website with NetPacks, Create your dream with us || NetPacks";
 
}

$Sci_connno=$conn->prepare("SELECT * FROM cv");
$Sci_connno->execute();
foreach ($Sci_connno as $Sci_collll) {

$cv = $Sci_collll['cvfile'];
}

$DURAL_SQL="SELECT * FROM soci";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {


   $wats = $key['wat'];
   $faceb = $key['fb'];
$insta = $key['inst'];
$phone = $key['Phone'];
$twee = $key['TWEETER'];
$linke = $key['linke'];
$email = $key['email'];
$address = $key['adress'];

}
 $description ="responsive, secure and advance web technology Netpacks.";
 
?>