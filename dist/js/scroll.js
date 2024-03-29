// Smooth Scrolling
$(".scroll").on("click", function(event) {
  if (this.hash !== "") {
    event.preventDefault();

    const hash = this.hash;

    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top
      },
      300,
      function() {
        window.location.hash = hash;
      }
    );
  }
});
