
//
var form = document.getElementById('sdata'); 
window.onclick = function(event) { 
	if (event.target == form) { 
		form.style.display = "none"; 
	} 
}

// Validate signup form
function validator()
		{
			var surname = document.getElementById("surname");
			var othernames = document.getElementById("othernames");
			var dob = document.getElementById("dob");
			var sex = document.getElementById("sex");
			var email = document.getElementById("email");
			var mobile = document.getElementById("mobile");


			if (surname.value == ""){ //if surname have no value,
				alert("Please input your Surname"); //show an alert
				surname.focus(); //also identify the empty space
				return; //stop alert
			}
			
			if (othernames.value == ""){
				alert("Please Other Names");
				othernames.focus();
				return;
			}

			
			if (dob.value == ""){
				alert("Date of Birth is missing");
				dob.focus();
				return;
			}

			if (sex.value == ""){
				alert("Please select ypou Gender");
				sex.focus();
				return;
			}
			
			if (email.value == ""){
				alert("Put your email address");
				email.focus();
				return;
			}

			if (mobile.value.length<11){
				alert("Invalid Phone Number");
				mobile.focus();
				return;
			}
		}