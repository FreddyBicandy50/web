// Variable to track the current theme (dark or light)
// Function to set the default styling for the page
function default_style() {
  if (window.location.search=='?i=1') return change_theme(true);
  else{
    change_theme(false);
  }  
}

// Function to toggle between dark and light themes
function change_theme(dark) {
  // Check the current theme and toggle accordingly
  if (dark) {
    
    // Switch to dark theme
    
    dark = false;
    document.body.style.backgroundColor = "#1f2937";
    document.getElementById("main_title").style.color = "#E2E8F0";
    document.getElementById("theme_text").style.color = "#E2E8F0";
    document.getElementById("console").style.color = "#CBD5E1";
  } else {
    // Switch to light theme
    dark = true;
    document.body.style.backgroundColor = "#E2E8F0";
    document.getElementById("main_title").style.color = "#1f2937";
    document.getElementById("theme_text").style.color = "#1f2937";
    document.getElementById("console").style.color = "#1E293B";
  }
}
