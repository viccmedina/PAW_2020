class PawDD {

    constructor(dropZone) {

        var zona = document.querySelector("section"+"[class=\""+dropZone+"\"]");
        console.log(zona);



        function comenzar(){
        zona.addEventListener("dragenter",function (e){
            e.preventDefault();} ,false);


        zona.addEventListener("dragover",function (e){
            e.preventDefault()},false);


        zona.addEventListener("drop",soltar,false);

        function soltar(e) {

            e.preventDefault();

            let entrada = document.querySelector("input[name='archivosubidoDD']");

            entrada.files=e.dataTransfer.files;

            console.log(entrada.files);


        }

        }

        //window.addEventListener("load",comenzar,false);
        comenzar();

    }

}

document.addEventListener("DOMContentLoaded", () => {

    let dd = new PawDD("pawCard cargaDeEstudio");
});