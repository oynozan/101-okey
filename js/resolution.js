function resolution(w) {

    if (w > 1199) {
        document.body.style.zoom = "0.8";
    } else {
        document.body.style.zoom = "1";
    }

}

window.onload = () => {
    resolution($(window).width());
}

window.onresize = () => {
    resolution($(window).width());
}