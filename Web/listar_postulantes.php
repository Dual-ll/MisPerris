<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
} else{
	$usuario=$_SESSION["usuario"];
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    </head>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <body>
        <?php
        include_once './menu.php';
        ?>
        <div align='center'>
            <br>
            <br>
        <h1>Listado de Postulantes</h1>
        <table class="table table-dark">
            <tr>
                <br>
                <br>
                <td>RUT</td>
                <td>Nombre</td>
                <td>Fecha de nacimiento</td>
                <td>Fono</td>
                <td>Correo</td>
                <td>Region</td>
                <td>Ciudad</td>
                <td>Tipo Vivienda</td>
            </tr>
            <?php
                include_once '../Controlador/DaoPostulante.php';
                $dao=new DaoPostulante();
                $reg=$dao->Listar();
                $archivo = fopen("listado.csv", "w");
                fwrite($archivo, "RUT;Nombre Completo;Fecha Nacimiento;Fono;Correo;Region;Ciudad;Vivienda \n");
                while ($row = mysqli_fetch_array($reg)){
                    echo '<tr>';
                    echo '<td>'.$row[0]."</td>";
                    echo '<td>'.$row[1]."</td>";
                    echo '<td>'.$row[2]."</td>";
                    echo '<td>'.$row[3]."</td>";
                    echo '<td>'.$row[4]."</td>";
                    echo '<td>'.$row[5]."</td>";
                    echo '<td>'.$row[6]."</td>";
                    echo '<td>'.$row[7]."</td>";

                    echo '<td><a class="btn btn-default btn-sm" href="eliminar_postulante.php?rut='.$row[0].'" ><span class="glyphicon glyphicon-trash"></span> Eliminar </a></td>';
//                    echo '<td><a class="btn btn-default btn-sm" href="modificar_postulanteweb.php?rut='.$row[0].'"><span class="glyphicon glyphicon-refresh"></span> Modificar </a></td>';
                    echo '</tr>';
            fwrite($archivo, $row[0] . ";" . "$row[1]" . ";" . $row[2] . ";" . $row[3] . ";" . $row[4] . ";" . $row[5] . ";" . "$row[6]" . ";" . $row[7] . " \n");
        }
        fclose($archivo);
        ?>
        </table>
        <div>
            <a href="listado.csv" class="badge badge-success">Exportar a Excel</a>
            <a href="lista_pdf_1.php" class="badge badge-danger">Exportar a PDF</a>
        </div>

        </div>
    </body>
</html>
