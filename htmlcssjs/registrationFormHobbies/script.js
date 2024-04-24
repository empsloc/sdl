function validateForm() {
    var firstName = document.getElementById('firstName').value.trim();
    var lastName = document.getElementById('lastName').value.trim();
    var hobbies = document.getElementById('hobbies').value.trim();
  
    var firstNameError = document.getElementById('firstNameError');
    var lastNameError = document.getElementById('lastNameError');
    var hobbiesError = document.getElementById('hobbiesError');
  
    // Reset error messages
    firstNameError.textContent = '';
    lastNameError.textContent = '';
    hobbiesError.textContent = '';
  
    var isValid = true;
  
    // Validate first name
    if (firstName === '') {
      firstNameError.textContent = 'First name is required';
      isValid = false;
    }
  
    // Validate last name
    if (lastName === '') {
      lastNameError.textContent = 'Last name is required';
      isValid = false;
    }
  
    // Validate hobbies
    if (hobbies === '') {
      hobbiesError.textContent = 'Hobbies are required';
      isValid = false;
    }
  
    if (!isValid) {
      return false;
    }
  
    // Display registration details after successful validation
    displayRegistrationDetails(firstName, lastName, organization, hobbies);
    return false; // Prevent form submission
  }
  
  function displayRegistrationDetails(firstName, lastName, organization, hobbies) {
    var firstNameDisplay = document.getElementById('firstNameDisplay');
    var lastNameDisplay = document.getElementById('lastNameDisplay');
    var organizationDisplay = document.getElementById('organizationDisplay');
    var hobbiesDisplay
    var hobbiesDisplay = document.getElementById('hobbiesDisplay');

    // Display registration details
    firstNameDisplay.textContent = firstName;
    lastNameDisplay.textContent = lastName;
    organizationDisplay.textContent = organization || 'N/A'; // Display 'N/A' if organization is not provided
    hobbiesDisplay.textContent = hobbies;
    
    // Hide registration form and display registration details
    document.getElementById('registrationForm').classList.add('hidden');
    document.getElementById('registrationDetails').classList.remove('hidden');
  }  