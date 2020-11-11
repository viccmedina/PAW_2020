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




        establecerEvento();

        /*turnos.addEventListener("click",(event)=>{

            if(turnos.classList.contains("PAW-UlCerrado"))
            {
                turnos.classList.remove("PAW-UlCerrado");
                turnos.classList.add("PAW-UlAbierto");


            }else {
                turnos.classList.remove("PAW-UlAbierto");
                turnos.classList.add("PAW-UlCerrado");
            }

        });*/





        window.addEventListener("resize",(event)=>{
            establecerEvento(true);

        })


        function establecerEvento( intentarRemover = false){

            if (screen.width>1000) {
                if (intentarRemover){
                    turnos.removeEventListener("click",evento);
                }
                turnos.addEventListener("mouseover",evento())
            }else if (screen.width<1000){
                if (intentarRemover){
                    turnos.removeEventListener("mouseover",evento);
                }
                turnos.addEventListener("click",evento());
            }
        }


        /*
        function escucharEventoClick(turnos){


            if(turnos.classList.contains("PAW-UlCerrado"))
            {
                turnos.classList.remove("PAW-UlCerrado");
                turnos.classList.add("PAW-UlAbierto");


            }else {
                turnos.classList.remove("PAW-UlAbierto");
                turnos.classList.add("PAW-UlCerrado");
            }

        }

       function escucharEventomouseOver(turnos){



            if(turnos.classList.contains("PAW-UlCerrado"))
            {
                turnos.classList.remove("PAW-UlCerrado");
                turnos.classList.add("PAW-UlAbierto");


            }else {
                turnos.classList.remove("PAW-UlAbierto");
                turnos.classList.add("PAW-UlCerrado");
            }

        }*/


        function evento(){
            if(turnos.classList.contains("PAW-UlCerrado"))
            {
                turnos.classList.remove("PAW-UlCerrado");
                turnos.classList.add("PAW-UlAbierto");


            }else {
                turnos.classList.remove("PAW-UlAbierto");
                turnos.classList.add("PAW-UlCerrado");
            }
        }

    }



}