function premier(nombre) {
  for (let i = 2; i < nombre-1; i++) {
    if (nombre % i == 0 ) {
      return false; 
    }    
  }
  return true;
}
function Sommesnombrepremiers(nombre1, nombre2) {
  if (premier(nombre1) && premier(nombre2)) {
    return nombre1 + nombre2;  
  }
  else{return false} 
}

console.log(Sommesnombrepremiers(48,14));
console.log(Sommesnombrepremiers(127,16)); 
console.log(Sommesnombrepremiers(497,7)); 