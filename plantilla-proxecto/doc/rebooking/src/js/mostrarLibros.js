const $d=document,
    $listaLibros=$d.querySelector(".lista-libros");

let libros=[]

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

function getLibros(){
    ajax({
        url:`http://localhost:3000/libros`,
        fExito:(dataLibros)=>{
            libros=[...dataLibros]
            console.log(libros)
            renderLibros(libros)
        },
        fError:(error)=>console.log(error)
    })
}

function renderLibros(libros){
    $listaLibros.innerHTML=libros.map(libro=>`
        <div class="libro">
            <img src="" alt="">
            <p class="nombre">${libro.nombreLibro}</p>
            <p class="autor">${libro.nombreAutor}</p>
        </div>`).join('')
}

$d.addEventListener("DOMContentLoaded", getLibros)