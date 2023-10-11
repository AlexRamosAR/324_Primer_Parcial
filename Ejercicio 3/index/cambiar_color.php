<?php
    include("con_db.php");
    
    if(isset($_POST['cambio_col'])){
        ?>
            <h3> Se ha pulsado el boton</h3>
        <?php
        if(isset($_SESSION['usuario'])){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $colorSeleccionado = $_POST["select_color"];
                $usuario = $_SESSION['usuario'];
                // echo $colorSeleccionado;

                $sql = "SELECT * FROM Estudiante WHERE usuario = '$usuario' " ;
                $result = mysqli_query($conex, $sql);

                $sql2 = "SELECT * FROM Docente WHERE usuario = '$usuario' " ;
                $result2 = mysqli_query($conex, $sql2);

                if ($result->num_rows>0) {
                    $sql = "UPDATE Estudiante SET color = '$colorSeleccionado' WHERE usuario = '$usuario'";
                    mysqli_query($conex, $sql);
                    // echo "Color actualizado correctamente(E)";
                } elseif ($result2->num_rows > 0) {
                    $sql = "UPDATE Docente SET color = '$colorSeleccionado' WHERE usuario = '$usuario'";
                    mysqli_query($conex, $sql);
                    // echo "Color actualizado correctamente(D)";
                }
                ?>
                <h3> Color actualizado...!!!</h3>
                <?php
                header("Refresh:0");
            } 
        } else {
            ?>
                <h3> Debe iniciar sesion</h3>
            <?php
        }
    }else{
        if (isset($_SESSION['usuario'])) {
            ?>
                <h3> Puedes configurar tu color, si deseas</h3>
            <?php
        }else{
            ?>
                <h3> Aun no has inciado sesion </h3>
            <?php
        }
    }
?>