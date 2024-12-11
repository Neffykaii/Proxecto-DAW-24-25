/* Recoger datos */

const $d=document,
$myForm=$d.forms["formRegistro"],
$userName=$myForm.userName.value,
$userAdress=$myForm.userAdress,
$userMail=$myForm.userMail,
$userNick=$myForm.userNick,
$userPass=$myForm.userPass,
$registrarUser=$myForm.registrarUser

/* Validacion de datos */

/* Funcion si pulsamos el boton de submit añadimos un mensaje al contenido html de "error". 
Añadimos un timeout para que el mensaje desaparezca en los milisegundos que le indiquemos.*/
function showError(msg,$control){
    $submit.disabled=true
    $error.innerHTML=msg
    $error.classList.add("showError")

    setTimeout(()=>{
        $error.classList.remove("showError")
        $error.innerHTML=""
        $control.focus()
        $control.select()
        $submit.disabled=false
    },3000)
}


function checkName(name){
    const expRegName=RegExp("^[a-zA-Z]$")    
if(!name.length<4){
    console.log("Error name")
    showError("Campo vacío o longitud inferior a 4 caracteres",$userName)
    return false 
}else if(!expRegName.test(name)){
    console.log("Formato incorrecto: Solo letras")
    showError("Formato incorrecto: Solo letras",$userName)
    return false 
}
return true
}

function checkAdress(adress){
    const expRegAdress=RegExp("/^[A-Za-z0-9\s]+$/g")    
if(!adress.length<10){
    console.log("Error name")
    showError("Campo vacío o longitud inferior a 10 caracteres",$userAdress)
    return false 
}else if(!expRegAdress.test(adress)){
    console.log("Formato incorrecto: Solo letras y números")
    showError("Formato incorrecto: Solo letras y números",$userAdress)
    return false 
}
return true
}


function checkNick(nick){
    const expRegNick=RegExp("/^[A-Za-z0-9]+$/g")    
if(!nick.length<4||!nick.length>15){
    console.log("Error: el nombre de usuario debe de tener entre 4 y 15 caracteres")
    showError("Error: el nombre de usuario debe de tener entre 4 y 15 caracteres",$userNick)
    return false 
}else if(!expRegNick.test(nick)){
    console.log("Formato incorrecto: Solo letras y números")
    showError("Formato incorrecto: Solo letras y números",$userNick)
    return false 
}
return true
}

function checkPass(pass){
    const expRegPass=RegExp("/^[A-Za-z0-9]+$/g")    
if(!pass.length<8||!pass.length>15){
    console.log("Error: la contraseña debe de tener entre 8 y 15 caracteres")
    showError("Error: la contraseña debe de tener entre 8 y 15 caracteres",$userPass)
    return false 
}else if(!expRegPass.test(pass)){
    console.log("Formato incorrecto: Solo letras y números")
    showError("Formato incorrecto: Solo letras y números",$userPass)
    return false 
}
return true
}

/* En cada una de las funciones de validacion comprobamos si cumplen con lo necesario y, de no ser asi, muestra un mensaje de error.
Si la validacion devuelve false, rompe, de lo contrario se hará un submit */

$myForm.addEventListener("submit",e=>{
e.preventDefault()
switch(true){
    case !checkName($userName.value):
        break
    case !checkAdress($userAdress.value):
        break
    case !checkEmail($userMail.value):
        break
    case !checkNick($userNick.value):
        break
    case !checkPass($userPass.value):
        break
    default:
        $myForm.submit()
}
})