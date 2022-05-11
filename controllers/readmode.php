<?php 
require 'robot.php';
@import('cord_sql');

$get = $_GET['id'];  
$topic=$_GET['id'];
$Sci_con=$conn->prepare("SELECT * FROM blog WHERE id=? order by id DESC LIMIT 1");
$Sci_con->bindParam(1, $get);
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = $Sci_col['topic'];
    $Sci_content = $Sci_col['textbox'];
    $Sci_date = $Sci_col['date'];
?>
















<img src="../zenter/uploads/<?php echo $Sci_img1; ?>" alt="" style="width: 100%; height:50vh; border-bottom:5px solid brown;">

<br>
<br>


<div style="max-width:60%; margin:auto; font-family:cursive;">

<?php echo $Sci_content; ?>


</div>





<?php
} 
?>
