<?php
require 'robot.php';
@import('form');
@import('cord_sql');







$img1 =  $_FILES['img1']['name'];
$proNmae = $_POST['proNmae'];
$cat = $_POST['cat'];
if (empty($img1) || empty($cat) || empty($proNmae)) {
html("post filled is empty");
}
elseif (empty($cat)) {
html("Please check your Categorie");
}
elseif (empty($img1)) {
html(" banner is empty");
}elseif (empty($proNmae)) {
html("proName Box is empty");
}
else{

    function rmdir_recursive($dir) {
        foreach(scandir($dir) as $file) {
           if ('.' === $file || '..' === $file) continue;
           if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
           else unlink("$dir/$file");
       }
    
       rmdir($dir);
    }
    
    if($_FILES["zip_file"]["name"]) {
        $filename = $_FILES["zip_file"]["name"];
        $source = $_FILES["zip_file"]["tmp_name"];
        $type = $_FILES["zip_file"]["type"];
    
        $name = explode(".", $filename);
        $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
        foreach($accepted_types as $mime_type) {
            if($mime_type == $type) {
                $okay = true;
                break;
            } 
        }
    
        $continue = strtolower($name[1]) == 'zip' ? true : false;
        if(!$continue) {
            $message= "The file you are trying to upload is not a .zip file. Please try again.";
        }
    
      /* PHP current path */
      $path = dirname(__FILE__).'/';  // absolute path to the directory where zipper.php is in
      $filenoext = basename ($filename, '.zip');  // absolute path to the directory where zipper.php is in (lowercase)
      $filenoext = basename ($filenoext, '.ZIP');  // absolute path to the directory where zipper.php is in (when uppercase)
    
      $targetdir = $path . $filenoext; // target directory
      $targetzip = $path . $filename; // target zip file
    
      /* create directory if not exists', otherwise overwrite */
      /* target directory is same as filename without extension */
    
      if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
    
    
      mkdir($targetdir, 0777);
    
    
      /* here it is really happening */
    
        if(move_uploaded_file($source, $targetzip)) {
            $zip = new ZipArchive();
            $x = $zip->open($targetzip);  // open the zip file to extract
            if ($x === true) {
                $zip->extractTo($targetdir); // place in the directory with same name  
                $zip->close();
    
                unlink($targetzip);
            }
        } else {    
            echo "There was a problem with the upload. Please try again.";
        }
    }
    
    



   




    $filenameminus = str_replace('.zip','', $filename);


$DB = new cord_sql;
$DB->value =  array("". @form('img1','img')."","".$filenameminus."","".$proNmae."","".@form('cat','text')."");
$DB->runner = "INSERT INTO `projects`(`banner`, `folder`, `proNmae`, `cat`) VALUES (?,?,?,?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}








?>