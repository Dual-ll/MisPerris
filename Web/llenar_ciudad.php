<?php
$id_region=$_POST["id_region"];
$cone= mysqli_connect("localhost", "root", "", "misperris");
$reg= mysqli_query($cone, "select * from ciudad where idregion=$id_region");
?>

<option value="0">Seleccione</option>
<?php
while ($row = mysqli_fetch_array($reg)){
    echo '<option value="'.$row[0].'">'.utf8_encode($row[1]).'</option>';
}
?>
