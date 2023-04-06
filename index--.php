<!DOCTYPE html>
<html lang="en">

<head>

	<head>
		<title>Formulario de contacto</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	</head>

<body>
	<div class="container">
		<h1>Formulario de contacto</h1>
		<div class="overlay">
			<div class="container-fluid content">
				<div class="row content">
					<div class="col-xs-12 col-sm-4 col-lg-4 col-xl-3 col-left barraReg" style="position: inherit;">
						<div class="leftline wow fadeInLeft"
							style="background-image: url(img/back1.jpg); background-size: contain; background-position: top center; box-shadow: rgb(0, 0, 0) 5px 5px 20px; background-repeat: no-repeat;background-color: white;"
							data-rjs="2">
							<div class="leftlineinside padTop">
								<div class="row">
									<div class="col-md-12 col-sm-6">
										<h2 class="blue">Regístrate</h2>
										<form name="sentMessage" id="contactForm" action="gracias.php" method="post"
											style="margin-bottom: 0px; padding-bottom: 0px;">
											<div class="control-group">
												<div class="form-group floating-label-form-group controls">
													<div class="col-xs-6 no-pad" style="padding-right: 4px;">
														<label for="name" class="sr-only control-label">*Nombre</label>
														<input type="text" class="form-control input-lg"
															placeholder="*Nombre" id="name" required name="name"
															maxlength="20">
														<span class="help-block text-danger"></span>
													</div>

													<div class="col-xs-6 no-pad" style="padding-left: 4px;">
														<label for="lname"
															class="sr-only control-label">*Apellidos</label>
														<input type="text" class="form-control input-lg"
															placeholder="*Apellidos" id="lname" required name="lname"
															maxlength="20">
														<span class="help-block text-danger"></span>
													</div>

												</div>

											</div>
											<div class="control-group">
												<div class="form-group floating-label-form-group controls">
													<label for="email" class="sr-only control-label">*Correo
														electrónico</label>
													<input type="email" class="form-control input-lg"
														placeholder="*Correo electrónico" id="email" required=""
														data-validation-required-message="Por favor ingrese su email"
														name="email">
													<span class="help-block text-danger"></span>
												</div>
											</div>
											<div class="control-group">
												<div class="form-group floating-label-form-group controls">

													<div class="col-xs-6 no-pad" style="padding-right: 4px;">
														<label for="phone" class="sr-only control-label">*Teléfono
															móvil</label>
														<input type="text" class="form-control input-lg"
															placeholder="*Teléfono móvil" id="phone" required
															name="phone" maxlength="10" minlength="10">
														<span class="help-block text-danger"></span>
													</div>

													<div class="col-xs-6 no-pad" style="padding-left: 4px;">
														<label for="zip" class="sr-only control-label">*Código
															postal</label>
														<input type="number" class="form-control input-lg"
															placeholder="*Código postal" id="zip" required name="zip"
															min="10000" max="99999">
														<span class="help-block text-danger"></span>
													</div>

													<div class="col-xs-12 no-pad"
														style="padding-left: 15px; margin-bottom: 10px;">
														<h2 class="blue"
															style="font-size: 12px; margin-bottom: 0px; float: left; margin-top: 10px; margin-right: 20px;">
															Eres:</h2>
														<div class="some-class">
															<input type="radio" class="radio" name="gender"
																value="hombre" id="gender2" checked
																style="width: 2em; height: 2em;" />
															<label for="gender2"
																style="font-size: 12px; margin-bottom: 0px; margin-top: 6px; margin-left:10px;">Hombre</label>

															<input type="radio" class="radio" name="gender"
																value="mujer" id="gender1"
																style="width: 2em; height: 2em;" />
															<label for="gender1"
																style="font-size: 12px; margin-bottom: 0px; margin-top: 6px; margin-left:10px; margin-right: 20px;">Mujer
															</label>
														</div>
													</div>
												</div>
											</div>


											<div class="control-group">

												<div class="form-group floating-label-form-group controls">
													<h2 class="blue" style="font-size: 12px; margin-bottom: 0px;">Fecha
														de nacimiento</h2>
													<div class="col-xs-4 no-pad" style="padding-right: 4px;">
														<label for="dia" class="sr-only control-label">Día</label>
														<select class="form-control input-lg" name="dia" id="dia"
															style="color: #999">
															<option value='0'>Día</option>
															<?php
															for ($i = 1; $i <= 31; $i++) {
																echo "<option value='$i'>$i</option>";
															}
															?>
														</select>
														<span class="help-block text-danger"></span>
													</div>
													<div class="col-xs-4 no-pad"
														style="padding-left: 4px; padding-right: 4px;">
														<label for="mes" class="sr-only control-label">Mes</label>
														<select class="form-control input-lg" name="mes" id="mes"
															style="color: #999">
															<option value='0'>Mes</option>
															<option value='1'>Ene</option>
															<option value='2'>Feb</option>
															<option value='3'>Mar</option>
															<option value='4'>Abr</option>
															<option value='5'>May</option>
															<option value='6'>Jun</option>
															<option value='7'>Jul</option>
															<option value='8'>Ago</option>
															<option value='9'>Sep</option>
															<option value='10'>Oct</option>
															<option value='11'>Nov</option>
															<option value='12'>Dic</option>
														</select>
														<span class="help-block text-danger"></span>
													</div>


													<div class="col-xs-4 no-pad" style="padding-left: 4px;">
														<label for="year" class="sr-only control-label">Año</label>
														<select class="form-control input-lg" name="year" id="year"
															style="color: #999">
															<option value='0'>Año</option>
															<?php
															for ($i = 2005; $i > 1950; $i--) {
																echo "<option value='$i'>$i</option>";
															}
															?>
														</select>
														<span class="help-block text-danger"></span>

													</div>

												</div>
												<div class="control-group">
													<div class="form-group floating-label-form-group controls">
														<h2 class="blue" style="font-size: 12px; margin-bottom: 0px;">
															Fecha y hora deseada de tu visita:</h2>
														<div class="col-xs-12 no-pad">
															<input name="datetimepickerReservacion" type="text"
																class="form-control input-lg" id="datetimepicker"
																required />
														</div>
													</div>

													<div class="col-xs-12 no-pad" style="margin-top: 15px;">
														<div class="g-recaptcha"
															data-sitekey="6Ld53W4UAAAAANWKE3U9kZYQFVbhWlA9G5ZVw0qf">
														</div>
													</div>

												</div>







												<div class="control-group">
													<div class="input-group-btn">
														<button type="submit" class="btn btn-dark btn-lg"
															style="margin-top: 15px;">Enviar</button>
													</div>
												</div>
												<div id="success"></div>
										</form>
										<br>
										<p class="txtMobile" style="color: #484848;">
											<span style="font-size: 10px;">* Campo requerido</span><br>
											<i class="fa fa-envelope fa-fw"></i> reservaciones@realdelbosque.com<br>
											<i class="fa fa-map-marker fa-fw"></i>Carretera Tula – San Marcos Km
											2<br>Tula de Allende, Hidalgo. 42800. México.
										</p>

										<a href="https://www.facebook.com/hotelrealdelbosque" target="_blank"
											class="blue"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
										<a href="https://realdelbosque.com/" target="_blank" class="blue"><i
												class="fa fa-globe fa-fw fa-2x"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-lg-8 col-xl-8 promo">
					<div class="row intropromo">
						<div class="col-md-12 text-left">
							<div class="row">
								<div class="col-md-12">
									<p style="font-size: 35px; line-height: 1.2; text-shadow: 1px 1px 2px #000;">Los
										domingos tienes una cita en la terraza de #RealDelBosque. <br>Ven y disfruta de
										nuestro delicioso Brunch por <BR><strong>$ 370.00 MXN</strong></p>
									<p class="text-justify"
										style="font-size: 12px; line-height: 1.2; text-shadow: 2px 2px 3px #000; margin-top: 50%;">
										*Vigencia <b style="font-size: 17px;">Junio 2021, todos los domingos del mes de
											9 a 13 horas.</b>. <br>Niños menores de 11 años tienen el 50% de descuento.
										No incluye bebidas. Abierto a huéspedes y público en general. <br>Recuerda que
										cumplimos con todas las medidas de sanidad y aforo limitado, por lo que te
										recomendamos programes tu visita con nosotros. Aplican restricciones.<br></p>
									<ul style="text-align: left" class="list-inline lead">
										<li><a class="btn wow fadeInLeft" target="_blank"
												href="https://realdelbosque.com/">Política de Privacidad</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="response"></div>
	</div>
</body>

</html>