const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const position = document.getElementById('position');
const empid = document.getElementById('emp');
form.addEventListener('submit', function(e){
	e.preventDefault()
	
  if(checkInputs()) {
    alert("You have successfully created an account!");
    window.location.href = 'http://localhost/project/backend/register.php'; // Redirect to the success page
} else {
    
}
  
});

function checkInputs() {
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	const positionvalue = position.value.trim();
  const empvalue=emp.value.trim();
  
	if(usernameValue === '') {
		setErrorFor(username, 'Fullname cannot be blank');
   
	} else {
		setSuccessFor(username);
    
	}
    if(positionvalue === '') {
		setErrorFor(position, 'Position cannot be blank');
    
	} else {
		setSuccessFor(position);
    
	}
     if(empvalue === '') {
		setErrorFor(emp, 'ID cannot be blank');
    
	} else {
		setSuccessFor(emp);
    
	}
    if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
    
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
   
	} else {
		setSuccessFor(email);
    
	}
if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
    
	} else if(passwordValue.length<8||passwordValue.length>16){
    setErrorFor(password, 'password must be between 8 and 16');
  } 
  else {		
    setSuccessFor(password);
    }
	
	 if(password2Value === '') {
		setErrorFor(password2, 'Confirm Password cannot be blank');
    
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
    
	} else{
    setSuccessFor(username);
    setSuccessFor(emp);
	setSuccessFor(password2);
    setSuccessFor(password);
    setSuccessFor(email);    
    setSuccessFor(position);
    return true;
	}
  

}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}












