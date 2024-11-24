const $d=document

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

function getData(){
    ajax({
        url:`./php/recogerBD.php`,
        fExito:(dataBD)=>{
            console.log(dataBD);
        },
        fError:(error)=>console.log(error)
    })
}

//$d.addEventListener("DOMContentLoaded", getData)