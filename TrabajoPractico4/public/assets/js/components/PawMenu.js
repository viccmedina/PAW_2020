class PawMenu
{
    constructor(parent, buttonLocation)
    {
        let contenedor = (parent.tagName)
            ? parent 
            : document.querySelector(parent);

        let buttonContainer = (buttonLocation.tagName)
            ? buttonLocation 
            : document.querySelector(buttonLocation);

        if(contenedor && buttonContainer) 
        {
            buttonContainer.classList.add("PAW-Menu");//agrego esta clase al contenedor del boton ya que en el css pide especificiamente que el boton este adentro de algo que tenga la clase PAW-Menu
            contenedor.classList.add("PAW-Menu");
            contenedor.classList.add("PAW-MenuCerrado");

            document.head.appendChild(Paw.nuevoElemento("link", "", 
            {href: "/assets/style/paw_menu/pawmenu.css",
            rel: "stylesheet",
            type: "text/css"}));

            let boton = Paw.nuevoElemento("button", "", {});
            //boton.classList.add("PAW-Menu"); //no hace falta ponerle esta clase al boton.
            boton.classList.add("PAW-MenuAbrir");

            boton.addEventListener("click", (event) => {
                if(event.target.classList.contains("PAW-MenuAbrir"))
                {
                    event.target.classList.remove("PAW-MenuAbrir");
                    event.target.classList.add("PAW-MenuCerrar");
                    contenedor.classList.add("PAW-MenuAbierto");
                    contenedor.classList.remove("PAW-MenuCerrado");
                }
                else
                {
                    event.target.classList.add("PAW-MenuAbrir");
                    event.target.classList.remove("PAW-MenuCerrar");    
                    contenedor.classList.remove("PAW-MenuAbierto");
                    contenedor.classList.add("PAW-MenuCerrado");
                }
            })
            buttonContainer.appendChild(boton);
        } 
        else
            console.error("Elemento HTML para generar el MENÚ no encontrado");

    }
}