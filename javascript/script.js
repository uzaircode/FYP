const faqs = document.querySelectorAll(".faq");

faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  });
});

function openSearch() {
document.getElementById("mylayout").style.display = "block";
}
function closeSearch() {
document.getElementById("mylayout").style.display = "none";
}
