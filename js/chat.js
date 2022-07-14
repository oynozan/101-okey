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
        $(".players-in-game").show();
        $(".chat").hide();
        $(".chat-container").removeAttr("style");
        $(".chat").removeAttr("style");
    } else {
        $(".players-in-game").hide();
        $(".chat").show();
        $(".chat").css({"bottom": "48px", "position": "absolute"});
    }
});

$(".chat-fullscreen-button").click(function() {
    if ($(".chat").css("display") != "none") {
        $(".players-in-game").show();
        $(".chat").hide();
        $(".chat-container").removeAttr("style");
        $(".chat").removeAttr("style");
    } else {
        $(".players-in-game").hide();
        $(".chat").show();
        $(".chat").css({"bottom": "49px", "position": "absolute"});
        $(".chat-container").css({"height": "calc(100vh - 49px)", "bottom": "0"});
    }
});

$(".players-button").click(function() {
    if ($(".chat").css("display") != "none") {
        $(".chat-container").show();
        $(".players-in-game").removeAttr();
        $(".chat").hide();
        $(".chat").removeAttr("style");
    } else {
        $(".chat-container").hide();
        $(".chat").show();
        $(".chat").css({"bottom": "48px", "position": "absolute"});
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