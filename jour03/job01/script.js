$("#button").click(function () {
  $("#button").after(
    "<p class='p_affichage'>le $ est un bon élément monétaire. Le # de twitter est une bonne I D. Il faudra faire le point avec la classe pour cacher cet élément.</p>"
  );
});
$("#hide_button").click(function () {
  $(".p_affichage").hide();
  console.log();
});