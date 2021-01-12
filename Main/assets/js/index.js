let arrow = document.getElementById("arrow");
let hl = document.getElementById("hl");

arrow.addEventListener("click", (e) => {
  e.preventDefault();

  let id = $("#hl"),
    targetOffset = $(id).offset().top;
  $("html, body").animate(
    {
      scrollTop: targetOffset - 80,
    },
    500
  );
});
