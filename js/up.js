const up = document.querySelector("#up");
const navbar = document.querySelector("#navbar");

up.addEventListener("click", function () {
    window.scrollTo(0, 0)
})
window.onscroll = function () {
    if (window.scrollY > 420) {
        up.style.display = "block"
    } else {
        up.style.display = "none"
    }
}