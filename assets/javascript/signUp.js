const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault(); // prevent form from submitting
}

continueBtn.onclick = () => {
    console.log("Hello World");
    let xhr = new XMLHttpRequest(); // creating XML Object
    xhr.open("POST", "../assets/php/signUp.php", true);
    xhr.onload = () => {
        console.log("run");
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "../index.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    // xhr.send();
    let formData = new FormData(form);
    xhr.send(formData);
}