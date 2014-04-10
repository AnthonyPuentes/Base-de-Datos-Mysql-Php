<html>

<head>
<title>Base de Datos</title>
</head>

<body>
<?php
$conexion= mysql_connect('localhost','root','');
mysql_select_db("login",$conexion) or die ("No se pudo conectar a la base de datos");

?>


<h1>Base de datos</h1>

<table border="1">

<tr>
<td colspan="4"> Practica 8 **** MYSQL-PHP ****</td>
</tr>

<tr>
<td >ID </td>
<td >AUTOR </td>
<td >TITULO </td>
<td >COMENTARIOS </td>
</tr>

<?php

$result = mysql_query("SELECT * FROM usuarios");
while($row =mysql_fetch_array($result)){ ?>
<tr>
<td ><?php echo $row["id"]; ?> </td>
<td ><?php echo $row["autor"]; ?> </td>
<td ><?php echo $row["titulo"]; ?></td>
<td ><?php echo $row["comentarios"]; ?> </td>
</tr>

<?php

}
?>

</table><br>
<input TYPE="button" VALUE="Salir" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' ONCLICK="window.location.href='Login.php'"><br><br>




</body>


</html>