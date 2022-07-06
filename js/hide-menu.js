$(".hide-left").click(function() {

    if ($(".left-menu").css("display") == "none") {
        $(".left-menu").css({"display":"flex", "left":"-100px"});
        $(".left-menu").animate({
            left: "+=100"
        }, 150, "linear");
    } else {
        $(".left-menu").animate({
            left: "-=100"
        }, 150, "linear", function() {
            $(".left-menu").css({"display":"none"});
        });
    }

});

$(".hide-right").click(function() {

    if ($(".right-menu").css("display") == "none") {
        $(".right-menu").css({"display":"block", "right":"-200px"});
        $(".right-menu").animate({
            right: "+=200"
        }, 150, "linear");
    } else {
        $(".right-menu").animate({
            right: "-=200"
        }, 150, "linear", function() {
            $(".right-menu").css({"display":"none"});
        });
    }

});