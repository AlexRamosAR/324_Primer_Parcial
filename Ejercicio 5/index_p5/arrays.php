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
            <input style="background: #19191a;  width: 320px; "type="submit" name="mos_notas2" value="Mostrar promedios por departamento(ARRAY)" >
            </form>
            <?php
            if(isset($_POST['mos_notas2'])){
                if(isset($_POST['mos_notas2'])) {
                    $sql = "SELECT 
                    CASE d.departamento 
                        WHEN '01' THEN 'CH' 
                        WHEN '02' THEN 'LP' 
                        WHEN '03' THEN 'CB' 
                        WHEN '04' THEN 'ORU' 
                        WHEN '05' THEN 'PT' 
                        WHEN '06' THEN 'TJ' 
                        WHEN '07' THEN 'SC' 
                        WHEN '08' THEN 'BN' 
                        WHEN '09' THEN 'PD' 
                        ELSE 'Otro' 
                    END AS departamento,
                    AVG(e.nota) AS promedio
                FROM 
                    (SELECT '01' AS departamento UNION ALL
                     SELECT '02' UNION ALL
                     SELECT '03' UNION ALL
                     SELECT '04' UNION ALL
                     SELECT '05' UNION ALL
                     SELECT '06' UNION ALL
                     SELECT '07' UNION ALL
                     SELECT '08' UNION ALL
                     SELECT '09') d
                LEFT JOIN estudiante e ON d.departamento = e.departamento
                GROUP BY d.departamento
                ORDER BY d.departamento;
                        ";
                        
                    $result = mysqli_query($conex, $sql);
            
                    if ($result) {
                        ?>
                        <h3>Promedios por Departamento</h3>
                        <table border="3">
                            <tr>
                                <?php
                                
                                while ($fila = mysqli_fetch_array($result)) {
                                    echo "<th>{$fila['departamento']}</th>";
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                mysqli_data_seek($result, 0);
                                while ($fila = mysqli_fetch_array($result)) {
                                    echo "<td>{$fila['promedio']}</td>";
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