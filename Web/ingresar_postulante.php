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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <?php
        include_once './menu.php';
        ?>
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
        
        <?php
        $cone= mysqli_connect("localhost", "root", "", "misperris");
        $reg= mysqli_query($cone, "select * from region");
        $reg1= mysqli_query($cone, "select * from tipo_vivienda");
        ?>       
        <div align='center'> 
            <form method="POST" action="grabar_postulante.php">
            <div class="form-group col-md-6">
                <thead>
                    <tr>
                <br>
                <br>
                <br>
                        <h1>Formulario de ingreso de postulantes</h1>                        
                    </tr>
                </thead>
                <table>
                    <tr>
                        <th><font face="Franklin Gothic Medium" size="5" >RUT:</font></th>
                        <th><input placeholder="Ingrese RUT" minlength="7" maxlength="9" class="form-control" type="text" name="txtRut" value="" required style="float: right"/></th>
                    </tr>        
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Nombre completo:</font></td>
                        <td><input placeholder="Ingrese nombre completo" class="form-control" type="text" name="txtNombre" value="" required/></td>
                    </tr>
                    <br>
                    <tr>
                        <tr>
                            <td><font face="Franklin Gothic Medium" size="5" >Fecha nacimiento:</font></td>
                            <td><input max="2000-09-14" class="form-control" type="date" name="txtFecha" value="" placeholder="AAAA-MM-DD" required/></td>
                        </tr>
                    </tr>
                    </table>
                    <br>
                    <tr>
                        <td></td>
                        <td>
                            
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Telefono:</font></td>
                        <td>
                            <input placeholder="Ingrese teléfono" minlength="7" maxlength="9" class="form-control" type="integer"
                                   name="txtFono" value="" required/>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Correo:</font></td>
                        <td>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" name="txtCorreo" required>
                        </td>
                    </tr>
                    <br>
                    <tr>
                    <td><font face="Franklin Gothic Medium" size="5" >Region:</font></td>
                    <td>
                        <select name="cboRegion" id="cboRegion" class="form-control" required>
                            <?php
                            while ($row = mysqli_fetch_array($reg)){
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
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
                            <select name="cboCiudad" id="cboCiudad" class="form-control" ></select>
                            <br>
                        </td>
                    </tr>
                    <tr>
                    <br>
                        <td><font face="Franklin Gothic Medium" size="5" >Vivienda:</font></td>
                        <td>
                            <select name="cboVivienda" id="cboVivienda" class="form-control" >
                                <?php
                                while ($row = mysqli_fetch_array($reg1)){
                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                }
                                ?>
                            </select>
                            <br>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalGuardar" >
                                Enviar
                              </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalGuardar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿ Estas seguro de guardar ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary" >Si</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <input class="btn btn-light" type="reset" value="Limpiar" />
                            
                        </td>                        
                    </tr>
                </tbody>
            </div>
        </form>
        </div>
    </body>
</html>
