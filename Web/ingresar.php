<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
} else{
	$usuario=$_SESSION["usuario"];
}
?>
<!DOCTYPE html>
<html lang="es">
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
        <div align='center'> 
        <form method="POST" action="grabar_perro.php">
            <div class="form-group col-md-6">
                <thead>
                    <tr>
                        <br>
                        <br>
                        <h1>Formulario de ingreso de perros<br></h1>                        
                    </tr>
                </thead>
                <tbody>
                   
                <br>
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Nombre:</font></td>
                        <td>
                            <input placeholder="NOMBRE" class="form-control" type="text" name="txtNombre" value="" required />
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Raza:</font></td>
                        <td>
                            <input placeholder="RAZA" class="form-control" type="text" name="txtRaza" value="" required />
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Edad (años):</font></td>
                        <td>
                            <input class="form-control" type="integer" name="txtEdad" value="" placeholder="EDAD" required />
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><font face="Franklin Gothic Medium" size="5" >Tamaño (cm):</font></td>
                        <td>
                            <input placeholder="TAMAÑO (cm)" class="form-control" type="decimal" min="0" max="70" 
                                   name="txtTamano" value="" required />
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalGuardar">
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
                                    <button type="submit" class="btn btn-primary">Si</button>
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
