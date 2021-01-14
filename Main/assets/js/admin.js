let count_register = document.getElementById("register");
let news_register = document.getElementById("news_register");
console.log("oi");
function setEvents() {
  count_register.addEventListener("click", () => {
    console.log("Fodase");
    window.location = "../../acount_register.html";
  });

  news_register.addEventListener("click", () => {
    console.log("Fodase");
    window.location = "../../news_register.php";
  });
}

setEvents();
