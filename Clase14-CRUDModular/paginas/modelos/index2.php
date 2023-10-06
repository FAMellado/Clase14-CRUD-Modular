<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
    
    <title>Clase PHP</title>
</head>
<body>


    <div class="container p-5">

        <div class="row">


            <form action="paginas/modelos/guardar.php" method="POST">

                <div class="col">

                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" name="nombre" class="form-control" placeholder="Peugeot" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <select class="form-select" aria-label="Default select example" name="origen">
                        <option selected>Seleccionar Origen</option>
                        <option value="japon">Japón</option>
                        <option value="china">China</option>
                        <option value="francia">Francia</option>
                    </select>

                    <br>

                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Logo</span>
                    <input type="text" name="logo" class="form-control" placeholder="asdasd" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Guardar</button>

                </div>

            </form>

        </div>

            <table class="table table-bordered">

                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Origen</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    
                    <?php
                    
                        echo "<h1>Sufrimiento</h1>";

                        $conexion = mysqli_connect("localhost","root","","repuestos");
                        $consulta = "SELECT * FROM marcas";
                        $resultado = mysqli_query($conexion, $consulta);

                        while($row=mysqli_fetch_assoc($resultado)){

                            echo "<tr>";
                            echo "<td>id: "     .$row["id"].        "</td>" ;
                            echo "<td>Nombre: " .$row["nombre"].    "</td>" ;
                            echo "<td>Origen: " .$row["origen"].    "</td>" ;
                            echo "<td>Imagen: " .$row["logo"].      "</td>" ;

                            echo "<td>"                                     ;
                                echo "<span>"; 
                                echo "<a href='eliminar.php?id_enviado=".$row['id']."'>Eliminar </a>";
                                echo "</span>";  

                                    echo "<br>";
                                    
                                echo "<span>"; 
                                echo "<a href='modificar.php?id_enviado=".$row['id']."'>Modificar</a>";
                                echo "</span>";
                            echo "</td>";
                           
                            echo "</tr>";

                        }

                    ?>

                </tbody>

            </table>

            

        </div>

    </div>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer ></script>

</body>
</html>
