<?php 
if(isset($_GET['error']))
{
    switch($_GET['error']){
        case 1:
    include 'errors/error1.php';
    break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
                
                
 function validate_register_formdata(){
			flag=true;
                   
		var name=document.getElementById('Username').value;
         var Phone=document.getElementById('Phone').value;
		var namepattern=/^[A-Za-z]{5,15}$/;
		var email=document.getElementById('Email').value;
		var emp= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var password=document.getElementById('Password').value;
                var pswp=/^(?=.*[A-Z])[a-zA-Z0-9]{4,15}$/;
                
                var php= /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
		if (name=='') {
			flag=false;
			document.getElementById('ne').innerHTML="<font color=\"red\">*Name is required</font>";
document.getElementById('Username').style.border="1px solid red";
		}
		if (email=='') {
			flag=false;
			document.getElementById('ee').innerHTML="<font color=\"red\">*Email is required</font>";
		document.getElementById('Email').style.border="1px solid red";
		}
		
		if (password=='') {
			flag=false;
			document.getElementById('pe').innerHTML="<font color=\"red\">*Password is required</font>";
                        document.getElementById('Password').style.border="1px solid red";
		}
	if(Phone=='')
        {
           flag=false;
			document.getElementById('phe').innerHTML="<font color=\"red\">*Phone Number is required</font>";
		document.getElementById('Phone').style.border="1px solid red"; 
        }
        if(name!=''){
			if(!namepattern.test(name)){
					flag =false;
					document.getElementById('ne').innerHTML="<font color=\"red\">*invalid Name</font>";
					document.getElementById('Username').style.border="1px solid red";
					}
					else{
					document.getElementById('ne').innerHTML='';
					document.getElementById('Username').style.border="";
						}
			
				}
                                
        if(password!=''){
			if(!pswp.test(password)){
					flag =false;
					document.getElementById('pe').innerHTML="<font color=\"red\">*Plese keep strong password</font>";
					document.getElementById('Password').style.border="1px solid red";
					}
					else{
					document.getElementById('pe').innerHTML='';
					document.getElementById('Password').style.border="";
						}
			
				}
        if(Phone!=''){
			if(!php.test(Phone)){
					flag =false;
					document.getElementById('phe').innerHTML="<font color=\"red\">*invalid phone number</font>";
					document.getElementById('Phone').style.border="1px solid red";
					}
					else{
					document.getElementById('phe').innerHTML='';
					document.getElementById('Phone').style.border="";
						}
			
				}
               
                                
                if(email!=''){
			if(!emp.test(email)){
					flag =false;
					document.getElementById('ee').innerHTML="<font color=\"red\">*invalid Email</font>";
					document.getElementById('Email').style.border="1px solid red";
					}
					else{
					document.getElementById('ee').innerHTML='';
					document.getElementById('Email').style.border="";
						}
			
				}
                                
                                
                   
                                
        
        
        
                                     
                               
                    //alert(flag);            	
		return flag;
		}
                
                
                
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
<?php include 'manu.php';?>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<h3 class="title" align="center">Register<span> Form</span></h3>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Already have an Account ?<a href="signin.php">  Sign In »</a> </h4>
			</div>
			<div class="login-body">
                            <form class="wow fadeInUp animated" data-wow-delay=".7s" method="post" action="users.php" onsubmit="return validate_register_formdata()">
                                <span id="ne"></span><input type="text" name="name" placeholder="Name"  id="Username">
                                 <span id="ee"></span><input type="text" name="email" placeholder="Email" id="Email">
                                 <span id="phe"></span>	<input type="text" name="phone" value="+91" id="Phone"  >
				<span id="pe"></span><input type="password" name="password" class="lock" placeholder="Password" id="Password">
					<input type="submit" name="Register" value="Register">
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
	
    <script src="js/bootstrap.js"></script>
</body>
</html>