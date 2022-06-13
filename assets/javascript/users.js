const searchBar = document.querySelector(".search input"),
  searchIcon = document.querySelector(".search button"),
  usersList = document.querySelector(".users-list");

searchIcon.onclick = () => {
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if (searchBar.classList.contains("active")) {
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeyup = () => {
  let searchTerm = searchBar.value;

  if (searchTerm != "") {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }

  // Start Ajax
  let xhr = new XMLHttpRequest(); // creating XML Object
  xhr.open("POST", "..\\assets\\php\\search.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
      }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm); // Sending user typed in search bar to php file with AJAX
}

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "..\\assets\\php\\users.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        // console.log(data);
        if (!searchBar.classList.contains("active")) {
          usersList.innerHTML = data;
        }
      }
    }
  }
  xhr.send();
}, 500);

