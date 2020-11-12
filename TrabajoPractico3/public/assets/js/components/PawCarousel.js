class PawCarousel {
    constructor(listaImagenes, tagPadre) {



        this.indice=0;
        this.listaImagenes = listaImagenes;


        let padre = document.querySelector(tagPadre);
        let index = 0;
        listaImagenes.forEach(element =>{
            console.log(element);
            let nuevoElemento = Paw.nuevoElemento("img","",{"src": element, "class": "imgCarousel", "index":index });
            if (index == 0){
                nuevoElemento.classList.add("active");
            }

            padre.appendChild(nuevoElemento);
            index++;
        })




        let botonPrev = Paw.nuevoElemento("button","",{"class": "buttonPrev"});
        padre.appendChild(botonPrev);
        let botonNext = Paw.nuevoElemento("button","",{"class": "buttonNext"});
        padre.appendChild(botonNext);


        botonNext.addEventListener("click",(event) =>{
            let imagenActual = document.querySelector(".imgCarousel[index=\""+this.indice +"\"]");
            imagenActual.classList.remove("active");
            this.getNext();
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
            return 0;

        }else {
            this.indice++;
            return this.indice;
        }


    }



}