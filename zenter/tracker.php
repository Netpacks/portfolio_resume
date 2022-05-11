

<?php 
require 'robot.php';
@import('cord_sql');

?>


<style>
	.themed-block:first-of-type {
	--back-color: #EBECF0;
	--text-color: #A2B1CA;
	--title-color: #6C7A92;
	--shadow-color: 0, 0, 0;
	--light-color: 255, 255, 255;
	--border-active-color: #EEE;
	--main-action-left: #779DFF;
	--main-action-right: #9EB8FF;
	}
	
	.themed-block:nth-of-type(2) {
	--back-color: #2E3237;
	--text-color: #707174;
	--title-color: #A7A9AA;
	--shadow-color: 0, 0, 0;
	--light-color: 80, 80, 80;
	--border-active-color: #444;
	--main-action-left: #D43C0B;
	--main-action-right: #BF8A10;
	}
	
	.btn:focus {
	outline: none;
	}
	
	.neumorphic-btn {
	padding: 10px 15px;
	border-radius: 25px;
	background-color: var(--back-color);
	border: 2px solid var(--back-color);
	box-shadow: 7px 7px 15px 0px rgba(var(--shadow-color), .3), -7px -7px 15px 0px rgba(var(--light-color), 1), inset 0px 0px 0px 0px rgba(var(--shadow-color), 0), inset 0px 0px 0px 0px rgba(var(--light-color), 0);
	transition: all .25s ease;
	color: var(--text-color);
	font-size: 12px;
	text-shadow: 0px 0px 2px rgba(var(--text-color), 0);
	}
	
	.neumorphic-btn:focus {
	box-shadow: 7px 7px 15px 0px rgba(var(--shadow-color), .3), -7px -7px 15px 0px rgba(var(--light-color), 1), inset 0px 0px 0px 0px rgba(var(--shadow-color), 0), inset 0px 0px 0px 0px rgba(var(--light-color), 0);
	text-shadow: 0px 0px 2px rgba(var(--text-color), 0);
	}
	
	.neumorphic-btn:active {
	box-shadow: 7px 7px 15px 0px rgba(var(--shadow-color), .3), -7px -7px 15px 0px rgba(var(--light-color), 1), inset 4px 4px 8px 0px rgba(var(--shadow-color), .3), inset -4px -4px 8px 0px rgba(var(--light-color), 1) !important;
	border: 2px solid var(--border-active-color);
	text-shadow: 0px 0px 2px rgba(var(--text-color), .3);
	}
	
	.neumorphic-btn_primary {
	background: linear-gradient(135deg, var(--main-action-left), var(--main-action-right));
	color: #E0E0E0;
	}
	
	.neumorphic-btn_primary:active {
	box-shadow: 7px 7px 15px 0px rgba(var(--shadow-color), .3), -7px -7px 15px 0px rgba(var(--light-color), 1), inset 4px 4px 20px 0px rgba(0, 0, 0, .3) !important;
	}
	.neumorphic-btn_fab {
	width: 40px;
	height: 40px;
	padding: 0;
	}
	
	.neumorphic-card {
	background-color: #ddd;
	box-shadow: 0 0 6px 6px #dddddd, 12px 12px 16px 8px rgba(136, 136, 136, 0.7), -12px -12px 16px 8px rgba(244, 244, 244, 0.7);
	padding: 25px;
	border-radius: 35px;
	width: max-content;
	}
	.neumorphic-card-black
	{
	background-color: #26282B;
	box-shadow: 0 0 6px 6px #26282B, 12px 12px 16px 8px rgba(2, 2, 2, 0.7), -12px -12px 16px 8px rgba(27, 27, 27, 0.7);
	padding: 25px;
	border-radius: 35px;
	width: max-content;
	
	}
	.neumorphic-text {
	color: var(--text-color);
	font-family: 'Rubik', sans-serif;
	font-weight: 600;
	}
	
	.neumorphic-text_title {
	font-size: 20px;
	color: var(--title-color);
	}
	
	.neumorphic-card__body {
	padding: 15px 0;
	}
	
	.neumorphic-image-wrapper {
	width: 250px;
	height: 250px;
	border-radius: 50%;
	overflow: hidden;
	margin: 0 auto;
	border: 5px solid var(--back-color);
	box-shadow: 7px 7px 15px 5px rgba(var(--shadow-color), .3), -4px -4px 5px 7px rgba(var(--light-color), 1);
	}
	
	
	
	
	
	
	.neumorphic-slider {
	width: 400px;
	max-width: 100%;
	height: 30px;
	position: relative;
	}
	
	.neumorphic-slider__back {
	height: 6px;
	width: 100%;
	border-radius: 3px;
	border: none;
	position: absolute;
	bottom: 10px;
	cursor: pointer;
	box-shadow: inset 2px 2px 3px -2px rgba(var(--shadow-color), .3), inset -2px -2px 3px 0px rgba(var(--light-color), .5);
	}
	
	.neumorphic-slider__line {
	height: 6px;
	width: 40%;
	border-radius: 3px;
	left: 0;
	position: absolute;
	bottom: 9px;
	background: linear-gradient(90deg, var(--main-action-left), var(--main-action-right));
	cursor: pointer;
	}
	
	.neumorphic-slider__thumb {
	width: 30px;
	height: 30px;
	border-radius: 15px;
	margin-left: -15px;
	background-color: var(--back-color);
	position: absolute;
	bottom: -2.4px;
	left: 40%;
	z-index: 1;
	cursor: pointer;
	box-shadow: 4px 4px 5px -2px rgba(var(--shadow-color), .5), -4px -4px 5px 0px rgba(var(--light-color), .4);
	}
	
	.neumorphic-slider__thumb::after {
	content: '';
	display: block;
	background-color: var(--main-action-right);
	width: 15px;
	height: 15px;
	border-radius: 50%;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	box-shadow: inset 2px 2px 6px 0px rgba(var(--shadow-color), .3);
	}
	
	.neumorphic-slider_moving {
	cursor: pointer;
	}
	
	
	
	.neumorphic-slider__text {
	color: var(--text-color);
	font-family: 'Rubik', sans-serif;
	font-size: 10px;
	font-weight: 600;
	}
	
	.neumorphic-slider__text_left {
	position: absolute;
	bottom: 30px;
	left: 0;
	}
	
	.neumorphic-slider__text_right {
	position: absolute;
	bottom: 30px;
	right: 0;
	}
	
	.player-controls .btn {
	width: 70px;
	height: 70px;
	border-radius: 50%;
	font-size: 20px;
	box-shadow: 7px 7px 15px 0px rgba(var(--shadow-color), .3), -7px -7px 15px 0px rgba(var(--light-color), 1), inset -1px -1px 2px 0px rgba(var(--shadow-color), .3), inset 1px 1px 2px 0px rgba(var(--light-color), 1);
	}
	</style>




<?php

$Sci_con=$conn->prepare("SELECT * FROM projects");
$Sci_con->execute();
$lc = $Sci_con->rowCount();
$Sci_conb=$conn->prepare("SELECT * FROM blog");
$Sci_conb->execute();
$bc = $Sci_conb->rowCount();
$Sci_convisitors=$conn->prepare("SELECT * FROM track");
$Sci_convisitors->execute();
$visitors = $Sci_convisitors->rowCount();
?>
<div class="container">


<div class="d-flex p-3 shadow justify-content-between rounded-circle" style="border-bottom: 5px dashed rgb(191 190 190);">


	<strong class="p-2 rounded-circle shadow text-center">
			<button type="button" class="shadow btn neumorphic-btn neumorphic-btn_fab"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi2 bi-bell" viewBox="0 0 16 16">
				<path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"></path>
				  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"></path>
				</svg>  </button>
		<br>
		<strong style="font-weight: 800; font-size: 10px;"><?php echo $bc;  ?></strong>
		</strong>

		
		
<strong class="p-2 rounded shadow text-center">
		<button type="button" class="shadow btn neumorphic-btn neumorphic-btn_fab"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-cloud-upload" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
			<path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
		  </svg> </button>
	<br>
	<strong style="font-weight: 800;"><?php echo $lc;  ?></strong>
	</strong>

	
	
<strong class="p-2 rounded-circle shadow text-center">
	<button type="button" class="shadow btn neumorphic-btn neumorphic-btn_fab"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"  viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg> </button>
	<br>
	<strong style="font-weight: 800; font-size: 10px;"><?php echo $visitors;  ?></strong>
</strong>
	

</div>











<div class="row" style="max-width: 100vw;min-height: 100vh; margin: 0;">




	
	<div class="themed-block col-12 col-lg-12 py-5 justify-content-between">
	<div class=" d-flex flex-column mx-auto">

	<div class="neumorphic-card__body">
	<div class="neumorphic-text neumorphic-text_title text-center mt-5" style="font-family: cursive;">Visitors</div>
	<div class="neumorphic-slider mx-auto" onselectstart="return false">
	<div class="neumorphic-slider__back"></div>
	<div class="neumorphic-slider__line"></div>
	<div class="neumorphic-slider__thumb"></div>
	<div class="neumorphic-slider__text neumorphic-slider__text_right"> <?php echo $visitors;  ?> </div>
	</div>
	</div>
	</div>
	</div>

	
	</div>


</div>






