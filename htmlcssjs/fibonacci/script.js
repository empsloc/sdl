// Function to generate Fibonacci series
function generateFibonacci(limit) {
    var fibonacciList = document.getElementById('fibonacciList');
    var fibonacciArray = [];
  
    var a = 0, b = 1, temp;
  
    for (var i = 0; i < limit; i++) {
      fibonacciArray.push(a);
      temp = a + b;
      a = b;
      b = temp;
    }
  
    // Display the Fibonacci series in HTML
    fibonacciArray.forEach(function(number) {
      var listItem = document.createElement('li');
      listItem.textContent = number;
      fibonacciList.appendChild(listItem);
    });
  }
  
  // Generate and display Fibonacci series with a limit of 10 numbers
  generateFibonacci(10);
  