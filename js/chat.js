var sanitizeHTML = function (str) {
	return str.replace(/[^\w. ]/gi, function (c) {
		return '&#' + c.charCodeAt(0) + ';';
	});
};

function addChatMessage () {
    let value = $(".chat-input").val();
    value = sanitizeHTML(value);

    $(".messages").append(
        `<div class="message message-from-user">
            <span>${value}</span>
            <p>Siz</p>
            <img src="images/pp.png">
        </div>`
    );

    if ($(window).width() > 1199) document.querySelector(".messages .message:last-child").scrollIntoView();

    $(".chat-input").val("");
}


$(".chat-button").click(function() {
    if ($(".chat").css("display") != "none") {
        $(".chat").hide();
        $(".chat-container").removeAttr("style");
        $(".chat").removeAttr("style");
    } else {
        $(".chat").show();
        $(".chat").css({"bottom": "48px"});
    }
});

$(".chat-fullscreen-button").click(function() {
    if ($(".chat").css("display") != "none") {
        $(".chat").hide();
        $(".chat-container").removeAttr("style");
        $(".chat").removeAttr("style");
    } else {
        $(".chat").show();
        $(".chat").css({"bottom": "49px"});
        $(".chat-container").css({"height": "calc(100vh - 49px)", "bottom": "0"});
    }
});

$(".send-message").click(function() {
    addChatMessage();
});

$(".chat-input").on('keyup', function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
        addChatMessage();
    }
});