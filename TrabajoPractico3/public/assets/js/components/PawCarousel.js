class PawCarousel {
    constructor(listaImagenes, tagPadre) {
        //document.head.appendChild(Paw.nuevoElemento("link", "", 
        //{href: ,
        //rel: "stylesheet",
        //type: "text/css"}));

        this.indice=0;
        this.listaImagenes = listaImagenes;

        //genero un contenedor para los thumbs;
        //a este svg se le tiene que dar estilo desde css.
        let contenedorThumbs = Paw.nuevoElemento("div","",{"name":"contenedorThumbs","class":"contenedorThumbs"});

        let padre = document.querySelector(tagPadre);
        let index = 0;
        listaImagenes.forEach(element =>
        {
            let nuevoElemento = Paw.nuevoElemento("img","",{"src": element, "class": "imgCarousel loading", "index":index });
            nuevoElemento.addEventListener("load", function(event) {
                nuevoElemento.classList.remove("loading");
            });

            nuevoElemento.addEventListener("progress", function(event){
                if(event.lengthComputable) {
                    console.error(event.loaded);
                }
            });

            //por cada imagen vamos a generar un span que va a representar el circulo, va a contener el mismo index que las imagenes
            //tambien podemos ponerle el active.
            /*let nuevoCirculo = Paw.nuevoElemento("span","",{"class":"circuloCarousel","index":index});*/
            let nuevoCirculo = Paw.nuevoElemento("img","",{"src": element, "class":"circuloCarousel","index":index, "width":60, "height":60})

            if (index == 0){
                nuevoCirculo.classList.add("active");
                nuevoElemento.classList.add("active");
            }
            padre.appendChild(nuevoElemento);
            contenedorThumbs.appendChild(nuevoCirculo);
            index++;
        });

        let progressBar = Paw.nuevoElemento("div", "", {"class": "progressBar"});
        let actualProgress = Paw.nuevoElemento("div", "", {"class": "progress"});
        progressBar.appendChild(actualProgress);
        padre.appendChild(progressBar);


        //cuando sale del foreach mi contenedorThumbs lo agrego al padre.
        padre.appendChild(contenedorThumbs);
        let botonPrev = Paw.nuevoElemento("button","Prev",{"class": "buttonPrev"});
        padre.appendChild(botonPrev);
        let botonNext = Paw.nuevoElemento("button","Next",{"class": "buttonNext"});
        padre.appendChild(botonNext);

        botonNext.addEventListener("click",() =>{
            let previousIndex = this.getIndex();
            this.getNext();
            this.carouselImagesEvent(previousIndex, this.indice);
            //this.setActiveThumb(previousIndex, this.indice);
        })

        botonPrev.addEventListener("click",() =>{
            let previousIndex = this.getIndex();
            this.getPrevious();
            this.carouselImagesEvent(previousIndex, this.indice);
            //this.setActiveThumb(previousIndex, this.indice);
        })

        document.addEventListener('keydown', (event) => {
            const keyName = event.key;
            if (keyName=="ArrowLeft"){
                let previousIndex = this.getIndex();
                this.getPrevious();
                this.carouselImagesEvent(previousIndex, this.indice);
                //this.setActiveThumb(previousIndex, this.indice);

            }else if (keyName == "ArrowRight"){
                let previousIndex = this.getIndex();
                this.getNext();
                this.carouselImagesEvent(previousIndex, this.indice);
                //his.setActiveThumb(previousIndex, this.indice);
            }
        });
        //CODIGO DE LOS THUMBS
        //esto es para que cuando hago click en un thumb cambie el active a la imagen que tenga el mismo indice que el thumb que clickee
        let i = 0;
        while (i<listaImagenes.length){
            let circulo = document.querySelector(".circuloCarousel[index=\""+i +"\"]");
            circulo.addEventListener("click",()=>{
                let previousIndex = this.indice;
                this.indice = parseInt(circulo.getAttribute("index"));
                this.carouselImagesEvent(previousIndex, this.indice);
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

    setActiveThumb(previous, active){
        let circuloActual = document.querySelector(".circuloCarousel[index=\""+previous+"\"]");
            circuloActual.classList.remove("active");

        let circuloSiguente = document.querySelector(".circuloCarousel[index=\""+active+"\"]");
            circuloSiguente.classList.add("active");
    }

    getIndex(){
        return this.indice;
    }

    carouselImagesEvent(previousIndex, nextIndex){
        let imagenActual = document.querySelector(".imgCarousel[index=\""+previousIndex+"\"]");
        imagenActual.classList.remove("active");
        let imagenSiguiente = document.querySelector(".imgCarousel[index=\""+nextIndex+"\"]");
        imagenSiguiente.classList.add("active");
        this.setActiveThumb(previousIndex, nextIndex);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let listaImagenes =[
        "/assets/imagenes/imagen1.jpg",
        "/assets/imagenes/imagen2.jpg",
        "/assets/imagenes/imagen3.jpg"
    ]
    let carousel = new PawCarousel(listaImagenes, "aside");
});