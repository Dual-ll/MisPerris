<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var id_region=$("#cboRegion").val();
                    alert('cambio'+id_region);
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
        $cone= mysqli_connect("localhost", "root", "", "automotora");
        $reg= mysqli_query($cone, "select * from regiones");
        ?>        
        <form action="subir_imagen.php" method="post">
            <table>
                <tr>
                    <td>Region:</td>
                    <td>
                        <select name="cboRegion" id="cboRegion">
                            <?php
                            while ($row = mysqli_fetch_array($reg)){
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ciudades:</td>
                    <td>
                        <select name="cboCiudad" id="cboCiudad"></select>
                    </td>
                </tr>
                <tr>
                    <td>ID:</td>
                    <td>
                        <input type="number" name="txtId"/>
                    </td>
                </tr>
                <tr>
                    <td>Titulo</td>
                    <td>
                        <input type="text" name="txtTitulo"
                    </td>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td>
                        <input type="text" name="txtDesc"
                    </td>
                </tr>
                <tr>
                    <td>Seleccione Imagen:</td>
                    <td>
                        <input type="file" accept=".jpg" name="imagen" value="" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> 
                        <input type="submit" value="Enviar"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
