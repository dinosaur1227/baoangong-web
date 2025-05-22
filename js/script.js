// 線上祈福提交
document.getElementById("pray-form").addEventListener("submit", function (e) {
  e.preventDefault();
  const name = this.name.value.trim();
  const wish = this.wish.value.trim();
  if (name && wish) {
    document.getElementById("pray-message").innerHTML =
      `<p>🙏 感謝您 <strong>${name}</strong> 的祈福：<em>${wish}</em></p>`;
    this.reset();
  }
});

// 留言牆提交
document.getElementById("guestbook-form").addEventListener("submit", function (e) {
  e.preventDefault();
  const guest = this.guest.value.trim();
  const message = this.message.value.trim();
  if (guest && message) {
    const msgBox = document.createElement("div");
    msgBox.innerHTML = `<p><strong>${guest}：</strong>${message}</p>`;
    document.getElementById("messages").prepend(msgBox);
    this.reset();
  }
});
