<html> 
   <head> 
      <title>The jQuery Example</title> 
      <script type="text/javascript" src="js/jquery.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
function load(){
 count=document.getElementById('fileupload');  
 
    if(count.files.length==3){
       alert('done');
       return true;
   }else{
       alert('plase select 3 images');
       return false;
   }
}

function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}


      </script> 
   
   </head> 
  
   <body> 
       
       <form name="myForm" action="/action_page_post.php"
onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
       
       
       <form method="POST" action="" onsubmit="return load()">
  <input id="fileupload" class="image" type="file" name="files[]" accept="image/*" multiple>
  <input type="submit" name="name" value="sumit">
</form>
   
   </body> 
  
</html>