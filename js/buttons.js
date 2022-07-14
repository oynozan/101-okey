$(".middle-button").click(function() {
    $(".header-bottom button").css({"background-color": "rgb(0, 181, 253)", "color":"white"});
    $(".middle-button").css({"color":"black", "background-color": "rgb(255, 217, 0)"});
    $(".main > div:not(.announcement, .create-game)").hide();
    $(".tables").css("display","grid");
});

$(".oda-sec-button").click(function() {
    $(".header-bottom button").css({"background-color": "rgb(0, 181, 253)", "color":"white"});
    $(".oda-sec-button").css({"color":"black", "background-color": "rgb(255, 217, 0)"});
    $(".main > div:not(.announcement, .create-game)").hide();
    $(".oda-sec-container").css("display","flex");
});