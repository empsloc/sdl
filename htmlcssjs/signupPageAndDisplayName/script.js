document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    validateSignUp();
  });
  
  function validateSignUp() {
    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value.trim();
  
    if (username === '' || password === '') {
      alert('Username and password are required!');
      return;
    }
  
    if (password.length < 10) {
      alert('Password must be at least 10 characters long!');
      return;
    }
  
    // Display username after successful signup
    var usernameDisplay = document.getElementById('usernameDisplay');
    usernameDisplay.textContent = username;
  
    // Hide sign up form and show welcome message
    document.getElementById('signupForm').classList.add('hidden');
    document.getElementById('loginForm').classList.remove('hidden');
  }
  