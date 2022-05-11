
<?php 
require 'robot.php';
@import('cord_sql');
if(isset($_SESSION['___'])){
  $pass = $_SESSION['___'];
  $email = $_SESSION['___e'];
  
}

$DURAL_SQL="SELECT * FROM anti WHERE user282200123=?";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {
  header("location:index.php");
}

else{
	foreach ($DURAL as $key) {
		$relapass=$key['password282200123'];
		if (!password_verify($pass, $relapass)) {
      header("location:index.php");
		}
    else{
?>




  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SciDream.Dev contributors">
    <title>Laboratory || Develope By Durallite</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
 <link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">
<link rel="apple-touch-icon" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="72x72" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="114x114" href="battery-charging.svg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<script src="ADMIN_files/Cord.js"></script>
<link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">

<script src="ADMIN_files/jquery-3.6.0.min.js"></script> 
<script src="ADMIN_files/jquery.form.min.js"></script> 
<script src="ADMIN_files/jquery.maxlength.js"></script> 
    <!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">

     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="ADMIN_files/sidebars.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="ADMIN_files/headers.css" rel="stylesheet">
  
<body class="sidoscroll" onload="$space_nav_loader('tracker.php','sign','s-btn5')">

<header class="p-1  border-bottom shadow" style="border-radius: 50px;
">

  <div class="container">
    <div class="d-flex p-2 flex-wrap align-items-center justify-content-end">
      <a href="#" class="d-block link-dark text-decoration-none mx-3" style="outline: 0; font-size: 20px; font-weight: bolder; white-space: nowrap;">
     <strong>{{ Durallite wORKS }}</strong>
 
      </a>

    </div>
  </div>
</header>

<br>


<div class="d-dural-flex container-fluid ">


<div class="d-dural-flex-child2 p-3" style="max-widht:80%;margin:auto;">




<h2 style="font-weight: bolder;">Menu</h2>
<br> <div class="d-flex align-items-center border-bottom scroll_hide" style="padding-left: 20px; height:50px;">
<div id="s-btn5" onclick="$space_nav_loader('tracker.php','sign','s-btn5')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
Tracker           </div> 
                 
                 <div id="s-btn10"  onclick="$space_nav_loader('reports.php','sign','s-btn10')"  class="p-2 text-small res_text_small menu_row" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;">
                 Reports<span class=" px-2 mx-1 text-white bg-danger rounded" id="c_count">0</span>              </div>
                    <div id="s-btn1" onclick="$space_nav_loader('projects.html','sign','s-btn1')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
          Publish Project
           </div>         <div id="s-btn2" onclick="$space_nav_loader('blog.html','sign','s-btn2')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
            Publish blog V 0.1
             </div>   <div id="s-btn3" onclick="$space_nav_loader('works.php','sign','s-btn3')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
            Projects
             </div>   <div id="s-btn4" onclick="$space_nav_loader('blogss.php','sign','s-btn4')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
          Blogs
             </div>  <div id="s-btn6" onclick="$space_nav_loader('social_link.php','sign','s-btn6')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
          Social link
             </div>  <div id="s-btn8" onclick="$space_nav_loader('Mycv.php','sign','s-btn8')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
             My cv
             </div>    <div id="s-btn9" onclick="$space_nav_loader('myskill.php','sign','s-btn9')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
 My Skills
            </div>   <div id="s-btn7" onclick="$space_nav_loader('profile.php','sign','s-btn7')" style="height: 50px; cursor: pointer; color: gray; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
          Profile
             </div>      <a href="logout.php" style="text-decoration: none;"> <div  style="height: 50px; color: gray; cursor: pointer; border-bottom: 0px solid transparent;" class="p-2 text-small res_text_small">
Logout
                </div></a>
    
   
                    </div>
                
                







<br>
                    <div class="d-dural-flex" id="sign" style="transition-delay: 2s;">
                        



                  </div>
                
                </div></div>
</div>




<br>
<br>




<br>
<br>
















<footer class="footer mt-auto py-3 text-white bg-twist-bold">

          <center>
  <p style="font-weight:800;">Develope and Design @ <a href="http://www.durallite.epizy.com">Durallite</a> Packages</p>
</center>
    
</footer>
  
<!-- footer -->
<!-- end footer --> 


<script src="ADMIN_files/Sci.js"></script>
<script src="ADMIN_files/sidebars.js"></script>
      <script src="ADMIN_files/bootstrap.js"></script>
<script>

setInterval(() => {
$.get("c_count.php", function(data){

$("#c_count").html(data);

});


}, 1000);
</script>

</body></html>
<?php
  }}}
?>