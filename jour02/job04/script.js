let txt = document.getElementById("keylogger");

document.addEventListener("keypress", addCharacter);
// quand j'appuie sur une touche ca m'affiche un texte en console

function addCharacter(event) {
  txt.value=txt.value+event.key; 
}