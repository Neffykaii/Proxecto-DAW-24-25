const $d=document,
    $libreria=$d.querySelector(".libreria");

let libreria=[]

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


function getLibreria(id){
    ajax({
        url:`http://localhost:3000/librerias?idLibreria=${id}`,
        fExito:(dataLibreria)=>{
            libreria=[...dataLibreria]
            console.log(libreria)
            renderLibreria(libreria)
        },
        fError:(error)=>console.log(error)
    })
}

function renderLibreria(libreria){
    $libreria.innerHTML=libreria.map(libreria=>`
        <h2>${libreria.nombreLibreria}</h2>
        <article class="vistaLibreria">
            <img data-id="${libreria.idLibreria}" src="./imagenesLibrerias/${libreria.logoLibreria}.jpg" alt="${libreria.nombreLibreria}">
        <address>
        Encuentranos en: ${libreria.direccionLibreria}</br>
        Contacta con nosotros: <a href="mailto:${libreria.mailLibreria}">${libreria.mailLibreria}</a>
        </address>
            </article>`).join('')
}

$d.addEventListener("DOMContentLoaded", e=>{
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

console.log(id);

    if (id) {
        getLibreria(id);
    } else {
        console.error("ID no encontrado en la URL");
    }

})

