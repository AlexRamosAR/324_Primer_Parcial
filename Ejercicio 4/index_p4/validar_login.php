<?php
    
    include("con_db.php");
    if(isset($_POST['inicio_ses'])){
        if(isset($_SESSION['usuario'])){
            // Hay un usuario en sesión, puedes mostrar información específica para usuarios autenticados
            session_destroy();
            header("Location: index.php");
            exit();
        } else {
            $usuario = $_POST['user']; // Asegúrate de realizar validación y limpieza adecuadas de los datos
            $pass = $_POST['pass'];
            // Consulta SQL para verificar si el usuario existe
            $sql = "SELECT * FROM Estudiante WHERE usuario = '$usuario' and contraseña = '$pass'" ;
            $result = mysqli_query($conex,$sql);
            $sql2 = "SELECT * FROM Docente WHERE usuario = '$usuario' AND contraseña = '$pass'";
            $result2 = mysqli_query($conex,$sql2);
            if ($result->num_rows > 0) {
                $_SESSION['usuario'] = $usuario;
                header("Refresh:0");
                ?>
                <h3> El usuario existe en la base de datos(Estudiante).</h3>
                <?php
            } elseif ($result2->num_rows > 0){
                $_SESSION['usuario'] = $usuario;
                header("Refresh:0");
                ?>
                <h3> El usuario existe en la base de datos(Docente).</h3>
                <?php
                
            } else {
                ?>
                <h3> El usuario no existe en la base de datos.</h3>
                <?php
            }
        }
        
    }else{
        if (isset($_SESSION['usuario'])) {
            ?>
                <h3> Bienvenid@!!! <?php echo "".$_SESSION['usuario']."";?>, tu sesion esta inciada</h3>
            <?php
        }else{
            ?>
                <h3> Aun no has inciado sesion... hazlo ahora!!!</h3>
            <?php
        }
    }
?>