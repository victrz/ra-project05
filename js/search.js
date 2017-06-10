/**
 * search.js
 *
 * animates top nav search feature.
 *
 */

var button = document.getElementById("search-icon");
var search=document.getElementById("nav-search");

button.addEventListener("click", function(){
  if (search.style.width =='0px') {
      search.style.width = 'auto';
  } else {
    search.style.width = '0px';
  }
}, false);
