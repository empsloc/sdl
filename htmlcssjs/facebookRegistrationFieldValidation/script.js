document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault();
  validateForm();
});

function validateForm() {
  var firstName = document.getElementById('firstName').value.trim();
  var lastName = document.getElementById('lastName').value.trim();
  var email = document.getElementById('email').value.trim();
  var password = document.getElementById('password').value.trim();

  document.getElementById('firstNameError').textContent = validateName(firstName);
  document.getElementById('lastNameError').textContent = validateName(lastName);
  document.getElementById('emailError').textContent = validateEmail(email);
  document.getElementById('passwordError').textContent = validatePassword(password);
}

function validateName(name) {
  if (name === '') {
    return 'First/Last name is required';
  }
  return '';
}

function validateEmail(email) {
  if (email === '') {
    return 'Email is required';
  } else if (!isValidEmail(email)) {
    return 'Invalid email format';
  }
  return '';
}

function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function validatePassword(password) {
  if (password === '') {
    return 'Password is required';
  } else if (password.length < 8) {
    return 'Password must be at least 8 characters long';
  }
  return '';
}
