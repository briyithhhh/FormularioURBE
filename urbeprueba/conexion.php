<?php
//////////////////////////////// CONEXION /////////////////////////////////


    $servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="urbe";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);  //Estableciendo conexion con la base de datos

//////////////////////////// INSERCION DE DATOS //////////////////////

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}

    if(isset($_POST['registrarse'])){
        $nombre = $_POST["nombre"];                //RECUPERACION DE VARIABLES DEL FORMULARIO
        $apellido = $_POST["apellido"];
        $cedula = $_POST["cedula"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $id= rand(1111,9999);
        $nomti = $_POST["nomti"];
        $banco = $_POST["banco"];
        $ref = $_POST["ref"];

        $insersion="INSERT INTO registro VAlUES('$nombre', '$apellido', '$cedula','$telefono','$direccion', '$correo','$id') ";  //Sentencia Sql para relizar insersion de datos a la primera tabla
        
        
        $ejecutar = mysqli_query($enlace, $insersion);     //COMANDO QUE EJECUTA LA SENTENCIA
        
        if($ejecutar){  //LA CONDICION PARA QUE INSERTE DATOS EN LA SEGUNDA TABLA ES QUE SE HAYA CUMPLIDO EXITOSAMENTE LA INSERSION DE DATOS EN LA PRIMERA
            
            $insersion="INSERT INTO pago VAlUES('$nomti', '$banco', '$ref') ";  
            
            $ejecutar = mysqli_query($enlace, $insersion); //MISMO COMANDO PARA EJECUTAR LA SENTENCIA

            echo    
            "Datos guardados correctamente<br>        
            <a href='index.php'>volver</a>";  //PARA VOLVER A LA PAGINA DEL FORMULARIO
        
        }else{echo"Hubo algun error en la sentencia sql";} //SI NO SE EJECUTAN LAS SENTENCIAS PROCEDE A LANZAR UN MENSAJE DE ERROR
    }   
    
?>