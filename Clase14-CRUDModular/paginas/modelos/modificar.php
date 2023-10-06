<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
    
    <title>Clase PHP</title>

    


</head>
<body>

    <?php

    $conexion = mysqli_connect("localhost","root","","repuestos");
    $id_recibido = $_GET["id_enviado"];
    $consulta = "SELECT * FROM marcas WHERE id=".$id_recibido."" ;
    $resultado = mysqli_query($conexion, $consulta);

    while($row=mysqli_fetch_assoc($resultado)){

        
        $nombre_recibido = $_POST["nombre"];
        $origen_recibido = $_POST["origen"];
        $logo_recibido = $_POST["logo"];
        $id_recibido = $_POST["id"];

    }

    ?>


    <div class="container p-5">

        <div class="row">


            <form action="guardar.php" method="POST">

                <div class="col">

                    <input type="text" class="d-none" name="id" value="<?php echo $id_recibido ?>">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" name="nombre" value="<?php echo $nombre_recibido ?>" class="form-control" placeholder="Peugeot" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <select class="form-select" name="origen">
                        <option value="japon" <?php echo $origen_recibido =="japon" ?> >Japón</option>
                        <option value="china" <?php echo $origen_recibido =="china" ?> >China</option>
                        <option value="francia"<?php echo $origen_recibido =="francia" ?> >Francia</option>
                    </select>

                    <br>

                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Logo</span>
                    <input type="text" name="logo" value="<?php echo $logo_recibido ?>" class="form-control" placeholder="asdasd" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Guardar</button>

                </div>

            </form>


    </div>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer ></script>

</body>
</html>
