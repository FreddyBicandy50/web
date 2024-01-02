let dark = true;
function defaultstyle (){
  document.body.style.backgroundColor = "#E2E8F0";
  document.getElementById("Title").style.color = "#1E293B";
  document.getElementById("theme").style.color = "#1E293B";
  document.getElementById("console").style.color = "#F43F5E";
}
  function changeTheme() {
  if (dark) {
    dark = false;
    document.body.style.backgroundColor = "#1f2937";
    document.getElementById("Title").style.color = "#E2E8F0";
    document.getElementById("themeButton").style.color = "#E2E8F0";
  } else {
    dark = true;
    document.body.style.backgroundColor = "#E2E8F0";
    document.getElementById("themeButton").style.color = "#1f2937";
    document.getElementById("Title").style.color = "#1f2937";
  }
}
