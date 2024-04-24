// Linking JavaScript file
alert('JavaScript file linked successfully!');

// Calculate average number of weeks in human lifetime
var averageLifeSpanYears = 80;
var weeksInYear = 52;
var averageWeeksInLifetime = averageLifeSpanYears * weeksInYear;

// Create variables to store strings
var greeting = 'Hello, world!';
var favoriteColor = 'blue';
var sentence = 'The quick brown fox jumps over the lazy dog.';

// Program that tells time of the day (morning, afternoon, night)
var currentTime = new Date();
var currentHour = currentTime.getHours();
var timeOfDay;

if (currentHour >= 6 && currentHour < 12) {
  timeOfDay = 'morning';
} else if (currentHour >= 12 && currentHour < 18) {
  timeOfDay = 'afternoon';
} else {
  timeOfDay = 'evening';
}

// Alert with all information
var alertMessage = 'Greeting: ' + greeting + '\n' +
                   'Favorite Color: ' + favoriteColor + '\n' +
                   'Sentence: ' + sentence + '\n' +
                   'Time of the day: Good ' + timeOfDay + '!' + '\n' +
                   'Average number of weeks in a human lifetime: ' + averageWeeksInLifetime;
alert(alertMessage);
