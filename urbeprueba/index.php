<!DOCTYPE html>
<html lang="en">

<!-- ENCABEZADO QUE CONTIENE INFORMACION NO VISUAL QUE AYUDA AL FUNCIONAMIENTO DEL PROYECTO -->

<head>
    <meta charset="UFF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Inscripcion</title>                                          
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head> 

<!-- ESTRUCTURAS VISUALES-->
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="text-center">
                <h2 id="main_header">Inscripciones Cursos 2022</h2>   <!--ENCABEZADO PRINCIPAL-->
            </div>
                <form action="conexion.php" method="POST">    <!--TAG PARA ENVIAR LA INFORMACION RECOGIDA DEL FORMULRIO A conexion.php -->
                <div class="form-row">

                    <div class=sep>
                    <ln>Datos del Postulante
                    </ln>
                    </div>
                    <div class="linea">   <!--SEPARADOR-->
                    </div>
                    
                    <!--CUERPO DEL FORMULARIO-->
                    

                  <!--ONBLUR Y ONKEYUP PARA AYUDAR VISUALMENTE CON LAS VALIDACIONES-->     
                
                    
                        <label for="nombre"> Nombre del postulante: </label>
                        <input type="text"  name="nombre" placeholder= "Nombres" onblur="validar(this)" onkeyup="validar(this)" required>   <!--REQUIRED PARA HACER OBLGATORIOS LLENAR LOS CAMPOS-->
                   
                        <label for="nombre"> Apellido del postulante: </label>
                        <input type="text"  name="apellido" placeholder="Apellidos" onblur="validar(this)" onkeyup="validar(this)"  required>
                  
                        <label for="nombre"> Cedula del postulante: </label> 
                        <input type="num"  name="cedula" placeholder="Ej: 11.344.322" onblur="validar(this); validarCI(this)"  onkeyup="validar(this); validarCI(this)"  required>
                    
                        <label for="nombre"> Telefono del postulante: </label>
                        <input type="tel" name="telefono" placeholder = "Ej: 0414111111" onblur="validar(this); validarTel(this)" onkeyup="validar(this); validarTel(this)"  required>
                   
                        <label for="nombre"> Direccion del postulante: </label>
                        <input type= "text" name="direccion" placeholder="Direccion" onblur="validar(this)" onkeyup="validar(this)"  required>
                   

                    <!-- BLOQUE PARA RECOGER INFORMACION SOBRE EL PAGO-->

                    
                    <div class="linea">
                    </div>
                    <div class=sep>
                    
                    <div class=sep>
                        <ln>Registro de pago
                        </ln>
                        </div>
                        <div class="linea">
                    </div>
                    
                   
                    <label for="nombre"> Nombre del Titular de la Cuenta: </label>
                    <input type="text" name="nomti" placeholder= "Nombre Completo" onblur="validar(this)" onkeyup="validar(this)" required>
                   
                    <label for="nombre"> Banco desde el cual se ralizo la transaccion: </label>
                    <input type="text" name="banco" placeholder="Banco Origen" onblur="validar(this)" onkeyup="validar(this)"  required>
                
                    <label for="nombre"> Numero de Referencia: </label>
                    <input type="num" name="ref" placeholder="Ej: 1111" onblur="validar(this); validarRef(this)" onkeyup="validar(this); validaRef(this)"  required>
                    
                    
                    <!-- BLOQUE PARA RECOGER INFORMACION DE ENVIO-->

                    <div class="linea">
                    </div>
                    <div class=sep>
                    <ln>Informacion Para Envio de su Inscripcion.
                    </ln>
                    </div>
                
                    <div class="linea">
                    </div>

                    <label for="nombre"> Direccion de correo electronico: </label>
                    <input type="email" name="correo" placeholder="Ej: alguien@example.com" onblur="validar(this)" onkeyup="validar(this)" required>
                    <input type="text" name="asunto" placeholder="Asunto"onblur="validar(this)" onkeyup="validar(this)" required>
                    <textarea name= "mensaje" placeholder="Mensaje" onblur="validar(this); validarLong(this, 30)"  onkeyup="validar(this); validarLong(this, 30)" required></textarea>
                    <div class="text-center">
                    <button type="submit" name="registrarse" class="btn btn-secondary">Registrate</button>          
                    </div>
                
                </div>
            </form>

                <?php          
                require_once('show.php');
                ?>
            </div>
        </div>
    </div>
</body>
    

        <!--VALIDACION DE CAMPOS-->

        <script type="text/javascript">
            function validar(elemento) {
                if(elemento.value==''){
                    elemento.className="error";
                }else{
                    elemento.className="input";
                }
            } 
            
            function validarTel(elemento){
                if(elemento.value.length < 9){
                    var data = elemento.className='error';
                }else{
                    elemento.className='input';
                }
            }

            function validarCI(elemento){
                if(elemento.value.length < 6){
                    var data = elemento.className='error';
                }else{
                    elemento.className='input';
                }
            }

            function validarRef(elemento){
                if(elemento.value.length < 4){
                    var data = elemento.className='error';
                }else{
                    elemento.className='input';
                }
            }
    
            function validarLong(elemento,min){
                if(elemento.value==''){
                    var data = elemento.value;
                    if(data.length<min){
                        elemento.className='error';
                    }else{
                        elemento.className='input';
                    }
                }
            }
    
            
        </script>

</html>

