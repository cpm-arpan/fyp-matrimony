$(function(){
	$("#xmail_error_message").hide();
	$("#Email").keyup(function() {

		check_mail1();
		
	});
	function check_mail1() {
		var patmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
);
		var patnum = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);
		if(patmail.test($("#Email").val()) && $("#Email").val().length > 10) {
			//$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#xmail_error_message").hide();
			error_email = false;
		}
		else if(patnum.test($("#Email").val())){
			
			//$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#xmail_error_message").hide();
			error_email = false;	
		}
		else {
			$("#xmail_error_message").html("Invalid Email or Mobile number.");
			$("#xmail_error_message").show();
			error_email = true;
		}
	
	}

	$("#lgform1").submit(function() {
											
		error_email = false;
		
		check_mail1();
		
		if(error_email == false) {
			return true;
		} else {
			return false;	
		}

	});
	

});

$(function(){
	$("#ymail_error_message").hide();
	$("#mail").keyup(function() {

		check_mail2();
		
	});
	function check_mail2() {
		var patmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
);
		var patnum = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);
		if(patmail.test($("#mail").val()) && $("#mail").val().length > 10) {
			//$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#ymail_error_message").hide();
			error_email = false;
		}
		else if(patnum.test($("#mail").val())){
			
			//$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#ymail_error_message").hide();
			error_email = false;	
		}
		else {
			$("#ymail_error_message").html("Invalid Email or Mobile number.");
			$("#ymail_error_message").show();
			error_email = true;
		}
	
	
	}
	$("#login").submit(function() {
											
		error_email = false;
		
		check_mail2();
		
		if(error_email == false) {
			return true;
		} else {
			return false;	
		}

	});
	

});

$(function() {

	$("#mail_error_message").hide();
	$("#name_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	//$("#email_error_message").hide();
	var error_name = false;
	//var error_username = false;
	var error_password = false;
	var error_retype_password = false;
	//var error_email = false;


	$("#name").keyup(function() {

		check_name();
		
	});	

	/*$("#form_username").focusout(function() {

		check_username();
		
	});
*/
	$("#form_password").keyup(function() {

		check_password();
		
	});

	$("#form_retype_password").keyup(function() {

		check_retype_password();
		
	});

	$("#email").keyup(function() {

		check_mail();
		
	});

	function check_name() {

		var pattern = new RegExp(/(\%27)|(\')|(\-\-)|(\%23)|(#)/i);
		var pat2 = new RegExp(/[1-9][0-9]*|0/);
		var pat3 = new RegExp(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/);
		if(pattern.test($("#name").val())) {
			$("#name_error_message").html("Invalid Name, You can only use A-Z");
			$("#name_error_message").show();
			error_name = true;

		}
		else if(pat2.test($("#name").val())){
			$("#name_error_message").html("Invalid Name, You can only use A-Z");
			$("#name_error_message").show();
			error_name = true;
		}
		else if(pat3.test($("#name").val())){
			$("#name_error_message").html("Invalid Name, You can only use A-Z");
			$("#name_error_message").show();
			error_name = true;
		}
		else {
			$("#name_error_message").hide();
		}
	
	}

	function check_mail() {
		var patmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
);
		var patnum = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);
		if(patmail.test($("#email").val()) && $("#email").val().length > 10) {
			//$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#mail_error_message").hide();
			error_email = false;
		}
		else if(patnum.test($("#email").val())){
			
			//$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#mail_error_message").hide();
			error_email = false;	
		}

		/*var pat3 = new RegExp(/[!$%^&*()+|~=`{}\[\]:";'<>?,\/]/);
		if(pattern.test($("#email").val())) {
			$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#mail_error_message").show();
			error_email = true;

		}*/
		
		/*else if(pat3.test($("#email").val())){
			$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#mail_error_message").show();
			error_email = true;
		}*/
		else {
			$("#mail_error_message").html("Invalid Email or Mobile number.");
			$("#mail_error_message").show();
			error_email = true;
		}
	
	}
	/*function check_username() {
	
		var username_length = $("#form_username").val().length;
		
		if(username_length < 5 || username_length > 20) {
			$("#username_error_message").html("Should be between 5-20 characters");
			$("#username_error_message").show();
			error_username = true;
		} else {
			$("#username_error_message").hide();
		}
	
	}
*/
	function check_password() {
		var pat3 = new RegExp(/[!$%^&*()+|~=`{}\[\]:";'<>?,\/]/);

		var password = $("#form_password").val();
		var password_length = $("#form_password").val().length;
		
		if(pat3.test($("#form_password").val())){
			$("#password_error_message").html("Use alphabets[a-z A-Z] and numbers [0-9] only in password.");
			$("#password_error_message").show();
			error_password = true;
		}
		else if(password_length < 6) {
			$("#password_error_message").html("Password should be at least 6 characters");
			$("#password_error_message").show();
			error_password = true;
		} 
		else if(password_length > 16){
			$("#password_error_message").html("Password can be at most 16 characters");
			$("#password_error_message").show();
			error_password = true;	
		}
		else {
			$("#password_error_message").hide();
		}
	
	}

	function check_retype_password() {
	
		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		
		if(password !=  retype_password) {
			$("#retype_password_match_message").hide();
			$("#retype_password_error_message").html("Passwords don't match");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
			$("#retype_password_match_message").html("Password Matched!");
			$("#retype_password_match_message").show();
		}
	
	}

	/*function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Invalid email address");
			$("#email_error_message").show();
			error_email = true;
		}
	
	}*/

	$("#registration_form").submit(function() {
											
		error_name = false;
		error_password = false;
		error_retype_password = false;
		error_email = false;
											
		check_name();
		check_mail();
		check_password();
		check_retype_password();
		
		
		if(error_email == false && error_name == false && error_password == false && error_retype_password == false) {
			return true;
		} 
		else {
			return false;	
		}

	});

});