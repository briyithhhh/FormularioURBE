<!DOCTYPE html>
<html lang="en">

<!-- PARA DAR ESTILO A LA TABLA-->

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
            <div class="col-12">

            <?php
            ////////// MOSTRAR DATOS //////////

                $inc = include("conexion.php");      //ENLACE DE CONEXION A LA LA BDD
                if ($inc){
                    $consulta = "SELECT nombre, id FROM registro";     //SELECCION DE CAMPOS PARA MOSTRAR
                    
                    $result = mysqli_query($enlace,$consulta); //COMANDO QUE EJECUTA LA CONSULTA

                    if($result){
                        while($row = mysqli_fetch_assoc($result)){     //CICLO WHILE PARA MOSTRAR FILAS
                            $response[] = $row;
                        //   $id = $row['id'];           
                        //   $nombre = $row['nombre'];
                        }

                    }
                        ///////////////////// FRAGMENTO DE HTML PARA MOSTRAR DATOS ///////////

                        ?>
                        <div class="tabla">
                        <table class="table table-bordered">
                            <h4>Alumnos Inscritos</h4>
                            <div class="linea">
                            </div>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th> 
                                    <th scope="col">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($response as $item){       // CICLO FOR PARA ENLISTAR LOS ALUMNOS INSCRITOS
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $item['id']?></th>
                                    <td><?php echo $item['nombre']?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</body>          
<?php        
    }
?>