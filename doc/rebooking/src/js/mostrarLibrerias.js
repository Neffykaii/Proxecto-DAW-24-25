const $d=document,
    $listaLibrerias=$d.querySelector(".lista-librerias"),
    $libreria=$d.querySelector(".libreria");

let librerias=[]
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
        <article class="vistaLibreria">
            <img data-id="${libreria.idLibreria}" src="./imagenesLibrerias/${libreria.logoLibreria}.jpg" alt="${libreria.nombreLibreria}">
            <p class="nombre">${libreria.nombreLibreria}</p>
            <p class="nombre">${libreria.direccionLibreria}</p>
            <p class="nombre">${libreria.mailLibreria}</p>
        </article>`).join('')
}


function getLibrerias(){
    ajax({
        url:`http://localhost:3000/librerias`,
        fExito:(dataLibrerias)=>{
            librerias=[...dataLibrerias]
            console.log(librerias)
            renderLibrerias(librerias)
        },
        fError:(error)=>console.log(error)
    })
}

function renderLibrerias(librerias){
    $listaLibrerias.innerHTML=librerias.map(libreria=>`
        <article class="libreria">
            <img data-id="${libreria.idLibreria}" src="./imagenesLibrerias/${libreria.logoLibreria}.jpg" alt="${libreria.nombreLibreria}">
            <p class="nombre">${libreria.nombreLibreria}</p>
        </article>`).join('')
}

$d.addEventListener("DOMContentLoaded",getLibrerias)

$listaLibrerias.addEventListener("click", async e=>{
    const id = e.target.dataset.id;
    window.location.href = `vistaLibreria.php?id=${id}`; 
}
)

