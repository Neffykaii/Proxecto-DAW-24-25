# FASE DE IMPLANTACIÓN

- [FASE DE IMPLANTACIÓN](#fase-de-implantación)
  - [1- Manual técnico](#1--manual-técnico)
    - [1.1- Instalación](#11--instalación)
    - [1.2- Administración do sistema](#12--administración-do-sistema)
  - [2- Manual de usuario](#2--manual-de-usuario)
  - [3- Melloras futuras](#3--melloras-futuras)

## 1- Manual técnico

### 1.1- Instalación

Para continuar con el proyecto es necesaria la conexión con la base de datos, para ello descargaremos el programa xampp que nos proporcionará un espacio para la base de datos, asi como permitirnos leer los archivos PHP, cabe destacar que es necesario activar el controlador de xampp cada vez que se desee utilizar.

También es posible continuar desde el Host de producción utilizado, en este caso [Hostinger](https://www.hostinger.es/) de esta manera podrá ver los cambios sin necesidad de instalaciones.

### 1.2- Administración do sistema

Para acceder al sitio web se recomienda entrar al siguiente enlace
[Rebooking](https://lime-goat-560503.hostingersite.com/rebooking/src/index.php)

Sin embargo, debido a que el host no lee los archivos JSON, desde el ordenador que se está utilizando, se recomienda inicializar el archivo db.json ubicado en la carpeta rebooking/data.

Esto lo conseguiremos abriendo la consola del sistema "CMD" y escribiendo las siguientes instrucciones:

- cd ..
- cd /rebooking/data
- json-init -w db.json

## 2- Manual de usuario

Una vez todo el sistema se encuentra en funcionamiento, podremos navegar por los diferentes apartados con total libertad, incluso puede registrar un nuevo usuario si así lo desea para poder disfrutar de la experiencia completa.
Una vez creamos el nuevo usuario, tendremos un espacio para nosotros pulsando en el icono de usuario, el cual nos rediccionará una vez hayamos iniciado sesión, mostrandonos los libros escogidos desde el propio catálogo.

En caso de que quiera utilizar un usuario ya creado:

Usuario: JuliaR
Contraseña: nuevac

## 3- Melloras futuras

- Buscador de libros en el catálogo
- Administración de libros desde los usuarios de "librerías"
- Uso de ventanas modales para confirmación de diversas acciones
- Mejoras en el diseño de la aplicación
