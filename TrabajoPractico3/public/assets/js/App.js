class AppPaw
{
    constructor()
   {
        document.addEventListener("DOMContentLoaded", () => {
            Paw.cargarScript("Paw-Menu", "/assets/js/components/PawMenu.js", () => {
                let menu = new PawMenu("nav", "body>header");
            });

            Paw.cargarScript("PawNav", "/assets/js/components/PawNav.js", () => {
                let nav = new PawNav();
            });
        });
   }
}

let app = new AppPaw();