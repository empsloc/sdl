$(document).ready(function() {
    $('#feedbackForm').submit(function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Gather information from input fields
        var firstName = $('#firstName').val();
        var lastName = $('#lastName').val();
        var email = $('#email').val();
        var message = $('#message').val();

        // Join first name and last name
        var fullName = firstName + ' ' + lastName;

        // Display the gathered information with joined name
        alert('Name: ' + fullName + '\nEmail: ' + email + '\nFeedback: ' + message);
    });
});
