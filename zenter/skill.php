<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$img1 =  $_FILES['img1']['name'];
$topic = $_POST['topic'];
if (empty($img1) || empty($topic)) {
html("post filled is empty");
}
elseif (empty($img1)) {
html("one of the image is empty");
}elseif (empty($topic)) {
html("topic Box is empty");

}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('img1','img')."","".@form('topic','text')."");
$DB->runner = "INSERT INTO `skill`(`img1`, `name`) VALUES (?,?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}








?>