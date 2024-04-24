function validateForm() {
    var firstName = document.getElementById('firstName').value.trim();
    var lastName = document.getElementById('lastName').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();
  
    if (firstName === '') {
      showError('First name is required');
      return false;
    }
  
    if (lastName === '') {
      showError('Last name is required');
      return false;
    }
  
    if (email === '') {
      showError('Email is required');
      return false;
    } else if (!isValidEmail(email)) {
      showError('Invalid email format');
      return false;
    }
  
    if (password === '') {
      showError('Password is required');
      return false;
    } else if (password.length < 8) {
      showError('Password must be at least 8 characters long');
      return false;
    }
  
    return true;
  }
  
  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  function showError(message) {
    document.getElementById('error').textContent = message;
  }
  