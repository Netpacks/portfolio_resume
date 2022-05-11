
<?php



require 'robot.php';
@import('form');
@import('cord_sql');
        $file_location ='docu/';
if ( empty($_FILES["cv"]["name"])) {
html("cv is required");
}
else {
$target_dir = $file_location;
$target_file = $target_dir;
$namo = basename($_FILES["cv"]["name"]);
$uploadOk = 1;
$cvFileType = $_FILES["cv"]["type"];

if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file.$namo)) {
$DB = new cord_sql;
$DB->value =  array("". $namo ."");
$DB->runner = "UPDATE `cv` SET cvfile=?";
if ($DB->update()) {
echo 2;
 } 
 else{
 $DB->update();	
 }


} else {
echo "<br> Sorry, there was an error uploading your file.";
}
}









?>