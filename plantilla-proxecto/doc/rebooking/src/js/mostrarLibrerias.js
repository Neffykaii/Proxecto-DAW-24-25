const $d=document,
    $listaLibrerias=$d.querySelector(".lista-librerias");

let librerias=[]

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


function getLibrerias(){
    ajax({
        url:`http://localhost:3000/librerias`,
        fExito:(dataLibrerias)=>{
            librerias=[...dataLibrerias]
            console.log(librerias)
            renderlibrerias(librerias)
        },
        fError:(error)=>console.log(error)
    })
}

function renderLibrerias(librerias){
    $listaLibrerias.innerHTML=librerias.map(libreria=>`
        <div class="libreria">
            <img src="" alt="">
            <p class="nombre">${libreria.nombreLibreria}</p>
            <p class="direccion">${libreria.direccionLibreria}</p>
        </div>`).join('')
}

$d.addEventListener("DOMContentLoaded",getLibrerias)