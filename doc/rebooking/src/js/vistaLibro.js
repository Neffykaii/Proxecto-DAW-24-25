const $d=document,
    $libro=$d.querySelector(".vista-libro");

let libro=[]

async function ajax(options){
    let {url,method,fExito,fError,data}=options

    try{
        let resp=await fetch(url,{
            method: method||"GET",
            header:{"Content-type":"application/json; charset=utf-8"},
            body: JSON.stringify(data)
        })
        
        if(!resp.ok){
            throw{
                status:resp.status,
                statusText:resp.statusText||"Ocurrió un error"
            }
        }

        json=await resp.json()
        fExito(json)
    }catch(error){
        fError(error)
    }
}

const params = new URLSearchParams(window.location.search);
const id = params.get('id');



console.log(id)


function getLibro(id){
    ajax({
        url:`http://localhost:3000/libros?idLibro=${id}`,
        fExito:(dataLibro)=>{
            libro=[...dataLibro]
            console.log(libro)
            renderLibro(libro)
        },
        fError:(error)=>console.log(error)
    })
}

function renderLibro(libro){
    $libro.innerHTML=libro.map(vistaLibro=>`
        <h2>${vistaLibro.nombreLibro}</h2>
        <article class="vistaLibro">
            <img data-id="${vistaLibro.idLibro}" src="./imagenesLibros/${vistaLibro.imagenLibro}.jpg" alt="${vistaLibro.nombreLibro}">
            <section class="infoLibro">
                <p class="autor">Autor: ${vistaLibro.nombreAutor}</p>
                <p class="editorial">Editorial: ${vistaLibro.editorialLibro}</p>
                <p class="genero">Género: ${vistaLibro.generoLibro}</p>
                <p class="idioma">Idioma: ${vistaLibro.idiomaLibro}</p>
                <p class="fechaPublicacion">Año de publicación: ${vistaLibro.anoPublicacion}</p>
                <form method="post" action="./php/procesar.php" class="botonesLibro">
                    <button name="compra" value="${vistaLibro.idLibro}">Comprar</button>
                    <button name="prestamo" value="${vistaLibro.idLibro}">Alquilar</button>
                </form>
            </section>
            
            </article>`).join('')
}

$d.addEventListener("DOMContentLoaded", e=>{
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

console.log(id);

    if (id) {
        getLibro(id);
    } else {
        console.error("ID no encontrado en la URL");
    }

})