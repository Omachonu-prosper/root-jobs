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

// Show the confirm delete dialogue when the user clicks the delte button
$('#show-user-delete-confirmation-canvas').click(() => {
  $('#user-delete-confirmation-canvas').removeClass('hidden');
  $('#user-delete-confirmation-canvas').addClass('shown');

  // A click on the background of the confirmation box or on the cancel button the box should be closed
  $('#user-delete-confirmation-canvas').click(() => {
    if(event.target.id == 'user-delete-confirmation-canvas' || event.target.id == 'cancel-user-delete') {
      $('#user-delete-confirmation-canvas').removeClass('shown');
      $('#user-delete-confirmation-canvas').addClass('hidden'); 
    }
  });
});

// Adding educational qualification
$('#add-education-button').click(() => {
  // Show the form to add education
  $('#add-education-form').removeClass('hidden');
  $('#add-education-form').addClass('shown');

  // Hide the add button so more forms can not be added
  $('#add-education-button').addClass('hidden');
});

// Closing the form for adding a new educational status
$('#close-education-form').click(() => {
  // Hide the form
  $('#add-education-form').removeClass('shown');
  $('#add-education-form').addClass('hidden');

  // show the add button
  $('#add-education-button').removeClass('hidden');
});