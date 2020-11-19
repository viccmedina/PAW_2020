class PawCarousel {
    constructor(listaImagenes, tagPadre) {
        this.indice=0;
        this.listaImagenes = listaImagenes;
        this.loadedImages=0;
        this.imageCount=listaImagenes.length;
        this.userInteracted = false;

        let contenedorThumbs, padre, index, progressBar, actualProgress;

        contenedorThumbs = Paw.nuevoElemento("div","",{"name":"contenedorThumbs","class":"contenedorThumbs"});

        padre = document.querySelector(tagPadre);
        index = 0;
        progressBar = Paw.nuevoElemento("div", "", {"class": "progressBar"});
        actualProgress = Paw.nuevoElemento("div", "", {"class": "progress"});
            
        listaImagenes.forEach(element =>
        {
            let nuevoElemento = Paw.nuevoElemento("img","",{"src": element, "class": "imgCarousel loading", "index":index });
            nuevoElemento.addEventListener("load", event=>{
                nuevoElemento.classList.remove("loading");
                this.loadedImages++;
                let averageOfLoad = (this.loadedImages / this.imageCount) * 100;
                //console.log(averageOfLoad);
                if(averageOfLoad == 100){
                    //actualProgress.setAttribute("loaded", "100");
                    padre.removeChild(progressBar);
                    this.handleEvent();
                }
                else
                    actualProgress.style.setProperty("--ancho", averageOfLoad+"vw");
            });

            nuevoElemento.addEventListener("transitionend", (event)=>{
                setTimeout(()=>{
                    //console.log(this.userInteracted);
                    if(this.userInteracted == false)
                        if(event.target.classList.contains("active"))
                            this.handleEvent();
                    
                }, 4500);
            });

            progressBar.appendChild(actualProgress);
            //por cada imagen vamos a generar un span que va a representar el circulo, va a contener el mismo index que las imagenes
            //tambien podemos ponerle el active.
            /*let nuevoCirculo = Paw.nuevoElemento("span","",{"class":"circuloCarousel","index":index});*/
            let nuevoCirculo = Paw.nuevoElemento("img","",{"src": element, "class":"circuloCarousel","index":index, "width":60, "height":60})
            nuevoCirculo.addEventListener("load", ()=>{
                console.log("Circulo loaded");
            });

            if (index == 0){
                nuevoCirculo.classList.add("active");
                nuevoElemento.classList.add("active");
            }
            padre.appendChild(nuevoElemento);
            contenedorThumbs.appendChild(nuevoCirculo);
            index++;
        });

        
        padre.appendChild(progressBar);

        //cuando sale del foreach mi contenedorThumbs lo agrego al padre.
        padre.appendChild(contenedorThumbs);
        let botonPrev = Paw.nuevoElemento("button","Prev",{"class": "buttonPrev"});
        padre.appendChild(botonPrev);
        let botonNext = Paw.nuevoElemento("button","Next",{"class": "buttonNext"});
        padre.appendChild(botonNext);

        botonNext.addEventListener("click",() =>{
            this.userInteracted = true;
            let previousIndex = this.getIndex();
            this.getNext();
            this.carouselImagesEvent(previousIndex, this.indice);
        })

        botonPrev.addEventListener("click",() =>{
            this.userInteracted = true;
            let previousIndex = this.getIndex();
            this.getPrevious();
            this.carouselImagesEvent(previousIndex, this.indice);
        })

        document.addEventListener('keydown', (event) => {
            const keyName = event.key;
            if (keyName=="ArrowLeft"){
                this.userInteracted = true;
                let previousIndex = this.getIndex();
                this.getPrevious();
                this.carouselImagesEvent(previousIndex, this.indice);

            }else if (keyName == "ArrowRight"){
                this.userInteracted = true;
                let previousIndex = this.getIndex();
                this.getNext();
                this.carouselImagesEvent(previousIndex, this.indice);
            }
        });
        //CODIGO DE LOS THUMBS
        //esto es para que cuando hago click en un thumb cambie el active a la imagen que tenga el mismo indice que el thumb que clickee
        let i = 0;
        while (i<listaImagenes.length){
            let circulo = document.querySelector(".circuloCarousel[index=\""+i +"\"]");
            circulo.addEventListener("click",()=>{
                this.userInteracted = true;
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

    handleEvent(){
        let previousIndex = this.getIndex();
        this.getNext();
        this.carouselImagesEvent(previousIndex, this.indice); 
    }

    userInteracted(){
        return this.userInteracted;
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let listaImagenes =[
        "/assets/imagenes/Carousel1.jpg",
        "/assets/imagenes/Carousel2.jpg",
        "/assets/imagenes/Carousel3.jpeg"
    ]
    let carousel = new PawCarousel(listaImagenes, "aside");
});