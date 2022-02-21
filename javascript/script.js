

 function login() {

   var userEmail = document.getElementById("email_field").value;
   var userPass = document.getElementById("password_field").value;

   window.alert(email_field + " " + password_field)
 }





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


function help() {
  updateDisplay(++counterVal);

  openNav();
  document.getElementById('doThisz').innerHTML = "Shipping, taxes, and discounts calculated at checkout.";
  document.getElementById("doThisz").style.display = "block";
  document.getElementById("doThis3").style.display = "block";
  document.getElementById("doThis").style.display = "none";

}

function updateDisplay(val) {
    document.getElementById("counter-label").innerHTML = val;
}
