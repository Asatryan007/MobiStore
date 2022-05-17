//Get the button:
btn_top = document.getElementById("to_top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btn_top.style.display = "block";
  } else {
    btn_top.style.display = "none";
  }
};

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTo({top: 0,
                          left: 0,
                          behavior: "smooth"}); // For Safari
  document.documentElement.scrollTo({top: 0,
                                    left: 0,
                                    behavior: "smooth"});// For Chrome, Firefox, IE and Opera
};