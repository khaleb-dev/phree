
function authenticate(username, password) 
{
	var dbuname  = window.localStorage.getItem("username");
	var dbpswd = window.localStorage.getItem("password");


	var usernameStatus = false;
	var passwordStatus = false;

	var statusCode = 0;
	
	//check if inputed username == the username in db 
	if (username == dbuname) {
		usernameStatus = true;
	}

	//check if inputed password == the password in db 
	if (password == dbpswd) {
		passwordStatus = true;
	}

	console.log('db username ' + dbuname );
	console.log('db password ' + dbpswd );
	console.log('password ' + passwordStatus );
	console.log('username ' + usernameStatus );
	//returns statusCode 1 if username is correct and password is not correct
	//returns statusCode 2 if password is correct and username is not correct
	//returns statusCode 3 if neither username and password is correct
	//returns statusCode 4 if username and password is correct

	if (usernameStatus == true && passwordStatus == false) {
		statusCode = 1;
	} 
	else if (passwordStatus == true && usernameStatus == false) {
		statusCode = 2;
	}
	else if (usernameStatus == false && passwordStatus == false) {
		statusCode = 3;
	}
	else if (usernameStatus == true && passwordStatus == true) {
		statusCode = 4;
	}

	return statusCode; //use the return statement to know which argument was actually delivered.
}

function checkAccess() /*on button click, use this function to extract the inputed user details and pass it on to function authenticate() which will compare if the details provided by the user is the same with those in the db*/
{
	var uname = document.getElementById('uname').value; //get the inputed username
	var pwd = document.getElementById('pwd').value; //get the inputed password

	var statusCode = authenticate(uname, pwd);

	console.log(statusCode);
}