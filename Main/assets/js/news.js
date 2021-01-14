fetch("../php/news.php", {
  method: "post",
})
  .then(function (response) {
    return response.text();
  })
  .then(function (text) {
    console.log(text);
  })
  .catch(function (error) {
    console.log(error);
  });
