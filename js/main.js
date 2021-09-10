var nav = document.querySelector("nav");
var sidebar = document.querySelector(".sidebar");
var close = document.querySelector(".sidebar .close")
var open = document.querySelector("nav .menu");
var body = document.querySelector("body")

open.addEventListener("click", function() {
    body.style,overflow = "hidden"
    sidebar.classList.add("opened");
})

close.addEventListener("click", function() {
    body.style,overflow = "auto"
    sidebar.classList.remove("opened");
})
const observer = lozad();
observer.observe();
