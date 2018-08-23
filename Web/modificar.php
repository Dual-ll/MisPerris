<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <body>
        <?php include_once './menu.php';?>
        <?php
            include_once '../controlador/DaoPerro.php';
            $dao=new DaoPerro();
            $id=$_GET["id"];
            $reg=$dao->Buscar($id);
            
            //fetch_row recupera solo 1 fila
            $fila= mysqli_fetch_row($reg);
        ?>
        <div align='center'> 
            <form method="POST" action="modificar_perro.php" >
                <div class="table">
                    <h1>Formulario Actualización de Perros</h1>
                    <br>
                <table width="500px">
                    <tbody>
                        <tr>
                            <td><font face="Comic Sans MS,arial,verdana" size="3" >ID:</font></td>
                            <td>
                                <input type="text" name="txtIdentificador" value="<?php echo $fila[0]?>" disabled/>
                                <input type="hidden" name="txtId" value="<?php echo $fila[0]?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Comic Sans MS,arial,verdana" size="3" >Nombre:</font></td>
                            <td>
                                <input type="text" name="txtNombre" value="<?php echo $fila[1]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Comic Sans MS,arial,verdana" size="3" >Raza:</font></td>
                            <td>
                                <input type="text" name="txtRaza" value="<?php echo $fila[2]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Comic Sans MS,arial,verdana" size="3" >Edad:</font></td>
                            <td>
                                <input type="text" name="txtEdad" value="<?php echo $fila[3]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Comic Sans MS,arial,verdana" size="3" >Tamaño:</font></td>
                            <td>
                                <input type="number" min="0" max="70"
                                       name="txtTamano" value="<?php echo $fila[4]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="btn btn-primary" type="submit" value="Modificar"/>

                                <input class="btn btn-primary" type="reset" value="Limpiar" />
                            </td>                        
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </body>
</html>
