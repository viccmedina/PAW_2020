class PawNav {

    constructor() {


        document.head.appendChild(Paw.nuevoElemento("link", "",
            {href: "/assets/style/paw_nav/pawNav.css",
                rel: "stylesheet",
                type: "text/css"}));

        let consultar_turnos = document.querySelector("nav li[name='Turnos']") ;
        consultar_turnos.setAttribute("name","Consultar turnos");

        let nuevo_turno = document.querySelector("nav li[name='Nuevo turno']") ;




        let  nav = document.querySelector("nav>ul") ;
        nav.removeChild(nuevo_turno);
        nav.removeChild(consultar_turnos);

        let turnos=  Paw.nuevoElemento("ul","",{name:"Turnos"});
        turnos.classList.add("PAW-UlCerrado");

        turnos.appendChild(consultar_turnos);
        turnos.appendChild(nuevo_turno);



        nav.appendChild(turnos);
        let estudios = document.querySelector("nav li[name = 'Estudios']");
        nav.insertBefore(turnos,estudios);

        turnos.addEventListener("mouseover",(event)=>{
            if(event.target.classList.contains("PAW-UlCerrado"))
            {
                event.target.classList.remove("PAW-UlCerrado");
                event.target.classList.add("PAW-UlAbierto");


            }else {
                event.target.classList.remove("PAW-UlAbierto");
                event.target.classList.add("PAW-UlCerrado");
            }
        });


    }

}