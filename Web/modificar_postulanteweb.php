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
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var id_region=$("#cboRegion").val();
                    $.ajax({
                        url: "llenar_ciudad.php",
                        type: 'POST',
                        data: {id_region:id_region},
                        success: function(data){
                            $("#cboCiudad").html(data);
                        }
                    })
                });
                    $("#cboRegion").ready(function(){
                    var id_region=$("#cboRegion").val();
                    $.ajax({
                        url: "llenar_ciudad.php",
                        type: 'POST',
                        data: {id_region:id_region},
                        success: function(data){
                            $("#cboCiudad").html(data);
                        }
                    })
                });
            });
        </script>
        <?php include_once './menu.php';?>
        <?php
            include_once '../controlador/DaoPostulante.php';
            $cone= mysqli_connect("localhost", "root", "", "misperris");
            $dao=new DaoPostulante();
            $rut=$_GET["rut"];
            $reg1=$dao->Buscar($rut);
            //fetch_row recupera solo 1 fila
            $fila= mysqli_fetch_row($reg1);
            $reg= mysqli_query($cone, "select * from region");
            $reg1= mysqli_query($cone, "select * from tipo_vivienda");
        ?>
        
        <div align='center'> 
            <form method="POST" action="modificar_postulante.php" >
                <div class="form-group col-md-6">
                    <h1>Formulario Actualización de Postulantes</h1>
                    <br>
                    <tbody>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >RUT:</font></td>
                            <td>
                                <input type="text" name="txtRutC" class="form-control" value="<?php echo $fila[0]?>" disabled/>
                                <input type="hidden" name="txtRut" value="<?php echo $fila[0]?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >Nombre completo:</font></td>
                            <td>
                                <input type="text" name="txtNombre" class="form-control" value="<?php echo $fila[1]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >Fecha nacimiento:</font></td>
                            <td>
                                <input type="date" name="txtFecha" class="form-control" value="<?php echo $fila[2]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >Fono:</font></td>
                            <td>
                                <input type="integer" name="txtFono" class="form-control" value="<?php echo $fila[3]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >Correo:</font></td>
                            <td>
                                <input type="email" name="txtCorreo" class="form-control" value="<?php echo $fila[4] ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >Region:</font></td>
                            <td>
                                <select name="cboRegion" id="cboRegion" class="form-control">
                                    <?php
                                    while ($row = mysqli_fetch_array($reg)) {
                                        echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                    <br>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <font face="Franklin Gothic Medium" size="5" >Ciudad:</font></td>
                        <td>
                            <select name="cboCiudad" id="cboCiudad"  class="form-control"></select>
                            <br>
                        </td>
                    </tr>
                    <tr>
                    <br>
                    <td><font face="Franklin Gothic Medium" size="5" >Vivienda:</font></td>
                    <td>
                        <select name="cboVivienda" id="cboVivienda"  class="form-control">
                            <?php
                            while ($row = mysqli_fetch_array($reg1)) {
                                echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
                            }
                            ?>
                        </select>
                        <br>
                    </td>
                    <tr>
                        <td>
                            <input class="btn btn-dark" type="submit" value="Modificar"/>
                            <input class="btn btn-light" type="reset" value="Restablecer" />
                        </td>                        
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        
    </body>
</html>
