

<html> 
<head> 
<title>Formulario de Registro</title> 
</head> 


<h1>"Bienvenido"</h1>

<h3>Registra los siguientes datos</h3>



<body > 
<form  method="post" action="insertar.php "> 

Autor:<br> 
<label> 
<input name="autor" type="text" id="autor"> 
</label> 


<p>Titulo:<br> 
<label> 
<input name="titulo" type="text" id="titulo"> 
</label> 


</p> 
<p>Contenido:<br> 
<label> 
<textarea name="comentarios" rows="10" cols="40"></textarea>
</label> 


</p> 
<input type="submit" name="Submit" value="Enviar Registro" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input TYPE="button" VALUE="Salir" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' ONCLICK="window.location.href='Login.php'"><br><br>

<input TYPE="button" VALUE="Mostrar Base de Datos" style='width:150px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' ONCLICK="window.location.href='Base.php'">
</p> 

</form> 
</body> 
</html> 