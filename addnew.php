<?php

include "sess.php";
if(isset($_SESSION['gid'])){ 
 include 'dbconnect.php';
 $id=$_SESSION['id'];
    $qer="select uname,uemail,phone from users where uid='$id'";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes); 
    
    //last id
          $res= 'SELECT max(pid) as max FROM products';
          $qe=mysqli_query($con,$res);
          $last= mysqli_fetch_assoc($qe);
          $last=$last['max']+1;
          
 }
else  header('location:index.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign In :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/example-styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo-styles.css">
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/jquery.multi-select.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
    function load(){
        document.getElementById('state').style.display="block";
        document.getElementById('error').innerHTML="y r out";
    }
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
                       
                        
		});
                
                 $(function(){
                        $('#color').multiSelect();
                        $('#size').multiSelect();
                        });
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
<?php include 'manu.php';?>

             
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
	 <div class="login-page-bottom">
          	</div>
		<div class="widget-shadow">
			<div class="alert alert-danger" role="alert" id="state" style="display:none">
					<strong id="error"></strong> 
				</div>
                    	<div class="alert alert-success" role="alert" id="state1" style="display:none">
					<strong id="success"></strong> 
				</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
                     
                            <form method="post" action="" enctype="multipart/form-data">
                               Name: <input type="text" name="name" value="" placeholder="name">
                               Price: <input type="text" name="price"  placeholder="Price" >
                               Quantity: <input type="number" min="1" name="qunt" value="1"><br><br>
                               Color: &nbsp; &nbsp; &nbsp;<select id="color" name="colors[]" multiple>
                                 <option value="3">Red</option>
                                    <option value="4">Blue</option>
                                    <option value="1">Yellow</option>
                                     <option value="2">Green</option>
                                     <option value="5">black</option>
                                      <option value="6">pink</option>
                                       <option value="7">white</option>
                                        <option value="8">orange</option>
                                         <option value="9">brown</option>
                                          
                               </select><br><br>
                               
                                    Size: &nbsp;&nbsp; &nbsp; &nbsp;<select id="size" name="size[]" multiple>
                                 <option value="1">1-6M</option>
                                 <option value="2">6-12M</option>
                                 <option value="3">1-2Y</option>
                                 <option value="4">2-3Y</option>
                                 <option value="5">3-4Y</option></select><br><br>
                                 <table><tr><td>Image:&nbsp;&nbsp; &nbsp;</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr></table><br>
                                    
                                Description:<br><textarea name="disc" rows="4" cols="52"></textarea>
                                    <input type="submit" name="new" value="Add">
					
				</form>
			</div>
		</div>
      
	</div>
	<!--//login-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Modern <b>Shoppe</b> <span class="tag">Everything for Kids world </span> </a></h4>
					<p>© 2016 Modern Shoppe . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="products.html">new</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="checkout.html">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->			
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>



<?php
echo "<script>document.getElementById(\"state\").style.display=\"none\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML=\" \";</script>";
?>
<?php
if(isset($_POST['new'])){
extract($_POST);
$target_dir = "images/";
$filename=$_FILES["fileToUpload"]["name"];
$tel=explode(".",$filename);
$extension=end($tel);
$newfilename=$last.".".$extension;

$target_file = $target_dir .$newfilename;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML=\" File is not an image.\";</script>";
        
        $uploadOk = 0;
    }
if ($_FILES["fileToUpload"]["size"] > 2000000) {
        echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\"Sorry, your file is too large.\";</script>";
    
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
            echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\";</script>";
    
    $uploadOk = 0;
}
if ($uploadOk == 0) {
            echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, your file was not uploaded.\";</script>";
    
} else {
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
     $str="insert into products (name,price,description,colors,sizes,qunt,img,uid) values ('$name','$price','$disc','$colors[0]','$size[0]','$qunt','$newfilename','$id')";
  $qer=mysqli_query($con,$str);
  if($qer){
      
      for($i=0;$i<count($colors);$i++){
          $str="insert into color (pid,scid) values ('$last','$colors[$i]')";
          mysqli_query($con, $str);
      }
          for($i=0;$i<count($size);$i++){
          $str="insert into size (pid,scid) values ('$last','$size[$i]')";
          mysqli_query($con, $str);
      }
      
      
       echo "<script>document.getElementById(\"state1\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"success\").innerHTML+=\" product added successfuly.\";</script>";
      
  }else{
echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
      
  }
     
        
        
        
        
 
 
        
    } else {
echo "<script>document.getElementById(\"state\").style.display=\"block\";</script>";
echo "<script>document.getElementById(\"error\").innerHTML+=\" Sorry, there was an error uploading your file.\";</script>";
        
    }
}
}
?>
