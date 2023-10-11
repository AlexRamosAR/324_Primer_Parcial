<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="with=divice-whidth">
	
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<?php
	include("con_db.php");
    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
        $sql2 = "SELECT * FROM Docente WHERE usuario = '$usuario' " ;
        $result2 = mysqli_query($conex, $sql2);
        if($result2->num_rows>0){
            ?>
            <h3> </h3>
            <form method = "post" action="">
            <input style="background: #19191a;  width: 320px; "type="submit" name="mos_notas" value="Mostrar promedios por departamento(CASE WHEN)" >
            </form>
            <?php
            if(isset($_POST['mos_notas'])){
                if(isset($_POST['mos_notas'])) {
                    $sql = "SELECT 
                        AVG(CASE  WHEN departamento='01' then nota END) CH,
                        AVG(CASE  WHEN departamento='02' then nota END) LP,
                        AVG(CASE  WHEN departamento='03' then nota END) CB,
                        AVG(CASE  WHEN departamento='04' then nota END) ORU,
                        AVG(CASE  WHEN departamento='05' then nota END) PT,
                        AVG(CASE  WHEN departamento='06' then nota END) TR,
                        AVG(CASE  WHEN departamento='07' then nota END) SC,
                        AVG(CASE  WHEN departamento='08' then nota END) BN,
                        AVG(CASE  WHEN departamento='09' then nota END) PD
                
                        FROM estudiante";
                
                    $result = mysqli_query($conex, $sql);
    
                    if ($result) {
                        $fila = mysqli_fetch_assoc($result);
                        ?>
                        <h3>Promedios por Departamento</h3>
                        <table border="3">
                            <tr>
                                <?php
                                foreach ($fila as $departamento => $promedio) {
                                    echo "<th>$departamento</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                foreach ($fila as $departamento => $promedio) {
                                    // Verificar si el valor es NULL y reemplazar con "0"
                                    $promedio = ($promedio !== NULL ? $promedio : '0');
                                    echo "<td>$promedio</td>";
                                }
                                ?>
                            </tr>
                        </table>
                        <?php
                    } else {
                        echo "<tr><td colspan='6'>Error en la consulta: " . mysqli_error($conex) . "</td></tr>";
                    }
                }
            } 
        }
    }
?>