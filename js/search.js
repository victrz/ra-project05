/**
 * search.js
 *
 * animates top nav search feature.
 *
 */

var button = document.getElementById("search-icon");
var search=document.getElementById("nav-search");

button.addEventListener("click", function(){
  if (search.style.display =='none') {
      search.style.display = 'block';
  } else {
    search.style.display = 'none';
  }
}, false);
