// Function to update the time sections dynamically
function updateDynamicTimeDisplay() {
    const currentDate = new Date();
    const startDate = new Date('2023-09-13T07:20:00');

    const timeDifference = currentDate - startDate;

    const milliseconds = timeDifference % 1000;
    const seconds = Math.floor(timeDifference / 1000) % 60;
    const minutes = Math.floor(timeDifference / (1000 * 60)) % 60;
    const hours = Math.floor(timeDifference / (1000 * 60 * 60)) % 24;
    const months = Math.floor(timeDifference / (1000 * 60 * 60 * 24 * 30));
    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

    const displayedMilliseconds = milliseconds % 10;

    // Update the time sections on the screen
    document.getElementById('days-section').textContent = `${days} days`;
    document.getElementById('months-section').textContent = `${months} months`;
    document.getElementById('hours-section').textContent = `${hours} hours `;
    document.getElementById('seconds-section').textContent = `${seconds}.${displayedMilliseconds} Seconds`;
    document.getElementById('minutes-section').textContent = `${minutes} minutes`;
}

// Update the time display every millisecond
setInterval(updateDynamicTimeDisplay, 90);

// Initial update
updateDynamicTimeDisplay();