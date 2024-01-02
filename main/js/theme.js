let dark = true;
function defaultstyle (){
  document.body.style.backgroundColor = "#E2E8F0";
  document.getElementById("main_title").style.color = "#1E293B";
  document.getElementById("theme_text").style.color = "#1E293B";
  document.getElementById("arrow").style.color = "#1E293B";
  document.getElementById("console").style.color = "#1E293B";
}
function changeTheme() {
  if (dark) {
    dark = false;
    document.body.style.backgroundColor = "#1f2937";
    document.getElementById("main_title").style.color = "#E2E8F0";
    document.getElementById("theme_text").style.color = "#E2E8F0";
    document.getElementById("arrow").style.color = "#E2E8F0";
    document.getElementById("console").style.color = "#CBD5E1";
  } else {
    dark = true;
    document.body.style.backgroundColor = "#E2E8F0";
    document.getElementById("main_title").style.color = "#1f2937";
    document.getElementById("theme_text").style.color = "#1f2937";
    document.getElementById("arrow").style.color = "#1f2937";
    document.getElementById("console").style.color = "#1f2937";
  }
}
