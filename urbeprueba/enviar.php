<?php

//////////// PARA ENVIAR CORREO A LOS USUARIOS Y AL MODERADOR DEL FORMULARIO//////////
////////////////////// AUN PROBANDO //////////////////////


$target = "inscripciones.prog@gmail.com";   //Asignacion de correo para recibir inscripciones.

$nombre = $_POST['nombre'];                //Asignar valores a nuestras variable mediante el metodo POST.
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

setcookie("snombre", $nombre,time() + 60*60*24*30);       //Cookies para guardar la informacion
setcookie("sapellido", $apellido,time() + 60*60*24*30);  // de registro por un mes.
setcookie("scorreo", $correo,time() + 60*60*24*30);

////////FORMATO Y CUERPO DE LOS CORREOS//////////.

$msj2 = "Saludos cordiales.\nSu Inscripción fue formalizada exitosamente, por favor espere que alguien de nuestro equipo se comunique con usted para la planificación de horarios.\nTenga un buen día. ";
$msj = "Nombres: ".$nombre."\n". "Apellidos: ".$apellido."\n"."Cédula: ".$cedula."\n"."Teléfono: ".$telefono."\n"."Dirección: ".$direccion."\n"."Correo: ".$correo. "\n". "Asunto: ". $asunto. "\n". "Mensaje: ".$mensaje;
mail($target,"Inscripcion Cursos 2022",$msj);
mail($correo,"Inscripcion Cursos 2022",$msj2);

header("location:index.html");      //Para redirigir de nuevo a la página.
?>