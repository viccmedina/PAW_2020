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

            //Paw.cargarScript("PawCarousel", "/assets/js/components/PawCarousel.js", () => {
            //    let carousel = new PawCarousel(listaImagenes, "aside");
            //});

        });
   }
}

let app = new AppPaw();