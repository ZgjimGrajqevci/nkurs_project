//Navbar - Small/Medium
const modal = document.querySelector("#mainNavSmallMedium");
const menuBtn = document.querySelector('#mainNavToggleBtn');
const body = document.querySelector("body");

let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('openNavSmallMedium');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('openNavSmallMedium');
        menuOpen = false;
    }
});

$(menuBtn).click(function (){
    document.getElementById("mainNavSmallMedium").style.width = "100%";
    modal.classList.toggle("hidden");

    if (!modal.classList.contains("hidden")) {
        // Disable scroll
        body.style.overflow = "hidden";
        menuBtn.setAttribute('onclick','closeNav()');
    } else {

    }
});

function closeNav() {
    document.getElementById("mainNavSmallMedium").style.width = "0%";
    body.style.overflow = "auto";
    menuBtn.removeAttribute('onclick');
}
//Navbar - Small/Medium

//Read more at Info [Course Page]
window.onload = function() {
    let rm = document.querySelectorAll('.readmore');
    rm.forEach(el => {
        el.classList.add('less');
        var div = document.createElement('div');
        div.innerHTML = "<a href='javascript:void(0);' style='color: #B28CFF; letter-spacing: 1px;  font-size: 18px; text-decoration: none; ' onclick='toggleRM(this)'>Shiko më shumë</a>";
        el.append(div);

    })
}

function toggleRM(el) {
    const cl = el.parentNode.parentNode.classList;
    const is_less = cl.contains('less');
    el.innerHTML = !is_less ? "Shiko më shumë" : "Shiko më pak";
    if (is_less) cl.remove('less');
    else cl.add('less');
}
//Read more at Info [Course Page]


