const form_SendChat = document.querySelector(".typing-area"),
  // incoming_id = form_SendChat.querySelector(".incoming_id").value,
  inputField = form_SendChat.querySelector(".input-field-chat"),
  sendBtn = form_SendChat.querySelector("button");
chatBox = document.querySelector(".chat-box");

form_SendChat.onsubmit = (e) => {
  e.preventDefault();
}

inputField.onkeyup = () => {
  inputField.focus();
  if (inputField.value != "") {
    sendBtn.classList.add("active");
  } else {
    sendBtn.classList.remove("active");
  }
}

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../assets/php/insert-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        inputField.value = ""; // once message inserted into database then leave blank the input field
        scrollToBottom();
      }
    }
  }
  let formData = new FormData(form_SendChat);
  xhr.send(formData);
}
chatBox.onmouseenter = () => {
  chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
  chatBox.classList.remove("active");
}

setInterval(() => {
  // Start AJAX
  let xhr = new XMLHttpRequest(); // Creating XML Object
  xhr.open("POST", "../assets/php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
        if (!chatBox.classList.contains("active")) { // if the active class not contains in chatbox then scroll to bottom
          scrollToBottom();
        }
      }
    }
  }
  let formData = new FormData(form_SendChat);
  xhr.send(formData);
  // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // xhr.send("incoming_id="+incoming_id);
}, 500);

function scrollToBottom() {
  chatBox.scrollTop = chatBox.scrollHeight;
}
