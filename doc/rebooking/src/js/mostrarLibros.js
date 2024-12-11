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
        <card data-id="${libro.idLibro}" class="libro" >
            <img data-id="${libro.idLibro}" src="./imagenesLibros/${libro.imagenLibro}.jpg" alt="${libro.nombreLibro}">
            <p data-id="${libro.idLibro}" class="nombre">${libro.nombreLibro}</p>
            <p data-id="${libro.idLibro}" class="autor">${libro.nombreAutor}</p>
        </card>`).join('')
}

$d.addEventListener("DOMContentLoaded", getLibros)

$listaLibros.addEventListener("click", async e=>{
    const id = e.target.dataset.id;
    window.location.href = `vistaLibro.php?id=${id}`; 
}
)