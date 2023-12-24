// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

$(document).ready(function () {
  // initialize animate on scroll library
  AOS.init({
    offset: 100,
    duration: 1000,
    once: true,
    // disable: true,
  });

  // youtube magnificPopup js code
  $(".youtube-tutorial").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });
});

// to show and hide password
const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#password");
showPassword.addEventListener("click", function () {
  this.classList.toggle("fa-eye-slash");
  this.classList.toggle("fa-eye");
  const passwordType =
    passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", passwordType);
});
