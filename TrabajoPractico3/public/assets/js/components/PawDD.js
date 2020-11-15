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
            console.log("entro a soltar")
            e.preventDefault();

            let entrada = document.querySelector("input[name='archivosubidoDD']");
            console.log(e.dataTransfer.files[0]);

           /* entrada.files[0]=e.dataTransfer.files[0];
            console.log(entrada.files[0]);*/

        }

        }

        window.addEventListener("load",comenzar,false);

    }

}

document.addEventListener("DOMContentLoaded", () => {

    let dd = new PawDD("cargaDeEstudio");
});