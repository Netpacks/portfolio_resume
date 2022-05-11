<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$img1 =  $_FILES['img1']['name'];
$topic = $_POST['topic'];
$textbox = $_POST['textbox'];
if (empty($img1) || empty($topic) || empty($textbox)) {
html("post filled is empty");
}
elseif (empty($img1)) {
html("one of the image is empty");
}elseif (empty($topic)) {
html("topic Box is empty");

}elseif (empty($textbox)) {
html("Description Box is empty");
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('img1','img')."","".@form('topic','text')."","".@form('textbox','text')."","".@form('id','0-9')."");
$DB->runner = "UPDATE `blog` SET img1=?, topic=?, textbox=? WHERE id=?";
if ($DB->update()) {
    echo 2;
     } 
     else{
     $DB->update();	
     }
}








?>