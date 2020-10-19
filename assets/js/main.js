
var modal = document.getElementById("listaCon");
var modal2 = document.getElementById("listaFor");
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];


btn.onclick = function () {
    modal.style.display = "block";
}
btn2.onclick = function () {
    modal2.style.display = "block";
}

span.onclick = function () {
    modal.style.display = "none";
}
span2.onclick = function () {
    modal2.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function (event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
