var prevMenuname = "";

function validateForm() {
    var isValid = true;


    if (!validateMenuname()) {
        isValid = false;
    }

    return isValid;
}

function validateKeyPress(event) {
    var menuname = document.getElementById("menuname");


    menuname.value = menuname.value.toUpperCase();


    if (menuname.value !== prevMenuname) {
        validateMenuname();
        prevMenuname = menuname.value;
    }

    var keyCode = event.which || event.keyCode;

    if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) {
            return true;
            } else {
                event.preventDefault();
                return false;
            }
}
// || keyCode === 32

function validateMenuname() {
    var menuname = document.getElementById("menuname");
    var menuError = document.getElementById("menuError");


    menuname.value = menuname.value.toUpperCase();


    if (menuname.value.trim() === "") {
        menuError.textContent = "Menu Name is required.";
        return false;
    } else if (menuname.value.length < 3) {
        menuError.textContent = "Menu Name should be at least 3 characters.";
        return false;
    } else if (hasConsecutiveRepeats(menuname.value)) {
        menuError.textContent = "Same characters are not allowed more than 4 times.";
        return false;
    }

    menuError.textContent = "";
    return true;
}

function hasConsecutiveRepeats(value) {
    var charArray = value.split('');
    for (var i = 0; i < charArray.length - 3; i++) {
        if (charArray[i] === charArray[i + 1] &&
            charArray[i] === charArray[i + 2] &&
            charArray[i] === charArray[i + 3]) {
            return true;
        }
    }
    return false;
}

document.getElementById("menuname").addEventListener("keypress", validateKeyPress);
document.getElementById("menuname").addEventListener("blur", validateMenuname);
