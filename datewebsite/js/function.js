let yes = 0;
let no = 0;

function nextPage() {
    // Increment counts
    yes = yes + 1;


    // Create a form dynamically
    var form = document.createElement("form");
    form.method = "post"; // You can use "get" if preferred
    form.action = '/SHESAIDYESS!'; // Adjust the action according to your custom routing

    // Create hidden input fields for yes and no counts
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

function moveButton() {
    no = no + 1;
    var x =
        Math.random() *
        (window.innerWidth - document.getElementById("noButton").offsetWidth) -
        85;
    var y =
        Math.random() *
        (window.innerHeight - document.getElementById("noButton").offsetHeight) -
        48;
    document.getElementById("noButton").style.left = `${x}px`;
    document.getElementById("noButton").style.top = `${y}px`;
}