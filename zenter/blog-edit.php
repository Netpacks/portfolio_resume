<?php 
require 'robot.php';
@import('cord_sql');

$get = $_GET['topic'];
$Sci_con=$conn->prepare("SELECT * FROM blog WHERE id=? order by id DESC LIMIT 1");
$Sci_con->bindParam(1, $get);
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$Sci_id = $Sci_col['id'];
$Sci_img1 = $Sci_col['img1'];
$Sci_topic = $Sci_col['topic'];
$Sci_content = $Sci_col['textbox'];

?>



<div class="d-dural-flex-child2 p-3" >
    <p class="text-center" style="font-weight: bolder; color:gray;">Blog Edit</p>
       <form action="blog-update.php" id="list" method="post">
<div class="bg-light" style=" position: relative; border-radius: 30px; border: 1px solid rgb(240, 232, 232);">
    <div class="d-flex">
<img src="uploads/<?php  echo $Sci_img1; ?>" id="cover-getlink1" onclick="
$trigger('cover-img1')" class="bg-dark w-100" style="height: 300px; cursor: pointer; border-top-right-radius: 30px;border-top-left-radius: 30px; ">
</div>
<input required type="file"  name="img1" accept="image/png, image/jpeg,image/jpg" onchange="$Fgetter(this,'cover-getlink1')" id="cover-img1" style="height:0;width:0;outline: none; display: block;background: transparent;" >

<input type="hidden" name="id" value="<?php echo $Sci_id; ?>">

<small style="position:absolute; top:-10px;right: -10px;" class="p-3 bg-twist rounded fw-bold text-white">Blog Banner</small>
<div class="d-flex p-3 m-3 align-items-center" style="width: 100%;height: 50px;">

<textarea type="text" required='' value="<?php  echo $Sci_content; ?>" name="textbox" class="fw-bold p-1" style="width: 100%; background-color: transparent; color: gray; outline: none;border: none;resize: none;" ><?php  echo $Sci_content; ?> </textarea>

</div>

<div  class="d-flex align-items-center " style="height:50px;">            <textarea type="text" value="<?php  echo $Sci_topic; ?>" required='' name="topic" id="pagename" class="bg-twist w-100 fw-bold lh-1 p-3 res_text_big text-white"  style="height: 100%; border-bottom-left-radius: 30px;overflow-y: hidden; outline: none;border: none;resize: none;" > <?php  echo $Sci_topic; ?> </textarea> 

<button class="btn btn-primary w-100 fw-bold"  style="height:100%;border-bottom-right-radius: 30px;" id="pub">Publish</button>

                </div>

</div>   



        
                      
</form>                                     
</div>

<div class="d-dural-flex-child1 p-3">


<h4 style="font-weight: bolder;" >Alert</h4>
<p style="color: gray;" id="datadiv">Notification Goes Here</p>
</div>

</div>


<?php
}
?>


<script>



$("#list").on('submit',function(e){

e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
var d = data;
var e =  2;
if (d == e) {
$("#datadiv").html('<strong style="color:green;">Publishing......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...
$space_nav_loader('list.html','sign','s-btn9');


},1000);

},3000);

},3000);


}
else{
$("#datadiv").html(data); 
}
} 

});
});


</script>