<!DOCTYPE html>
<html>
    <body>
        
       <?php
            $conexion = new mysqli("db","root","secret","tienda");
            if($conexion->connect_errno)
            {
                echo "error en la coneccion con la base dedatos";
            }
            $consulta = "select * from articulos order by pais,nombre,id";
            $resultado = $conexion->query($consulta);
            echo "<form>";
            echo "<table border ='1'>";
            while($fila=$resultado->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['pais'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</form>";
       // 
       ?>
           </body>
</html>
