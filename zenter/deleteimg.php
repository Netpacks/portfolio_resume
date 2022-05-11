<?php

require 'robot.php';
@import('cord_sql');

$posts_id = filter_var(htmlspecialchars($_POST['id']),FILTER_SANITIZE_NUMBER_INT);

$Sci_con=$conn->prepare("SELECT * FROM projects WHERE id=?");
$Sci_con->bindParam(1, $posts_id);
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_img = $Sci_col['banner'];
    $Sci_folder = $Sci_col['folder'];
    unlink("uploads/".$Sci_img);
    unlink($Sci_folder);

}
$delete_post_sql = "DELETE FROM projects WHERE id=?";
$delete_post = $conn->prepare($delete_post_sql);
$delete_post->bindParam(1, $posts_id);
if ($delete_post->execute()) {
    echo 2;
     } 
     else{
     $delete_post->execute();	
     }
    

?>