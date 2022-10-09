const body = document.body;
const minitel = document.getElementById("minitel");
const web = document.getElementById("zone_web");
const apple = document.getElementById("zone_apple");

web.onmousemove = function () {
    body.style.backgroundPosition = "40%";
    minitel.style.left = "10%";
};
web.onmouseout = function () {
    body.style.backgroundPosition = "center";
    minitel.style.left = "0%";
};

apple.onmousemove = function () {
    body.style.backgroundPosition = "60%";
    minitel.style.left = "-10%";
};
apple.onmouseout = function () {
    body.style.backgroundPosition = "center";
    minitel.style.left = "0%";
};
