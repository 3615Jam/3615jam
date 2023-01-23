/**
 * Here we would like to move the background + minitel when left and right zones are hovered by the mouse.
 * But we want this animation only on computers with mouse, not touchscreens.
 *
 * So we use "isTouchEnabled()" to check it, and if not, we apply the animations.
 */

const body = document.body;
const minitel = document.getElementById("minitel");
const web = document.getElementById("zone_web");
const apple = document.getElementById("zone_apple");

function isTouchEnabled() {
    return "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
}

if (!isTouchEnabled()) {
    web.onmousemove = function () {
        body.style.backgroundPosition = "40%";
        minitel.style.left = "6%";
    };
    web.onmouseout = function () {
        body.style.backgroundPosition = "center";
        minitel.style.left = "0%";
    };

    apple.onmousemove = function () {
        body.style.backgroundPosition = "60%";
        minitel.style.left = "-6%";
    };
    apple.onmouseout = function () {
        body.style.backgroundPosition = "center";
        minitel.style.left = "0%";
    };
}
