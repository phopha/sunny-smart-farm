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
    regForm.classList.remove("show")
    logForm.classList.remove("show")
}
function reArt(){
    window.location.href = "article.html"
}
function reIOT(){
    window.location.href = "dashboard.html"
}
function reStore(){
    window.location.href = "store.html"
}