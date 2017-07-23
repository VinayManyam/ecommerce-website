<?php 
include 'sess.php';
if(isset($_GET['productid'])){
    $id= addslashes(base64_decode($_GET['productid']));
 include "dbconnect.php";
$qer="select * from products where pid='$id'";	
$qes=mysqli_query($con,$qer); 
if(mysqli_num_rows($qes)>0){
$str=mysqli_fetch_assoc($qes);

$qer="select * from products limit 4";	
$qes=mysqli_query($con,$qer);
$list=array();
while($row= mysqli_fetch_assoc($qes)){
    $list[]=$row;
}

function callme($scid){
    include 'dbconnect.php';
    $qer="select pid from size where sid=$scid";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes);
    return $data['pid'];
}

$qer="select scid from size where pid=$id";	
$qes=mysqli_query($con,$qer);
$ar=array();
while($row= mysqli_fetch_assoc($qes)){
    $ar[]=callme($row['scid']);
}

function callme2($scid){
    include 'dbconnect.php';
    $qer="select pid from color where cid=$scid";	
$qes=mysqli_query($con,$qer);
    $data= mysqli_fetch_assoc($qes);
    return $data['pid'];
}

$qer="select scid from color where pid=$id";	
$qes=mysqli_query($con,$qer);
$ar2=array();
while($row= mysqli_fetch_assoc($qes)){
    $ar2[]=callme2($row['scid']);
}

}else header('location:index.php');


  }else header('location:index.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
   
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.multi-select.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
    $('#pro').on('change', function() {
                         $.post(  
                  "users.php", 
                  { action: "logout" }, 
                  function(data) { 
                      location.reload(true);
                  } 
               );
    
                          
                          
  //alert( this.value );
});
 $(function(){
             $('#color').multiSelect();
             $('#size').multiSelect();
                        });
  
});
function load(){
 count=document.getElementById('fileupload');  
 
    if(count.files.length==3){
       return true;
   }else{
       alert('plase select 3 images');
       return false;
   }
}


</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<?php if(!isset($_SESSION['id']))   include 'head/alert.php'; ?>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Modern <b>Shoppe</b><span class="tag">Everything for Kids world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						 <?php if(isset($_SESSION['id'])) include 'head/select.php'; ?>
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.php">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php include 'manu.php';?>
	<!--//header-->
	<!--breadcrumbs-->
<div id="error"></div>
<div id="state"></div>
	<div class="single">
		<div class="container">
			<div class="single-info">		
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/s1.jpg">
								<div class="thumb-image"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/s2.jpg">
								 <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/s3.jpg">
							   <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
				</div>
				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
                                    <form method="post" action="" enctype="multipart/form-data" onsubmit="return load()">
					<h3><input type="text" name="name" size="37" value="<?php echo $str['name'];?>"></h3>
                                        <div class="single-rating">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" checked>
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<p><?php echo $str['rate'];?> out of 5</p>
						<a href="#">Add Your Review</a>
					</div>
                                        <table><tr><td><font color="orange" size="4">Price (&#8377) :  </font></td>
                                                <td><h6 class="item_price">&nbsp;<input type="text" name="price" value="<?php echo $str['price'];?>"></h6></td></tr></table>
					<br>
                                         
                                        
					
					
                                        <font color="orange" size="4">Sizes :  </font> &nbsp;
                                            <select id="size" name="size[]" multiple>
                                 <option value="1">1-6M</option>
                                 <option value="2">6-12M</option>
                                 <option value="3">1-2Y</option>
                                 <option value="4">2-3Y</option>
                                 <option value="5">3-4Y</option></select>
                                              
					<br>
					<br>
                                         <font color="orange" size="4">Colors :  </font>
                                         <select id="color" name="colors[]" multiple>
                                 <option value="3">Red</option>
                                    <option value="4">Blue</option>
                                    <option value="1">Yellow</option>
                                     <option value="2">Green</option>
                                     <option value="5">black</option>
                                      <option value="6">pink</option>
                                       <option value="7">white</option>
                                        <option value="8">orange</option>
                                         <option value="9">brown</option>
                                          
                               </select>
					
					<div class="clearfix"> </div><br>
					<div class="quantity">
					<font color="orange" size="4">Qty :  </font>	<input min="1" type="number" name="qnt" value="<?php echo $str['qunt'];?>" class="item_quantity">
					</div>
                                         <table><tr><td valign="top"><br><font color="orange" size="4">Description :  </font></td>
                                                  <td valign="top"><p>&nbsp;<textarea  cols="37" rows="3" name="description"><?php echo $str['description'];?></textarea> </p></td></tr></table>
					<table><tr><td><font color="orange" size="4">Images :  </font></td><td><input id="fileupload" class="image" type="file" name="image[]" accept="image/*" multiple></td></tr></table><br>
                                       
					
                                            <input type="submit" name="update" value="Update">	
					</form>
                                    
				</div>
			   <div class="clearfix"> </div>
			</div>
					
		</div>
	</div>
	<!--//single-page-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Modern <b>Shoppe</b> <span class="tag">Everything for Kids world </span> </a></h4>
					<p>© 2016 Modern Shoppe . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="products.php">new</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="checkout.php">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required>
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
if(isset($_POST['update'])){
extract($_POST);

$str="update products set name='$name',price='$price',description='$description',colors='$colors[0]',sizes='$size[0]',qunt='$qnt' where pid='$id'";

$qer=mysqli_query($con,$str);

  if($qer){
      echo 'success<br>';
      $str1="DELETE FROM color WHERE pid=$id";
      
      $str2="DELETE FROM size WHERE pid=$id";
      
      if(mysqli_query($con, $str1) && mysqli_query($con, $str2)){
           for($i=0;$i<count($colors);$i++){
          $str="insert into color (pid,scid) values ('$id','$colors[$i]')";
          mysqli_query($con, $str);
      }
          for($i=0;$i<count($size);$i++){
          $str="insert into size (pid,scid) values ('$id','$size[$i]')";
          mysqli_query($con, $str);
      }
      
      echo "successfully updated";
      }else "something went wrong";
      
     
  }else echo "failed";
     
}
?>
