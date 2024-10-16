# Requerimientos do sistema

- [Requerimientos do sistema](#requerimientos-do-sistema)
  - [1- Descrición Xeral](#1--descrición-xeral)
  - [2- Funcionalidades](#2--funcionalidades)
  - [3- Tipos de usuarios](#3--tipos-de-usuarios)
  - [4- Contorno operacional](#4--contorno-operacional)
  - [5- Normativa](#5--normativa)
  - [6- Melloras futuras](#6--melloras-futuras)

## 1- Descrición Xeral

Este proyecto trata de un portal entre usuarios y librerías, donde el usuario podrá elegir, entre un amplio catálogo de libros provenientes de diferentes tiendas, aquellos que desee comprar o pedir prestado, incluso tendría la oportunidad de que el libro sea enviado a la tienda que el usuario indique haciéndose este último cargo de los gastos de envío. Sin embargo, si el usuario adquiere una suscripción, contará con algunas ventajas tales como: el máximo de libros que puede tomar prestados al mismo tiempo se incrementa (antes 3, ahora 6), los gastos de envío son gratuitos un número contado de veces, es decir, si el usuario hace un pedido de importe inferior a 50€ (si supera este importe los gastos de envío son gratuitos para los suscritos y no suscritos), este será gratuito hasta, por ejemplo, un máximo de 4 veces al mes. 
Por otra parte, si el usuario desea vender algún libro, deberá contactar directamente con las librería a través del correo electrónico que estas faciliten en la plataforma.
Del lado de las empresas, estas podrán visualizar todos y cada uno de los pedidos a través de una de las pestañas de la página, informando si se trata de una compra o un préstamo y si el usuario que solicita los productos está o no suscrito.

## 2- Funcionalidades

Vista de libros - Poder consultar el catálogo donde se muestran la portada y el nombre de todos los libros.
Alta de libros - Dar de alta libros a la base de datos.
Modificación de libros - Poder modificar cualquier información de un libro
Cambio de estado de un libro - Informar si el libro se encuentra disponible o si está prestado.
Borrar libro - Borrar toda información sobre un libro que ya no esté disponible.
Alta de usuarios - Dar de alta usuarios en la base de datos.
Modificación usuarios - Modificar información sobre los usuarios.
Borrar usuario - borrar toda información del usuario que lo desee.

## 3- Tipos de usuarios

Usuario genérico - Acceso a la página de inicio, al catálogo, a la información tanto de libros como librerias, al apartado que informa sobre la suscripción mensual a la que pueden optar y al apartdo para iniciar sesion o registrarse, asi como al portal de compras de los libros.

Usuario registrado - Tendrá acceso a todos los apartados anteriores pero, a mayores, contará con un perfil propio donde podrá ver sus datos y modificarlos.

Usuario verificado (librerias) - Tendrán acceso a todo cuanto puede hacer el usuario genérico además de un perfil propio donde podrán modificar sus datos y los productos que añadan, así como visualizar las compras que los usuarios registrados puedan hacer.

## 4- Contorno operacional

Para acceder a la web, el usuario tan solo necesitara una conexión a internet y su navegador de confianza con las actualizaciones presentes para que el rendimiento de la web sea lo mejor posible.

## 5- Normativa

Como se trata de una aplicación que en un principio actuará únicamente en Galicia la principal lei que le afecta es la Ley 5/2016, de 4 de mayo, del patrimonio cultural de Galicia, donde el usuario permite el tratamiento de datos.

Por otra parte, la Ley 7/2014, de 26 de septiembre, de archivos y documentos de Galicia, permite la conservación de dichos datos hasta que se cumpla con la finalidad dispuesta para la funcionalidad del portal web que el usuario esté utilizando.

La Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDPGDD) estará presente, garantizando la seguridad de los datos de los usuarios.

## 6- Melloras futuras

Algunas de las funcionalidades que se pretenden añadir al proyecto serían: filtrado de libros por géneros y búsqueda por nombre.