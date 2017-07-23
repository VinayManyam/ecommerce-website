        	function validate_register_formdata(){
			flag=true;
                     
		var name=document.getElementById('Username').value;
         
		var namepattern=/^[a-zA-Z]+$/
		var email=document.getElementById('Email').value;
		
		var password=document.getElementById('Password').value;
		if (name=='') {
			flag=false;
			document.getElementById('ne').innerHTML='Name is required';
document.getElementById('Username').style.border="1px solid red";
		}
		if (email=='') {
			flag=false;
			document.getElementById('ee').innerHTML='Email is required';
		document.getElementById('Email').style.border="1px solid red";
		}
		
		if (password=='') {
			flag=false;
			document.getElementById('pe').innerHTML='Password is required';
                        document.getElementById('Password').style.border="1px solid red";
		}
		if(name!=''){
			if(!namepattern.test(name)){
					flag =false;
					document.getElementById('ne').innerHTML='Invalid Username';
					document.getElementById('Username').style.border="1px solid red";
					}
					else{
					document.getElementById('ne').innerHTML='';
					document.getElementById('Username').style.border="";
						}
			
				}
                                
                                	
		return flag;
		}