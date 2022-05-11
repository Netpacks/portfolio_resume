<div class="d-dural-flex-child2 p-3" >
    <p class="text-center" style="font-weight: bolder; color:gray;">Update Cv</p>
       <form enctype="multipart/form-data" action="cv.php" id="list" method="post">
<div class="bg-light" style=" position: relative; border-radius: 30px; border: 1px solid rgb(240, 232, 232);">
    


<div >
  <input type="file" class="form-control" name="cv" />
</div>




  </div>


<div  class="d-flex align-items-center " style="height:50px;">       

<button class="btn btn-primary w-100 fw-bold"  style="height:100%;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;" id="pub">Publish</button>

                </div>

</div>   



        
                      
</form>                                     
</div>

<div class="d-dural-flex-child1 p-3">


<h4 style="font-weight: bolder;" >Alert</h4>
<p style="color: gray;" id="datadiv">Notification Goes Here</p>
</div>

</div>


<script>



$("#list").on('submit',function(e){

e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
var d = data;
var e =  2;
if (d == e) {
$("#datadiv").html('<strong style="color:orangered;"> Your .pdf file is uploading.......</strong>'); 
setTimeout(function () {
  $("#datadiv").html('<strong style="color:green;"> Successfully Published.......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...
$space_nav_loader('Mycv.php','sign','s-btn8');


},1000);

},3000);
},1000);
},3000);


}
else{
$("#datadiv").html(data); 
}
} 

});
});

</script>