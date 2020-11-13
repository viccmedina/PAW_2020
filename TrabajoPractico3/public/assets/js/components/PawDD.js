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
            let listaArchivos = e.dataTransfer.files;
            let lista = "";

            for (let i = 0; i < listaArchivos.length; i++) {
                lista = listaArchivos[i].name;
            }

            //esto solo muestra el archivo.


            soltar.innerHTML=lista;
        }

        }

        window.addEventListener("load",comenzar,false);

    }


}