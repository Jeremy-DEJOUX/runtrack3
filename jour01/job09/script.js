function tri(numbers, order) {
  if (order == "ASC") {
    return numbers.sort(function(a,b){return a-b});
  }
  else if (order == "DESC") {
   return numbers.sort(function(a,b){return a-b}).reverse(); 
  }
}
var numbers = [ 
  87,
  58,
  46,
  72,
  11,
  47,
  96,
  122,
  345,
  111,
  323,
  44,
  41,
  13411,
  3,
  345,
  123076,
]; 

var order = "DESC"; 
var order = "ASC"; 

console.log(tri(numbers, order)); 