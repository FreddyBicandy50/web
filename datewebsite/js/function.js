// Variables to track the counts of 'yes' and 'no' responses
let yes = 0;
let no = 0;

// Function to handle the action when the user clicks 'Yes'
function nextPage() {
  // Increment the 'yes' count
  yes = yes + 1;

  // Create a form dynamically
  var form = document.createElement("form");
  form.method = "post"; // You can use "get" if preferred
  form.action = "/SHESAIDYESS!"; // Adjust the action according to your custom routing

  // Create hidden input fields for 'yes' and 'no' counts
  var yesInput = document.createElement("input");
  yesInput.type = "hidden";
  yesInput.name = "yesCount";
  yesInput.value = yes;

  var noInput = document.createElement("input");
  noInput.type = "hidden";
  noInput.name = "noCount";
  noInput.value = no;

  // Append input fields to the form
  form.appendChild(yesInput);
  form.appendChild(noInput);

  // Append the form to the body and submit it
  document.body.appendChild(form);
  form.submit();
}

// Function to handle the action when the user hovers over 'No'
function moveButton() {
  // Increment the 'no' count
  no = no + 1;

  // Generate random coordinates to move the 'No' button within the window
  var x =
    Math.random() *
      (window.innerWidth - document.getElementById("noButton").offsetWidth) -
    85;
  var y =
    Math.random() *
      (window.innerHeight - document.getElementById("noButton").offsetHeight) -
    48;

  // Set the new position of the 'No' button
  document.getElementById("noButton").style.left = `${x}px`;
  document.getElementById("noButton").style.top = `${y}px`;
}
