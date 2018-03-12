<!DOCTYPE html>
<html>
<head>
	<title>Taller de Cuerda Frotada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/style3.css">



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
	
</head>


<body>
	<section class="contenedor">
		<header>
			<section id="Banner1"></section>
			<section id="Banner2">
				<section id="logo2"><a href="index.php"><img id="logo" src="img/horizontal.png"></a></section>
			</section>
			<section id="titulo">
				<br><section id="titulo2">Taller de Cuerda Frotada</section><br>
			</section>
		</header>
		<section id="inscrip">
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSdn906iYposw-w_I52nsV4c--YX39Rt4z8XrAWATwad2eQIHg/viewform" target="_blank"><section><b><p id="textoinsc">INSCRIPCION</p></b></section></a>
		</section>
		<section id="indic">
			<section id="indicacion">Seleccione el capitulo que desee</p></section>
		</section>
		<nav>
			<a href="paginas/cap1.php">
				<section id="BT1"><p><center>
				Capitulo 1: Fundamentos
				</center></p></section>
			</a>
			<!--<a href="paginas/cap2.php">
				<section id="BT2"><p><center>
				Capitulo 2: Claves y Figuras Musicales
				</center></p></section>
			</a>-->
			<!--<a href="paginas/cap3.php">
				<section id="BT3"><p><center>
				Capitulo 3: Compases y Métricas
				</center></p></section>
			</a>-->
			<!--<a href="paginas/cap4.php"><section id="BT1"><p><center>
			Capitulo 4: Fórmula de Compás
			</center></p></section></a>-->
			<!-- <a href="paginas/cap5.php"><section id="BT2"><p><center>
			Capitulo 5: Escala Diatónica
			</center></p></section></a>-->
			<!-- <a href="paginas/cap6.php"><section id="BT3"><p><center>
			Capitulo 6: Expresión Musical
			</center></p></section></a>-->
			<!-- <a href="paginas/cap7.php"><section id="BT1"><p><center>
			Capitulo 7: Cifrado Musical
			</center></p></section></a>-->
		</nav>
		
		<button class="accordion"><b>CONTACTANOS</b></button>
			<div class="panel">
			  <div class="container">
				  <form action="enviar.php" method="post">

				    <label for="fname" style="font-family:helvetica;">Nombre</label>
				    <input type="text" id="fname" name="nombre" placeholder="Escriba su primer nombre" required="a-zA-Z">

				    <label for="lname" style="font-family:helvetica;">Apellido</label>
				    <input type="text" id="lname" name="apellido" placeholder="Escriba su primer apellido" required="a-zA-Z">

				    <label for="lname" style="font-family:helvetica;">E-mail</label>
				    <input type="text" id="lname" name="email" placeholder="Escriba su correo electrónico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="!A-Z">

				    <label for="subject" style="font-family:helvetica;">Mensaje</label>
				    <textarea id="subject" name="mensaje" placeholder="Escriba aqui" style="height:200px" required=""></textarea>

				    <input type="submit" id="submit" value="Enviar" onclick="validation()">

				  </form>
				</div>
			</div>


	</section>
	<footer>
			<section id="Banner3"><section id="derechos">Copyright © Universidad Gerardo Barrios - 2018</section></section>		
	</footer>

	<!--<script type="text/javascript">

		function validation(){
			var submit = 'submit';

			if (submit==true) {
				swal({
				  title: "Su mensaje se ha enviado",
				  timer: 2000,
				  showConfirmButton: false
				});
			}else{
				swal({
				  title: "No se ha enviado",
				  timer: 2000,
				  showConfirmButton: false
				});
			}
		}
		
	</script>-->

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].onclick = function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight){
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    } 
		  }
		}
	</script>
</body>
</html>