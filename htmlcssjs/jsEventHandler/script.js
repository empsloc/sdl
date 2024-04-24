// Function to handle the click event
function handleClick() {
    var outputElement = document.getElementById('output');
    outputElement.textContent = 'Button clicked!';
  }
  
  // Get reference to the button element
  var button = document.getElementById('clickButton');
  
  // Add event listener to the button
  button.addEventListener('click', handleClick);
  