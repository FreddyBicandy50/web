// Function to toggle the visibility of the dropdown menu
function myFunction() {
    // Toggle the "show" class for the dropdown menu
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    // Check if the clicked element is not the dropdown button
    if (!event.target.matches(".dropbtn")) {
        // Get all elements with the class "dropdown-content"
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;

        // Iterate through the dropdowns
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];

            // Check if the current dropdown is open
            if (openDropdown.classList.contains("show")) {
                // Close the dropdown by removing the "show" class
                openDropdown.classList.remove("show");
            }
        }
    }
};
