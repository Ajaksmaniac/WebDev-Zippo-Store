
			
			$( document ).ready(function() {
				$("#contact-form-message").css( "width:100px","height:10px;");
				$("#contact-form-email").css( "width:100px","height:10px;");
				$("#contact-form-submit").css( "width:35px","height:8px;");
			});
			
		
			//checks if email matches the right pattern
			function valid_email(email) {
				return email.match(/^([\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+\.)*[\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+@((((([a-z0-9]{1}[a-z0-9\-]{0,62}[a-z0-9]{1})|[a-z])\.)+[a-z]{2,6})|(\d{1,3}\.){3}\d{1,3}(\:\d{1,5})?)$/i);
		 }

		 	

		 function valid_name(name){
			 return name.match(/^[A-z]{3,}$/)
		 }
			
			$("#buy-form-email").focus(function () {
				//stuff to do on focus
				$(this).animate({width: "200", height:"16px"}, 300);
					
					
			});
			//buy form email regex
			$("#buy-form-email").focusout(function () {
				//stuff to do on focus out	
					
				var span = document.getElementById("span1");
				
				var emailBox = document.getElementById("buy-form-email");
				console.log("start");
				if(!valid_email(emailBox.value)){
				emailBox.focus();
				span.innerHTML = "Email not valid!"; 
				//hides button if the email is not right
				$("#buy-form-submit").hide();
				
	
				}else{
					span.innerHTML = " ";
	
					//shows the button
					$("#buy-form-submit").show();
					$(this).animate({width: "170px", height:"16px"}, 200);
				}
					
					
			});	
			//buy form fName Regex
			$("#contact-form-fnameinput").focusout(function () {
				//stuff to do on focus out	
					
				var span = document.getElementById("span2");
				
				var fNameBox = document.getElementById("contact-form-fnameinput");
				console.log("start");
				if(!valid_name(fNameBox.value)){
				fNameBox.focus();
				span.innerHTML = "First name not valid!"; 
				//hides button if the email is not right
				$("#buy-form-submit").hide();
				
	
				}else{
					span.innerHTML = " ";
	
					//shows the button
					$("#buy-form-submit").show();
					$(this).animate({width: "170px", height:"16px"}, 200);
				}
					
					
			});	
			//buy form lName Regex
			$("#contact-form-lnameinput").focusout(function () {
				//stuff to do on focus out	
					
				var span = document.getElementById("span3");
				
				var fNameBox = document.getElementById("contact-form-lnameinput");
				console.log("start");
				if(!valid_name(fNameBox.value)){
				fNameBox.focus();
				span.innerHTML = "Last Name not valid!"; 
				//hides button if the email is not right
				$("#buy-form-submit").hide();
				
	
				}else{
					span.innerHTML = " ";
	
					//shows the button
					$("#buy-form-submit").show();
					$(this).animate({width: "170px", height:"16px"}, 200);
				}
					
					
			});	

					
			//contact form email regex
			$("#contact-form-email").focusout(function () {
				//stuff to do on focus out	
					
				var span = document.getElementById("span");
				
				var emailBox = document.getElementById("contact-form-email");
				console.log("start");
				if(!valid_email(emailBox.value)){
				emailBox.focus();
				span.innerHTML = "Email not valid!"; 
				//hides button if the email is not right
				$("#contact-form-submit").hide();
				
	
				}else{
					span.innerHTML = " ";
	
					//shows the button
					$("#contact-form-submit").show();
					$(this).animate({width: "170px", height:"16px"}, 200);
				}
					
					
				});	
					
			//contact form email animation
			$("#contact-form-email").focus(function () {
				//stuff to do on focus
				$(this).animate({width: "200", height:"16px"}, 300);
						
						
			});	
			//contact form message animation
			$("#contact-form-message").focus(function () {
			//stuff to do on focus
				$(this).animate({width: "400px", height:"100px"}, 300);
				
			});	
			
			$("#contact-form-message").focusout(function () {
			//stuff to do on focus out			
				$(this).animate({width: "170px", height:"16px"}, 200);
				
			});	