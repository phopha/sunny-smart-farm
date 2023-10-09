const logForm = document.querySelector(".loginForm")
const regForm = document.querySelector(".regForm")

function popupLogin(){
    logForm.classList.toggle("show")
    console.log("toggle login popup")
}
function switcher(){
    regForm.classList.toggle("show")
    logForm.classList.toggle("show")
    console.log("toggle register popup")
}
function closeAll() {
    var c = document.getElementById("closeButton")
}