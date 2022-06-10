btns = document.getElementsByClassName("button");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        document.querySelector('.modal-bg').style.display = 'flex'
    });
}

btns = document.getElementsByClassName("close");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        document.querySelector('.modal-bg').style.display = 'none'
    });
}

document.getElementById("btn_submit").addEventListener("click", function () {
    document.querySelector('.score-bg').style.display = 'flex'
});

document.querySelector(".close").addEventListener("click", function () {
    document.querySelector('.score-bg').style.display = 'none'
});

