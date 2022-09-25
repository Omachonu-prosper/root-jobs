// Confirm if the password matches the confirm password
function confirmPassword() {
  // There is a signup form on the page
  if(document.forms.signup) {
    let password = document.querySelector('#password');
    let confirmationPassword = document.querySelector('#confirm-password');

    // Password Match or Mismatch
    if(password.value === confirmationPassword.value) {
      password.setCustomValidity('');
      confirmationPassword.setCustomValidity('');
    } 
    else {
      password.setCustomValidity('invalid');
      confirmationPassword.setCustomValidity('invalid');    }
  } 
  else {
    return;
  }
}

// Handle validation for all forms on the page
(() => {
    'use strict';

    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        // Check if confirm password matches the entered password
        confirmPassword();

        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();