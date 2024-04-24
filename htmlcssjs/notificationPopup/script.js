document.getElementById('showPopupBtn').addEventListener('click', function() {
    showNotification('This is a notification message!');
  });
  
  document.getElementById('closeBtn').addEventListener('click', function() {
    hideNotification();
  });
  
  function showNotification(message) {
    var notificationPopup = document.getElementById('notificationPopup');
    var popupMessage = document.getElementById('popupMessage');
  
    popupMessage.textContent = message;
    notificationPopup.classList.remove('hidden');
  }
  
  function hideNotification() {
    var notificationPopup = document.getElementById('notificationPopup');
    notificationPopup.classList.add('hidden');
  }
  