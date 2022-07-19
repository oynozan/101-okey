const m = new bootstrap.Modal(document.getElementById('create-lobby'), {});
const p = new bootstrap.Modal(document.getElementById('profile'), {});
const r = new bootstrap.Modal(document.getElementById('radio'), {});
const c = new bootstrap.Modal(document.getElementById('chip'), {});
const d = new bootstrap.Modal(document.getElementById('davet'), {});

$(".middle-button").click(function() {
    $(".header-bottom button").css({"background-color": "rgb(0, 181, 253)", "color":"white"});
    $(".middle-button").css({"color":"black", "background-color": "rgb(255, 217, 0)"});
    $(".main > div:not(.announcement, .create-game)").hide();
    $(".tables").css("display","block");
    m.show();
});

$(".oda-sec-button").click(function() {
    $(".header-bottom button").css({"background-color": "rgb(0, 181, 253)", "color":"white"});
    $(".oda-sec-button").css({"color":"black", "background-color": "rgb(255, 217, 0)"});
    $(".main > div:not(.announcement, .create-game)").hide();
    $(".oda-container").css("display","block");
});

let expandCounter = 0;
$(".expand-header").click(function() {
    if (expandCounter % 2 == 0) {
        $(".header, .create-game, .announcement").css({"display": "block"});
        $(".tables").css({'height': '585px'});
        $(".expand-header").addClass("narrow-header");
        $(".expand-header").removeClass("expand-header");
    }
    else {
        $(".header, .create-game, .announcement").css({"display": "none"});
        $(".tables").removeAttr("style");
        $(".narrow-header").addClass("expand-header");
        $(".narrow-header").removeClass("narrow-header");
    }
    expandCounter++;
});