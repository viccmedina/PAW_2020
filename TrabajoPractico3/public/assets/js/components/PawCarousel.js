class PawCarousel {
    constructor(listaImagenes, tagPadre) {

        document.head.appendChild(Paw.nuevoElemento("link", "", 
        {href: "/assets/style/paw_carousel/pawcarousel.css",
        rel: "stylesheet",
        type: "text/css"}));


        this.indice=0;
        this.listaImagenes = listaImagenes;

        //genero un contenedor para los thumbs;

        //a este svg se le tiene que dar estilo desde css.
        let contenedorThumbs = Paw.nuevoElemento("div","",{"name":"contenedorThumbs","class":"contenedorThumbs"});



        let padre = document.querySelector(tagPadre);
        let index = 0;
        listaImagenes.forEach(element =>{
            let nuevoElemento = Paw.nuevoElemento("img","",{"src": element, "class": "imgCarousel fade", "index":index });

            //por cada imagen vamos a generar un span que va a representar el circulo, va a contener el mismo index que las imagenes
            //tambien podemos ponerle el active.
            let nuevoCirculo = Paw.nuevoElemento("span","",{"class":"circuloCarousel","index":index});

            if (index == 0){
                //nuevoCirculo.classList.add("active");
                nuevoElemento.classList.add("active");
            }


            padre.appendChild(nuevoElemento);
            contenedorThumbs.appendChild(nuevoCirculo);


            index++;
        })

        //cuando sale del foreach mi contenedorThumbs lo agrego al padre.
        padre.appendChild(contenedorThumbs);



        let botonPrev = Paw.nuevoElemento("button","Prev",{"class": "buttonPrev"});
        padre.appendChild(botonPrev);
        let botonNext = Paw.nuevoElemento("button","Next",{"class": "buttonNext"});
        padre.appendChild(botonNext);


        botonNext.addEventListener("click",(event) =>{

            //console.log("This indice: "+this.indice);

            let imagenActual = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
            imagenActual.classList.remove("active");
            this.getNext();
            console.log("This indice after get next: "+this.indice);
            let imagenSiguiente = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
            imagenSiguiente.classList.add("active");

        } )


        botonPrev.addEventListener("click",(event) =>{
            let imagenActual = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
            imagenActual.classList.remove("active");
            this.getPrevious();
            let imagenPosterior = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
            imagenPosterior.classList.add("active");


        } )



        document.addEventListener('keydown', (event) => {
            const keyName = event.key;

            if (keyName=="ArrowLeft"){

                let imagenActual = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
                imagenActual.classList.remove("active");
                this.getPrevious();
                let imagenPosterior = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
                imagenPosterior.classList.add("active");


            }else if (keyName == "ArrowRight"){

                let imagenActual = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
                imagenActual.classList.remove("active");
                this.getNext();
                let imagenSiguiente = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
                imagenSiguiente.classList.add("active");
            }

        });



        //CODIGO DE LOS THUMBS
        //esto es para que cuando hago click en un thumb cambie el active a la imagen que tenga el mismo indice que el thumb que clickee
        let i = 0;
        while (i<listaImagenes.length){
            let circulo = document.querySelector(".circuloCarousel[index=\""+i +"\"]");
            circulo.addEventListener("click",(event)=>{

                //console.log("This indice: "+this.indice);
                //console.log("Index circulo: "+circulo.getAttribute("index"));

                let imagenActual = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
                imagenActual.classList.remove("active");
                let imagenSiguiente = document.querySelector(".imgCarousel[index=\""+circulo.getAttribute("index") +"\"]");
                imagenSiguiente.classList.add("active");
                //console.log(typeof(circulo.getAttribute("index")));
                this.indice = parseInt(circulo.getAttribute("index"));
            });
            i++;
        }

        

    }

    getPrevious(){
        if ((this.indice)== 0 ){
            this.indice=this.listaImagenes.length-1;
            return this.indice;
        }else {
            this.indice--;
            return this.indice;
        }
    }

    getNext() {
        console.log("This indice: "+this.indice);
        if((this.indice+1) ==this.listaImagenes.length){
            this.indice=0;
        }else {
            this.indice++;
        }
    }




}