function validateForm() {
    var isValid = true;

  if (!validateproductName()) {
        isValid = false;
    }
     if (!validateProductDescription()) {
         isValid = false;
     }
     if (!validateProductPrice()) {
         isValid = false;
     }
     if (!validateProductImage()) {
         isValid = false;
     }
     if (! validateMenuOption()) {
         isValid = false;
     }

    return isValid;
}

function validateKeyPress(event) {
var productName = document.getElementById("productName");
var keyCode = event.which || event.keyCode;

if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122 || keyCode === 32)) {
    return true;
} else {
    event.preventDefault();
    return false;
}
}



function validateproductName() {
var productName = document.getElementById("productName");
var prodectnameError = document.getElementById("prodectnameError");

if (productName.value.trim() === "") {
    prodectnameError.textContent = "Product Name is required.";
    return false;
} else if (productName.value.length < 3) {
    prodectnameError.textContent = "Product Name should be at least 3 characters.";
    return false;
} else if (hasConsecutiveRepeats(productName.value)) {
    prodectnameError.textContent = "Same characters are not allowed more than 4 times.";
    return false;
}

prodectnameError.textContent = "";
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
document.getElementById("productName").addEventListener("keypress", validateKeyPress);
document.getElementById("productName").addEventListener("blur", validateproductName);

function validateProductDescription() {
var productDescription = document.getElementById("productdescription");
var productDescriptionError = document.getElementById("productdescriptionError");

if (productDescription.value.trim() === "") {
    productDescriptionError.textContent = "Product Description is required.";
    return false;
} else if (productDescription.value.length > 75) {
    productDescriptionError.textContent = "Product Description should not exceed 75 characters.";
    return false;
}
else if (hasConsecutiveRepeats(productDescription.value)) {
    productDescriptionError.textContent = "Same characters are not allowed more than 4 times.";
    return false;
}
productDescriptionError.textContent = "";
return true;
}

function validateProductDescriptionKeyPress(event) {
var keyCode = event.which || event.keyCode;

// Allow letters (A-Z and a-z), spaces, and backspace
if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || keyCode === 32 || keyCode === 8) {
    return true;
} else {
    event.preventDefault();
    return false;
}
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
document.getElementById("productdescription").addEventListener("keypress", validateProductDescriptionKeyPress);
document.getElementById("productdescription").addEventListener("blur", validateProductDescription);

function validateProductPriceKeyPress(event) {
var keyCode = event.which || event.keyCode;
var productPrice = document.getElementById("productPrice");

// Allow numbers and one dot
if ((keyCode >= 48 && keyCode <= 57) || (keyCode === 46 && productPrice.value.indexOf('.') === -1)) {
    return true;
} else {
    event.preventDefault();
    return false;
}
}

function validateProductPrice() {
var productPrice = document.getElementById("productPrice");
var productPriceError = document.getElementById("productPriceError");

// Check if product price is empty
if (productPrice.value.trim() === "") {
    productPriceError.textContent = "Product Price is required.";
    return false;
}

// Check if the product price is a valid number with at most one dot


productPriceError.textContent = "";
return true;
}
document.getElementById("productPrice").addEventListener("keypress", validateProductPriceKeyPress);
document.getElementById("productPrice").addEventListener("blur", validateProductPrice);

function validateProductImage() {
        var productImageInput = document.getElementById("productimage");
        var productImageError = document.getElementById("productimageError");

        // Clear existing error message
        productImageError.textContent = "";

        // Check if a file is selected
        if (!productImageInput.value) {
            productImageError.textContent = "Please select a product image.";
            return false;
        }

        // Get the selected file
        var file = productImageInput.files[0];

        // Check file format (allowing only image formats: jpeg, jpg, png, gif)
        var allowedFormats = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
        if (!allowedFormats.includes(file.type)) {
            productImageError.textContent = "Invalid image format. Please choose a valid image (jpeg, jpg, png, gif).";
            resetFileInput(productImageInput); // Reset the file input
            return false;
        } else if (file.size > 2 * 1024 * 1024) { // Check file size (maximum 2 MB)
            productImageError.textContent = "Image size exceeds the maximum allowed (2 MB).";
            resetFileInput(productImageInput); // Reset the file input
            return false;
        }

        return true;
    }

    function resetFileInput(input) {
        // Reset the file input by clearing its value
        input.value = '';
    }

    document.getElementById("productimage").addEventListener("input", validateProductImage);
    document.getElementById("productimage").addEventListener("focus", clearProductImageError);

    function clearProductImageError() {
        // Clear the error message when the user focuses on the file input
        document.getElementById("productimageError").textContent = "";
    }
    function validateMenuOption() {
        var menuOption = document.getElementById("menuOption");
        var menuOptionError = document.getElementById("menuOptionError");

        // Clear existing error message
        menuOptionError.textContent = "";

        // Check if a valid option is selected
        if (menuOption.value === "") {
            menuOptionError.textContent = "Please select a menu option.";
            return false;
        }

        return true;
    }

    document.getElementById("menuOption").addEventListener("change", validateMenuOption);
