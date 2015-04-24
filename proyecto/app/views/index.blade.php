<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SDELY Otoño/Invierno</title>
		<link rel="canonical" href="{{url()}}/" />
		<meta property="fb:app_id" content="632947310173682" />
		<meta property="fb:admins" content="1332955457" />
		<meta property="og:title" content="SDELY Otoño/Invierno" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="{{url()}}/" />
		<meta property="og:image" content="{{url()}}/img/logo.png" />
		<meta property="og:site_name" content="SDELY Otoño/Invierno" />
		<meta property="og:description" content="SDELY Las mejores marcas a tus pies" />
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor:"#000",
					backgroundColor:"#ebe8e8",
					percentage:true,
					barHeight:1,
					minimumTime:200,
					fadeOutTime:1000
				});
			});
		</script>
		<script>
			var urlBase = '{{url()}}';
		</script>
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/funciones.js"></script>
	</head>
	<body>
		<section class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<img src="{{url()}}/img/logo.png" alt="" class="img-responsive center-block">
				</div>
			</div>
		</section>
		<br><br>
		<section class="container">
			<form action="{{url()}}/registro" method="post">
				<h1 class="titulo">INFORMACIÓN PERSONAL</h1>
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group">
							<input class="form-control" type="text" name="nombres" id="nombres" maxlength="50" placeholder="NOMBRES" required>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="form-group">
							<input class="form-control" type="text" name="apellidos" id="apellidos" maxlength="50" placeholder="APELLIDOS" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<input class="form-control" type="tel" name="dni" id="dni" maxlength="8" placeholder="DNI" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input class="form-control" type="tel" name="celular" id="celular" maxlength="20" placeholder="CELULAR" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input class="form-control" type="tel" name="telefono" id="telefono" maxlength="20" placeholder="TELÉFONO">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<div class="form-group">
							<input class="form-control" type="email" name="correo" id="correo" maxlength="100" placeholder="CORREO ELECTRÓNICO" required>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<select class="form-control" name="informacion" id="informacion" required>
								<option value="">
									INFORMACIÓN PARA
								</option>
								<option value="PROMOTORA">
									PROMOTORA
								</option>
								<option value="CENTRO DE DISTRIBUCION">
									CENTRO DE DISTRIBUCIÓN
								</option>
							</select>
						</div>
					</div>
				</div>
				<h1 class="titulo">DIRECCIÓN</h1>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<input type="hidden" name="dpto" id="dpto">
							<select class="form-control" name="departamento" id="departamento">
								<option value="">DEPARTAMENTO</option>
								@foreach ($departamentos as $departamento)
								<option value="{{$departamento['id']}}">{{$departamento['departamento']}}</option>
								@endforeach	
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="hidden" name="prov" id="prov">
							<select class="form-control" name="provincia" id="provincia">
								<option value="">PROVINCIA</option>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="hidden" name="dist" id="dist">
							<select class="form-control" name="distrito" id="distrito">
								<option value="">DISTRITO</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input class="form-control" type="text" name="direccion" id="direccion" maxlength="100" placeholder="DIRECCIÓN">
					</div>
				</div>
				<h1 class="titulo">INFORMACIÓN ADICIONAL</h1>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="como">¿CÓMO TE ENTERASTE DE NOSOTROS?</label>
							<select class="form-control" name="como" id="como" required>
								<option value="">
									SELECCIONA
								</option>
								<option value="PROMOTORA">
									PROMOTORA
								</option>
								<option value="VOLANTE">
									VOLANTE
								</option>
								<option value="FACEBOOK">
									FACEBOOK
								</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="horario">¿EN QUÉ HORARIO QUISIERA SER CONTACTADO?</label>
							<select class="form-control" name="horario" id="horario" required>
								<option value="">
									SELECCIONA
								</option>
								<option value="DIA">
									DÍA
								</option>
								<option value="TARDE">
									TARDE
								</option>
								<option value="NOCHE">
									NOCHE
								</option>
							</select>
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<input type="image" src="{{url()}}/img/boton.png" alt="" class="img-responsive center-block">
					</div>
				</div>
			</form>
		</section>
		<br><br><br><br><br><br>
		<section class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<img src="{{url()}}/img/pie.png" alt="" class="img-responsive center-block">
				</div>
			</div>
		</section>
	</body>
</html>