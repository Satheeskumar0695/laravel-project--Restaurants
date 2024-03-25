function validateForm() {
    var isValid = true;

 if(!validateEmail())
   {
    isValid = false;
}
if(!validatepassword())
   {
    isValid = false;
   }

 return isValid;
 }
 function validateEmail() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value.toLowerCase();
    var emailError = document.getElementById("emailError");

    if (email.trim() === "") {
        emailError.textContent = "Email is required.";
        return false;
    } else if (!isValidEmail(email)) {
        emailError.textContent = "Please enter a valid email address.";
        return false;
    }

    emailError.textContent = "";
    emailInput.value = email;
    return true;
}

function isValidEmail(email) {
    // Regular expression for validating email addresses
    var emailRegex = /^[a-zA-Z][a-zA-Z0-9._-]*@[a-z0-9.-]+\.[a-z]{2,4}$/;
    return emailRegex.test(email);
}


document.getElementById("email").addEventListener("blur", validateEmail);

function validatepassword() {
var password=document.getElementById("password");
var passwordError=document.getElementById("passwordError");
if (password.value.trim() === "") {
        document.getElementById("passwordError").textContent = "Password is required.";
        isValid = false;
    } else if (password.value.length < 8) {
        document.getElementById("passwordError").textContent = "Password should be at least 8 characters long.";
        isValid = false;
    } else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=]).*$/.test(password.value)) {
        document.getElementById("passwordError").textContent = "Password should contain at least one lowercase letter, one uppercase letter, one digit, and one special character.";
        isValid = false;
    }
    else{
        passwordError.textContent = "";
    return true;
    }
}
    document.getElementById("password").addEventListener("blur", validatepassword);


var form = document.getElementById("registrationForm");
        form.addEventListener("submit", function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });
