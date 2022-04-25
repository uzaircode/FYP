

 // function login() {
 //
 //   var userEmail = document.getElementById("email_field").value;
 //   var userPass = document.getElementById("password_field").value;
 //
 //   window.alert(email_field + " " + password_field);
 // }





const faqs = document.querySelectorAll(".faq");

faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  });
});

// function openSearch() {
// document.getElementById("mylayout").style.display = "block";
// }
// function closeSearch() {
// document.getElementById("mylayout").style.display = "none";
// }




/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("main").style.marginRight = "400px";
  document.getElementById("main").style.transition = "0.5s";
  document.getElementById("mySidenav").style.width = "400px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("main").style.marginRight = "0";
  document.getElementById("main").style.transition = "0.5s";
  document.getElementById("mySidenav").style.width = "0";
}

var counterVal = 0;




function updateDisplay(val) {
    document.getElementById("counter-label").innerHTML = val;
}

function shoppingCart() {
  session_start();
  if (empty($_SESSION["email"])) {
    window.location.href = "shoppingcart.php";
  }
}

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
