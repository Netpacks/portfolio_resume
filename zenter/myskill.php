

<div class="d-dural-flex-child2 p-3" >
    <p class="text-center" style="font-weight: bolder; color:gray;">Skills</p>
       <form action="skill.php" id="list" method="post">
<div class="bg-light" style=" position: relative; border-radius: 30px; border: 1px solid rgb(240, 232, 232);">
    <div class="d-flex">
<img src="image-alt.svg" id="cover-getlink1" onclick="
$trigger('cover-img1')" class="bg-dark w-100" style="height: 300px; cursor: pointer; border-top-right-radius: 30px;border-top-left-radius: 30px; ">
</div>
<input required type="file"  name="img1" accept="image/png, image/jpeg,image/jpg" onchange="$Fgetter(this,'cover-getlink1')" id="cover-img1" style="height:0;width:0;outline: none; display: block;background: transparent;" >


<small style="position:absolute; top:-10px;right: -10px;" class="p-3 bg-twist rounded fw-bold text-white">Skills Banner</small>
<div class="d-flex p-3 align-items-center" style="width: 100%;">

    <textarea type="text" required='' name="topic" class="fw-bold p-1 content"> skill name </textarea>
    
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
$("#datadiv").html('<strong style="color:green;">Publishing......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...
$space_nav_loader('myskill.php','sign','s-btn9');


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

$('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; background-color: transparent; color: gray; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});


</script>