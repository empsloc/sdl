document.getElementById('submitBtn').addEventListener('click', function() {
    var name = document.getElementById('name').value;
    var location = document.getElementById('location').value;
    var cuisine = document.getElementById('cuisine').value;
    var rating = document.getElementById('rating').value;
  
    var logList = document.getElementById('logList');
    var listItem = document.createElement('li');
    listItem.textContent = `New restaurant added: ${name} (Location: ${location}, Cuisine: ${cuisine}, Rating: ${rating})`;
    logList.appendChild(listItem);
  });
  