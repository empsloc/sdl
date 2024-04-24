document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('videoPlayer');
    var playPauseBtn = document.getElementById('playPauseBtn');
    var muteBtn = document.getElementById('muteBtn');
    var volumeRange = document.getElementById('volumeRange');
  
    // Play/Pause button event listener
    playPauseBtn.addEventListener('click', function() {
      if (video.paused) {
        video.play();
        playPauseBtn.textContent = 'Pause';
      } else {
        video.pause();
        playPauseBtn.textContent = 'Play';
      }
    });
  
    // Mute/Unmute button event listener
    muteBtn.addEventListener('click', function() {
      if (video.muted) {
        video.muted = false;
        muteBtn.textContent = 'Mute';
      } else {
        video.muted = true;
        muteBtn.textContent = 'Unmute';
      }
    });
  
    // Volume range input event listener
    volumeRange.addEventListener('input', function() {
      video.volume = volumeRange.value;
    });
  });
  