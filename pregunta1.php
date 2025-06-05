<META HTTP-EQUIV="REFRESH CONTENT=5"; URL=http://localhost/Ejemplo1AWS/Ejemplo1_Tabla.html">

<?php

$servidor= "localhost";
$basededatos="phpmyadmin";
$usuario= "phpmyadmin";
$password="123456";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

$Nombres= $_POST["Nombres"];
$Apellidos= $_POST["Apellidos"];
$Edad= $_POST["Edad"];
$Codigo= $_POST["Codigo"];
$Sexo= $_POST["Sexo"];
$DNI= $_POST["DNI"];

if($Nombres==NULL or $Apellidos==NULL or $Edad==NULL or $Codigo==NULL or $Sexo==NULL $DNI==NULL){}
else {
	$insertar= "INSERT INTO Tabla_Persona (Nombres, Apellidos, Edad, Codigo, Sexo, DNI) VALUES ('$Nombres','$Apellidos','$Edad','$Codigo','$Sexo','$DNI')";
	$query= mysqli_query($conexion,$insertar);
}

$consulta= "SELECT * FROM Tabla_Persona";
$resultado= mysqli_query($conexion, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");

echo "<Table width='20%' aling='center' cellpadding='6' cellspacing='0' bgcolor='skyblue' border='1'>";
	echo "<tr>";
		echo "<th>ID_Persona</th>";
		echo "<th>Nombres</th>";
		echo "<th>Apellidos</th>";
		echo "<th>Edad</th>";
		echo "<th>Codigo</th>";
		echo "<th>Sexo</th>";
		echo "<th>DNI</th>";
	echo "<tr>";
		
while ($columna= mysqli_fecth_array($resultado))
	{
		echo "<tr>";
		echo "<td align='center' bgcolor='white'>". $columna['ID_Persona']."</td>";
		echo "<td align='center' bgcolor='white'>". $columna['Nombres']."</td>";
		echo "<td align='center' bgcolor='white'>". $columna['Apellidos']."</td>";
		echo "<td align='center' bgcolor='white'>". $columna['Edad']."</td>";
		echo "<td align='center' bgcolor='white'>". $columna['Codigo']."</td>";
		echo "<td align='center' bgcolor='white'>". $columna['Sexo']."</td>";
		echo "<td align='center' bgcolor='white'>". $columna['DNI']."</td>";
		echo "<tr>";	
	}
echo "</table>";  //Fin de tabla
mysqli_close($conexion); //Cerrar conexion de base de datos.
?>


