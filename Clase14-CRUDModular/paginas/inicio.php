<h1 class="page-header">Inicio</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<a href="index.php?p=/modelos/index">Ir a modelos</a>
<a href="index.php?p=contacto">Ir a contactos</a>

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
                                echo "<a href='./modelos/eliminar.php?id_enviado=".$row['id']."'>Eliminar </a>";
                                echo "</span>";  

                                    echo "<br>";
                                    
                                echo "<span>"; 
                                echo "<a href='./paginas/modelos/modificar.php?id_enviado=".$row['id']."'>Modificar</a>";
                                echo "</span>";
                            echo "</td>";
                           
                            echo "</tr>";

                        }

                    ?>

                </tbody>

            </table>

