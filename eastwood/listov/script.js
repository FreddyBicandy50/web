
          function toggleCreditsMenu() {
              var creditsMenu = document.getElementById("creditsMenu");
              var mainContent = document.getElementById("mainContent"); 
              if (creditsMenu.style.display === "none") {
                creditsMenu.style.display = "block";
                mainContent.style.display = "none";
              } else {
                creditsMenu.style.display = "none";
                mainContent.style.display = "block";
              }
            }