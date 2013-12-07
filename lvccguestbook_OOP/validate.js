function check_name(){
			var name = document.getElementById("fname").value;
				if(name.length > 0){
					return true;
				}else{
					document.getElementById("err_name").innerHTML = 'Enter Your Name';
					return false;
				}
		}

		function check_email(){
			var email = document.getElementById("email").value;
			var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			if(email.match(emailExp)) {
				return true;
			}else{				
				document.getElementById("err_email").innerHTML = 'Invalid Email';
				return false;
			}

		}

		function check_message(){
			var message = document.getElementById("message").value;
				if(message.length > 0){
					return true;
				}else{
					document.getElementById("err_message").innerHTML = 'Please Enter Message';
					return false;
				}
		}

		function validate(){
			if(check_name() && check_email() && check_message()){
				return true;
			}else{
				alert("Error Sending Message!!");
				return false;
			}
		}
