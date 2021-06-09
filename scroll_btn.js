
const toTop = document.querySelector(".to_top");


window.addEventListener("scroll", () => {
    if(window.pageYOffset > 750){
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})
