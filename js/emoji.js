const emojiButtonEl = document.querySelector('.emoji-menu');
const picker = new EmojiButton({position:"left"});

emojiButtonEl.addEventListener('click', () => {
    picker.togglePicker(emojiButtonEl);
});

picker.on('emoji', emoji => {
    document.querySelector('.chat-input').value += emoji;
});