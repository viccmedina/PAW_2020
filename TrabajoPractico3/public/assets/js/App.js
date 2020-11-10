class AppPaw
{
    constructor()
   {
        document.addEventListener("DOMContentLoaded", () => {
            Paw.cargarScript("Paw-Menu", "/assets/js/components/PawMenu.js", () => {
                let menu = new PawMenu("nav", "body>header");
            });
        });
   }
}

let app = new AppPaw();