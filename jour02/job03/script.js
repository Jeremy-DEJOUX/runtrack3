let button = document.getElementById("button");
let compteur = document.getElementById("compteur");

function Addone() {
    let numbers = compteur.innerHTML; 
    numbers++; 
    console.log(numbers);
    compteur.innerHTML=numbers; 
}

button.addEventListener("click", Addone);