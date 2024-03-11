  // Function to update the time sections dynamically
    function updateDynamicTimeDisplay() {
      const currentDate = new Date('2024-03-11T02:11:00');
      const startDate = new Date('2023-09-05T10:00:00');

      const timeDifference = currentDate - startDate;

      const milliseconds = timeDifference % 1000;
      const seconds = Math.floor(timeDifference / 1000) % 60;
      const minutes = Math.floor(timeDifference / (1000 * 60)) % 60;
      const hours = Math.floor(timeDifference / (1000 * 60 * 60)) % 24;
      const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
      const months = Math.floor(timeDifference / (1000 * 60 * 60 * 24 * 30));
      const displayedMilliseconds = milliseconds % 10;

      // Update the time sections on the screen
      document.getElementById('days-section').textContent = `${days} days`;
      document.getElementById('months-section').textContent = `${months} months`;
      document.getElementById('hours-section').textContent = `${hours} hours `;
      document.getElementById('minutes-section').textContent = `${minutes} minutes`;
      document.getElementById('seconds-section').textContent = `${seconds}.${displayedMilliseconds} Seconds`;
    }

    // Update the time display every millisecond
    setInterval(updateDynamicTimeDisplay, 90);
    
    // Initial update
    updateDynamicTimeDisplay();