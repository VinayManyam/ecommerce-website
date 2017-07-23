<?php
include 'dbconnect.php';
include 'sess.php';
extract($_POST);
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
date_default_timezone_set('asia/kolkata');
$time= date('d-m-Y H:i:s');


if(isset($new)){
  
 /* 
  $str="insert into products (name,price,description,colors,sizes,qunt,img,uid) values ('$name','$price','$disc','$colors[0]','$size[0]','$qunt','$img','$id')";
  $qer=mysqli_query($con,$str);
  if($qer){
      echo "success";
  }else{
      echo "failed";
  }
  */
}





if(isset($update)){
    $id=$_SESSION['id'];
 $str="UPDATE users SET uname='$name',uemail='$email',phone='$phone'  WHERE uid='$id'"; 
   $qes=mysqli_query($con,$str);
   if($qes){
       
       header('location:account.php');
   }else {
       
       header('location:account.php');
   }
    
}







if(isset($action)){
if($_POST['action']=='logout'){
    logout();
}}

function logout(){
    session_start();
    session_destroy();
    
}

if(isset($Register)){
register($_POST);
}

if(isset($signin)){
  signin($_POST); 
  
}

function signin($data){
    extract($data);
	include "dbconnect.php";
        $email= addslashes(trim(strip_tags($email)));
        $password= addslashes(trim(strip_tags($password)));
$qer="select * from users where uemail='$email' and upass='$password' ";	
$qes=mysqli_query($con,$qer);


if(mysqli_num_rows($qes)>0)
{
        session_start();
        $qer="select uname,uid,ugroup from users where uemail='$email' and upass='$password' ";
$qes=mysqli_query($con,$qer);
$row= mysqli_fetch_assoc($qes);

        $_SESSION['name']=$row['uname'];
        $_SESSION['id']=$row['uid'];
       $_SESSION['gid']=$row['ugroup'];
       
        header('location:index.php');
	
}
else
{
 header('location:signin.php?error=1');	
}

    
    
}











function register($data){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
date_default_timezone_set('asia/kolkata');
$time= date('Y-m-d H:i:s');

extract($_POST);
    include 'dbconnect.php';
    
$st="select * from users where uemail='$email'";    
    $res=mysqli_query($con,$st);
   // print_r($res);
    
   if(mysqli_num_rows($res)<1){
    
    
$str="INSERT INTO users(uname,upass, uemail,created, ip, phone) VALUES('$name','$password','$email','$time','$ip','$phone')";
$qer=mysqli_query($con,$str);
if($qer){
   header('location:index.php');
}else 
{
echo "registration failed";
 header('location:register.php?error=2');
}

   }else{
   header('location:register.php?error=1');
   }



}











?>


