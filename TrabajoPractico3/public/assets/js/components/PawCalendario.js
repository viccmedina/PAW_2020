class PawCalendario {
    constructor() {

        //es el fieldset
        var padre = document.querySelector("label[for = 'fecha_turno']").parentElement;


        //primero voy a insertar un boton, donde el usuario tiene que apretar para observar el calendario.

        let boton = document.createElement("button");
        boton.classList.add("pawBotonCalendario");
        boton.type="button";
        boton.innerText="abrir calendario";
        padre.appendChild(boton);

        //insertar un div que va a contener los datos del calendario.
        let contenedor  = document.createElement("div");
        contenedor.classList.add("pawContenedorCalendario");
        contenedor.classList.add("cerrado");
        padre.appendChild(contenedor);




        boton.addEventListener("click",ev => {

            if (contenedor.classList.contains("cerrado")) {
            contenedor.classList.remove("cerrado");
            contenedor.classList.add("abierto");
            }else{
                contenedor.classList.remove("abierto");
                contenedor.classList.add("cerrado");
            }



        });









    }

}

document.addEventListener("DOMContentLoaded",()=>{
    let calendario = new  PawCalendario();
})
