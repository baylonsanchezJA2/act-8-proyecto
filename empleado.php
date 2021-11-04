<?php include("header.php");?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleados</h1>
			</div>

			<div class="articulo">
				<article>
<form action="emplead.php" method="GET" name="farm">
Nombre:    <input type="text" name= "Nombre"><br>

Apellido:  <input type="text" name= "Apellido"><br>

numero:<input type="text" name= "Numero"><br>

Correo:    <input type="text" name= "Correo"><br>

Enviar:    <input type="submit" value= "Enviar">

<p>Este es el registro para los empleados, solo ellos lo pueden usar</p><br>

</form>
				</article>
			</div>

	<?php include("aside.php");?>
		</div>
	</section>
	<?php include("footer.php");?>
</body>
</html>