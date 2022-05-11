

<?php 
require 'robot.php';
@import('cord_sql');

?>
    <div class="row">

    <?php

    $Sci_con=$conn->prepare("SELECT * FROM blog order by id DESC LIMIT 50");
    $Sci_con->execute();
    foreach ($Sci_con as $Sci_col) {
    
    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = $Sci_col['topic'];
    $Sci_content = $Sci_col['textbox'];
    
    ?>
         <div class="row p-3 col-lg-5 bg-light rounded m-1" aria-current="true" id="<?php echo $Sci_id; ?>">
          
          <div class="d-flex"><img src="./uploads/<?php echo $Sci_img1; ?>"  style="width: 40%;border-radius: 10px;">
            <div class="p-2 d-flex align-items-center justify-content-center" style="flex-direction: column; text-align: center;">
              <p class=" text-dark"><?php echo $Sci_topic; ?></p>
              
            
<div class="d-flex p-3">

  <div class="d-flex align-items-center">

    <button class="btn btn-primary bg-danger w-100" style="border:none; margin-left: 20px;font-weight: bolder;" onclick="Sci.delete('<?php echo $Sci_id; ?>','deleteblog.php')">Delete</button></div>
    <button class="btn btn-primary bg-twist-bold w-100" style="border:none; margin-left: 20px;font-weight: bolder;" onclick=" $space_load('blog-edit.php?topic=<?php echo $Sci_id; ?>','sign')">Edit</button></div>
  </div>
     </div>
            
          
    </div> 


<?php
    }
?>

</div>                  