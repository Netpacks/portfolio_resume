
<?php 
require 'robot.php';
@import('cord_sql');

?>

  



<div class="container row">


         <?php

         $Sci_con=$conn->prepare("SELECT * FROM projects order by id ");
         $Sci_con->execute();
         foreach ($Sci_con as $Sci_col) {
         
         $Sci_id = $Sci_col['id'];
         $Sci_img = $Sci_col['banner'];
         
         ?>  

    <div class="col-lg-3 m-1 col-5 align-items-center " style="height: 200px; position: relative;border:2px solid brown; background-position: center; background-image: url('/ADMIN_files/Shop-20_7450eb07-e395-4b17-8e47-cc27156cfd7f.webp');" id="<?php echo $Sci_id; ?>">
        <img src="uploads/<?php echo $Sci_img; ?>" alt="" style="width: 100%; height:180px;">
         <div class="p-2 fw-bold btn btn-danger" style="position: absolute; top: -5px; right: -5px;" onclick="Sci.delete('<?php echo $Sci_id; ?>','deleteimg.php')">Delete</div>
         
         </div>
               

         <?php
    }
?>


</div>




