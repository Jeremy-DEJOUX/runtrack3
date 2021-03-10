$("#button").click(function () {
  shuffleElements($("img"));
});

function shuffleElements($elements) {
  var i, index1, index2, temp_val;

  var count = $elements.length;
  var $parent = $elements.parent();
  var shuffled_array = [];

  // populate array of indexes
  for (i = 0; i < count; i++) {
    shuffled_array.push(i);
  }

  // shuffle indexes
  for (i = 0; i < count; i++) {
    index1 = (Math.random() * count) | 0;
    index2 = (Math.random() * count) | 0;

    temp_val = shuffled_array[index1];
    shuffled_array[index1] = shuffled_array[index2];
    shuffled_array[index2] = temp_val;
  }

  // apply random order to elements
  $elements.detach();
  for (i = 0; i < count; i++) {
    $parent.append($elements.eq(shuffled_array[i]));
  }
}

var i = 0;

let resultatgagnant = 123456;
let id_img = "";

$("img").click(function (event) {
  console.log(this);
  console.log(event.target.id);
  $("#rangees").append(this);
  id_img += event.target.id;

  console.log(id_img.length);

  if (id_img.length == 6) {
    if (id_img == resultatgagnant) {
      document.write("<h1 style=color:green>vous avez gagné</h1>");
    } else {
      document.write("<h1 style=color:red>Vous avez perdu</h1>");
    }
  }
});