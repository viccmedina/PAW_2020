class PawCalendario {

    constructor(tagPadre) {
        //es el fieldset
        this.padre = tagPadre;

        this.listaTurnos = {
            "especialistas": [
                {
                    "matricula": "3737",
                    "nombre": "Tekito",
                    "apellido": "Lakarie",
                    "diasQueAtiende": [
                        "Lunes",
                        "Martes",
                        "Jueves"
                    ],
                    "horarioInicio": {
                        "horas": 9,
                        "minutos": 0
                    },
                    "horarioFinalizacion": {
                        "horas": 12,
                        "minutos": 0
                    },
                    "duracionTurno": 20,
                    "turnosTomados": [
                        {
                            "dia": "Lunes",
                            "horas": 9,
                            "minutos": 0
                        },
                        {
                            "dia": "Lunes",
                            "horas": 9,
                            "minutos": 20
                        },
                        {
                            "dia": "Martes",
                            "horas": 10,
                            "minutos": 0
                        },
                        {
                            "dia": "Martes",
                            "horas": 10,
                            "minutos": 40
                        },
                        {
                            "dia": "Martes",
                            "horas": 11,
                            "minutos": 20
                        },
                        {
                            "dia": "Jueves",
                            "horas": 9,
                            "minutos": 0
                        },
                        {
                            "dia": "Jueves",
                            "horas": 9,
                            "minutos": 20
                        },
                        {
                            "dia": "Jueves",
                            "horas": 10,
                            "minutos": 40
                        },
                        {
                            "dia": "Jueves",
                            "horas": 11,
                            "minutos": 40
                        }
                    ]
                },
                {
                    "matricula": "2222",
                    "nombre": "Tarayado",
                    "apellido": "Tukoko",
                    "diasQueAtiende": [
                        "Martes",
                        "Jueves",
                        "Viernes"
                    ],
                    "horarioInicio": {
                        "horas": 13,
                        "minutos": 0
                    },
                    "horarioFinalizacion": {
                        "horas": 18,
                        "minutos": 0
                    },
                    "duracionTurno": 30,
                    "turnosTomados": [
                        {
                            "dia": "Martes",
                            "horas": 14,
                            "minutos": 0
                        },
                        {
                            "dia": "Martes",
                            "horas": 14,
                            "minutos": 30
                        },
                        {
                            "dia": "Martes",
                            "horas": 16,
                            "minutos": 0
                        },
                        {
                            "dia": "Jueves",
                            "horas": 16,
                            "minutos": 30
                        },
                        {
                            "dia": "Jueves",
                            "horas": 17,
                            "minutos": 0
                        },
                        {
                            "dia": "Jueves",
                            "horas": 17,
                            "minutos": 30
                        },
                        {
                            "dia": "Viernes",
                            "horas": 13,
                            "minutos": 30
                        },
                        {
                            "dia": "Viernes",
                            "horas": 16,
                            "minutos": 30
                        }
                    ]
                },
                {
                    "matricula": "20202",
                    "nombre": "Tekuro",
                    "apellido": "Lakria",
                    "diasQueAtiende": [
                        "Lunes",
                        "Jueves",
                        "Viernes"
                    ],
                    "horarioInicio": {
                        "horas": 10,
                        "minutos": 0
                    },
                    "horarioFinalizacion": {
                        "horas": 14,
                        "minutos": 0
                    },
                    "duracionTurno": 25,
                    "turnosTomados": [
                        {
                            "dia": "Lunes",
                            "horas": 11,
                            "minutos": 15
                        },
                        {
                            "dia": "Lunes",
                            "horas": 11,
                            "minutos": 40
                        },
                        {
                            "dia": "Lunes",
                            "horas": 12,
                            "minutos": 30
                        },
                        {
                            "dia": "Jueves",
                            "horas": 10,
                            "minutos": 0
                        },
                        {
                            "dia": "Viernes",
                            "horas": 12,
                            "minutos": 55
                        },
                        {
                            "dia": "Viernes",
                            "horas": 13,
                            "minutos": 20
                        }
                    ]
                },
                {
                    "matricula": "9595",
                    "nombre": "Isee",
                    "apellido": "Deadpeople",
                    "diasQueAtiende": [
                        "Lunes",
                        "Miercoles",
                        "Viernes"
                    ],
                    "horarioInicio": {
                        "horas": 15,
                        "minutos": 0
                    },
                    "horarioFinalizacion": {
                        "horas": 18,
                        "minutos": 0
                    },
                    "duracionTurno": 10,
                    "turnosTomados": [
                        {
                            "dia": "Lunes",
                            "horas": 15,
                            "minutos": 0
                        },
                        {
                            "dia": "Lunes",
                            "horas": 15,
                            "minutos": 10
                        },
                        {
                            "dia": "Lunes",
                            "horas": 15,
                            "minutos": 20
                        },
                        {
                            "dia": "Lunes",
                            "horas": 15,
                            "minutos": 30
                        },
                        {
                            "dia": "Lunes",
                            "horas": 15,
                            "minutos": 50
                        },
                        {
                            "dia": "Miercoles",
                            "horas": 15,
                            "minutos": 30
                        },
                        {
                            "dia": "Miercoles",
                            "horas": 15,
                            "minutos": 50
                        },
                        {
                            "dia": "Miercoles",
                            "horas": 16,
                            "minutos": 30
                        },
                        {
                            "dia": "Miercoles",
                            "horas": 17,
                            "minutos": 0
                        },
                        {
                            "dia": "Viernes",
                            "horas": 15,
                            "minutos": 0
                        },
                        {
                            "dia": "Viernes",
                            "horas": 15,
                            "minutos": 30
                        },
                        {
                            "dia": "Viernes",
                            "horas": 16,
                            "minutos": 30
                        },
                        {
                            "dia": "Viernes",
                            "horas": 16,
                            "minutos": 40
                        },
                        {
                            "dia": "Viernes",
                            "horas": 16,
                            "minutos": 50
                        },
                        {
                            "dia": "Viernes",
                            "horas": 17,
                            "minutos": 0
                        },
                        {
                            "dia": "Viernes",
                            "horas": 17,
                            "minutos": 30
                        }
                    ]
                }
            ]
        };

        this.generarSelect();
        
        this.contenedor = this.generarContenedor();

        this.generarButton();
    }
    
    generarTabla(diasQueAtiende, horarioInicio, horarioFin, duracionTurno){
        //recorrer dias que atiende.
        let nuevaTabla = Paw.nuevoElemento("table","",{class:'PawTable'});

        let diasAtiende = Paw.nuevoElemento("tr","",{class:'PawDiasAtiende'});

        let dia = Paw.nuevoElemento("th","",{class:""});
        diasAtiende.appendChild(dia);

        diasQueAtiende.forEach(obj =>{
            let dia = Paw.nuevoElemento("th",obj,{class:'Pawdia'+obj});
            diasAtiende.appendChild(dia);
        });
        nuevaTabla.appendChild(diasAtiende);

        let dIndex = new Date();
        dIndex.setHours(horarioInicio["horas"]);
        dIndex.setMinutes(horarioInicio["minutos"]);

        let dFin = new Date();
        dFin.setHours(horarioFin["horas"]);
        dFin.setMinutes(horarioFin["minutos"]);

        while (dIndex<=dFin ){
            let tr = Paw.nuevoElemento("tr","",{class: dIndex.getHours()+':'+dIndex.getMinutes()});
            let thHora = Paw.nuevoElemento("th",dIndex.getHours()+':'+dIndex.getMinutes(),{hora:dIndex.getHours(),min:dIndex.getMinutes()});
            tr.appendChild(thHora);

            //carga de turnos
            diasQueAtiende.forEach(obj =>{
               let diaTurno  =Paw.nuevoElemento("td","libre",{dia:obj, hora:dIndex.getHours(), min:dIndex.getMinutes(), estado: "libre"});

               tr.appendChild(diaTurno);
            });

            nuevaTabla.appendChild(tr);

            dIndex.setMinutes(dIndex.getMinutes()+duracionTurno);
        }
        return nuevaTabla;
    }

    setTurnosTomados(tabla, turnosTomados){
        turnosTomados.forEach(obj =>{
            let dia =obj['dia'];
            let hora = obj['horas'];
            let minutos = obj['minutos'];
            let selector = "td[dia='"+dia+"'][hora='"+hora+"'][min='"+minutos+"']";
            let turno = tabla.querySelector(selector);
            turno.setAttribute("estado","ocupado");
            turno.textContent = "Ocupado";
        });
    }

    generarSelect(){
        let label = Paw.nuevoElemento("lable", "Médico: ", {class:"PawCalendario-LabelMedico"});
        let select = Paw.nuevoElemento("select", "", {class:"PawCalendario-Select"});
        select.addEventListener("change", ()=>{this.updateTable();})
        this.padre.prepend(Paw.nuevoElemento("br","",""));
        this.padre.prepend(select);
        this.padre.prepend(Paw.nuevoElemento("br","",""));
        this.padre.prepend(label);
        let medicos = this.getMedicos();
        medicos["especialistas"].forEach(element => {
            let informationMedico = element["nombre"] + ', ' + element["apellido"] + ', ' + element["matricula"]
            let option = Paw.nuevoElemento("option", informationMedico, "");
            select.appendChild(option);
        });  
    }

    getInformationOfSelectedMedico(){
        let result = null;
        let found = false;
        let select = this.padre.querySelector(".PawCalendario-Select");
        let values = select.value.split(",");
        let nombre = values[0], apellido = values[1], matricula = values[2];
        this.listaTurnos["especialistas"].forEach(element => {
            if(element["matricula"] == parseInt(matricula))
            {
                if(found == false){
                    result = element;
                    found = true;
                }
            }
               
        });
        return result;
    }

    generarButton(contenedor){
        //primero voy a insertar un boton, donde el usuario tiene que apretar para observar el calendario.
        let boton = document.createElement("button");
        boton.classList.add("pawBotonCalendario");
        boton.type="button";
        boton.innerText="Abrir calendario";
        boton.addEventListener("click", ()=>{this.handleButtonEvent()});
        this.padre.appendChild(boton);
    }

    generarContenedor(){
        //insertar un div que va a contener los datos del calendario.
        let contenedor  = document.createElement("div");
        contenedor.classList.add("pawContenedorCalendario");
        contenedor.classList.add("cerrado");
        this.padre.appendChild(contenedor);
        return contenedor;
    }

    handleButtonEvent(){
        this.updateTable();
        this.changeContenedorClass();  
        this.changeButtonText();
        this.manejoDeSeleccionTurno();
    }

    updateTable(){
        this.removeTableIfExists();
        let informationOfSelectedMedico = this.getInformationOfSelectedMedico();
        let tabla = this.generarTabla(informationOfSelectedMedico["diasQueAtiende"],
                                        informationOfSelectedMedico["horarioInicio"],
                                        informationOfSelectedMedico["horarioFinalizacion"],
                                        informationOfSelectedMedico["duracionTurno"])
        this.setTurnosTomados(tabla, informationOfSelectedMedico["turnosTomados"]);
        this.contenedor.appendChild(tabla);
    }

    changeContenedorClass(){
        if (this.contenedor.classList.contains("cerrado")) {
            this.contenedor.classList.remove("cerrado");
            this.contenedor.classList.add("abierto");
        }else{
            this.contenedor.classList.remove("abierto");
            this.contenedor.classList.add("cerrado");
        }
    }

    changeButtonText(){
        let button = this.padre.querySelector(".pawBotonCalendario");
        if(this.contenedor.classList.contains("abierto"))
            button.innerText="Cerrar calendario";
        else
            button.innerText="Abrir calendario";
    }

    removeTableIfExists(){
        let table = this.contenedor.querySelector("table");
        if(table)
            this.contenedor.removeChild(table);
    }

    getMedicos(){
        var result = {
            "especialistas":[]
        };
        this.listaTurnos["especialistas"].forEach(element => {
            let especialista = {"nombre": element["nombre"],
                            "apellido": element["apellido"],
                            "matricula": element["matricula"]}
            result["especialistas"].push(especialista);
        });
        return result;
    }

    manejoDeSeleccionTurno(){
        let table = this.contenedor.querySelector("table");
        if (table){
            let tdLibres= table.querySelectorAll("td[estado='libre']");
            tdLibres.forEach(obj=>{
                let radio = Paw.nuevoElemento("input","",{type: 'radio',dia: obj.getAttribute("dia"),hora: obj.getAttribute("hora"),min: obj.getAttribute("min"),name:'radio'});
                obj.prepend(radio);
                console.log(obj.getAttribute("dia"));
            });

        }
    }
}


document.addEventListener("DOMContentLoaded",()=>{
    let fieldset = document.querySelector("label[for = 'fecha_turno']").parentElement;
    let calendario = new  PawCalendario(fieldset);
})

