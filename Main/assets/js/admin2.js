let count_register = document.getElementById("register");
let news_register = document.getElementById("news_register");

function setEvents() {
  count_register.addEventListener("click", () => {
    window.location = "acount_register.php?ans=";
  });

  news_register.addEventListener("click", () => {
    window.location = "news_register.php?ans=";
  });
}

setEvents();
