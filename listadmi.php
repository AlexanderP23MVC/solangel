
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administradores</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" href="Imagenes/logo2.png" type="image/png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
    
	<header>
		<?php 
        
        // Datos de conexión
        $servername = "localhost"; // servidor a conectar
        $username = "root"; // El usuario por defecto para MySQL es 'root'
        $dbpassword = ""; // La contraseña para mysql
        $dbname = "safedata"; // // nombre de BD
        
        // Crear conexión
        $conn = new mysqli($servername, $username, $dbpassword, $dbname);
        
        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        } else {
            echo "Conexión exitosa a la base de datos 'safedata'.<br>"; // Si tiene éxito, muestra un mensaje de confirmación.
        }
		?>
	</header>
    
	<h2 align="center"><strong>Lista de productos</strong></h2>
	<table border="1" align="center">
		<thead>
			<tr align="center">
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Usuario</th>
				<th>Rol</th>
			</tr>
		</thead>
		<tbody>
			<form>
			<?php 

$sql = "SELECT nombre, apellido, usuario, rol FROM username WHERE rol='administrador'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{ ?>
					<tr align="center">
						<td><?php echo $row['nombre'] ?></td>
						<td><?php echo $row['apellido'] ?></td>
						<td><?php echo $row['usuario'] ?></td>
						<td><?php echo $row['rol'] ?></td>
						
						</td>
					</tr>
				<?php 
			       } 
				}
?>
				
			</form>
		</tbody>
	</table>
</body>
</html>