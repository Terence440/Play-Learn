const form_LogIn = document.querySelector(".login_Form form"),
    continueBtn_LogIn = form_LogIn.querySelector(".button input"),
    errorText_LogIn = form_LogIn.querySelector(".error-text");

form_LogIn.onsubmit = (e) => {
    e.preventDefault(); // prevent form from submitting
}

continueBtn_LogIn.onclick = () => {
    // Start AJAX
    let xhr = new XMLHttpRequest(); // creating XML Object
    xhr.open("POST", "../assets/php/logIn.php", true);
    xhr.onload = () => {
        console.log("run");
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    console.log(data);
                    location.href = "../index.php";
                } else {
                    console.log("Something went wrong");
                    errorText_LogIn.style.display = "block";
                    errorText_LogIn.textContent = data;
                }
            }
        }
    }
    // Sending the form data through a AJAX to php
    let formData = new FormData(form_LogIn); // creating new formData Object
    xhr.send(formData); // Sending the form data to php
}