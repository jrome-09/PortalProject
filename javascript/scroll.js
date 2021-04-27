window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 500);
    header.classList.toggle("shadow-sm", window.scrollY > 100);
 })

