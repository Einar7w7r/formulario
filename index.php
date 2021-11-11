<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/validaciones.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>Formulario2</title>
</head>
<body>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="display-1">Formulario</h1>
			</div>
		</div>
	</div>
	<div class="container">
	<form method="post">
		<div class="row">
			<div class="col">
				<label for="exampleFormControlSelect1">Nombre(s)</label>
				<input type="text" class="form-control" id="nombre" name="nombre">
			</div>
			<div class="col">
				<label for="exampleFormControlSelect1">Apellidos</label>
				<input type="text" class="form-control" id="apellido" name="apellidos">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Dirección de correo</label>
			<input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" name="email">
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">1.Según su experiencia general con la organización, en una escala de 0 a 10, ¿qué posibilidades hay de que recomiende la organización a sus familiares y amigos?</label>
					<select class="form-control" id="P1" name="p1">
						<option value="">[Seleccione]</option>
						<option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">2.Mientras estoy en el S.S y/o P.P, estoy 100% enfocado, en mis responsabilidades y deberes</label>
					<select class="form-control" id="P2" name="p2">
						<option value="">[Seleccione]</option>
						<option value="Muy_acuerdo">Muy de acuerdo</option>
                        <option value="De_acuerdo">De acuerdo</option>
                        <option value="Neutral">Neutral</option>
                        <option value="En_desacuerdo">En desacuerdo</option>
                        <option value="Muy_desacuerdo">Muy en desacuerdo</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">3.Doy lo mejor en cada tarea, todos los días</label>
					<select class="form-control" id="P3" name="p3">
						<option value="">[Seleccione]</option>
						<option value="Muy_acuerdo">Muy de acuerdo</option>
                        <option value="De_acuerdo">De acuerdo</option>
                        <option value="Neutral">Neutral</option>
                        <option value="En_desacuerdo">En desacuerdo</option>
                        <option value="Muy_desacuerdo">Muy en desacuerdo</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">4.¿Qué tan satisfecho está con la organización?</label>
					<select class="form-control" id="P4" name="p4">
						<option value="">[Seleccione]</option>
						<option value="Muy_insatisfecho">Muy insatisfecho</option>
                        <option value="No_satisfecho">No satisfecho</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Satisfecho">Satisfecho</option>
                        <option value="Muy_satisfecho">Muy satisfecho</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">5.Es fácil colaborar con otros compañeros para la elaboración de las actividades.</label>
					<select class="form-control" id="P5" name="p5">
						<option value="">[Seleccione]</option>
						<option value="Muy_acuerdo">Muy de acuerdo</option>
                        <option value="De_acuerdo">De acuerdo</option>
                        <option value="Neutral">Neutral</option>
                        <option value="En_desacuerdo">En desacuerdo</option>
                        <option value="Muy_desacuerdo">Muy en desacuerdo</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">6.Puedo comunicar abiertamente nuevas ideas al equipo directivo</label>
					<select class="form-control" id="P6" name="p6">
						<option value="">[Seleccione]</option>
						<option value="Muy_acuerdo">Muy de acuerdo</option>
                        <option value="De_acuerdo">De acuerdo</option>
                        <option value="Neutral">Neutral</option>
                        <option value="En_desacuerdo">En desacuerdo</option>
                        <option value="Muy_desacuerdo">Muy en desacuerdo</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">7.Puedo expresar abiertamente mis inquietudes directamente al equipo</label>
					<select class="form-control" id="P7" name="p7">
						<option value="">[Seleccione]</option>
						<option value="Muy_acuerdo">Muy de acuerdo</option>
                        <option value="De_acuerdo">De acuerdo</option>
                        <option value="Neutral">Neutral</option>
                        <option value="En_desacuerdo">En desacuerdo</option>
                        <option value="Muy_desacuerdo">Muy en desacuerdo</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">8.Puedo mantener un buen equilibrio entre mi vida escolar y el S.S y/o P.P. (Justifica tu respuesta)</label>
					<textarea class="form-control" id="p8" rows="2" name="p8"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">9.En una escala del 1 al 5, donde 5 es el valor más alto, ¿cómo calificarías el desempeño que tienes en tu S.S y/o P.P?</label>
					<select class="form-control" id="P9" name="p9">
						<option value="">[Seleccione]</option>
						<option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlSelect1">10.¿Se considera responsable en las actividades que le son asignadas?</label>
					<select class="form-control" id="P10" name="p10">
						<option value="">[Seleccione]</option>
						<option value="Siempre">Siempre</option>
                        <option value="Casi_siempre">Casi siempre</option>
                        <option value="A_veces">A veces</option>
                        <option value="Casi_nunca">Casi nunca</option>
                        <option value="Nunca">Nunca</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">11.¿Qué cambiarias en el sistema de S.S y/ o P.P?</label>
					<textarea class="form-control" id="p11" rows="2" name="p11"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">12.¿Qué mejorarías en tus S.S y/o P.P?</label>
					<textarea class="form-control" id="p12" rows="2" name="p12"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">13.¿Tu responsable te da retroalimentación de manera clara?</label>
					<textarea class="form-control" id="p13" rows="2" name="p13"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">14.¿Qué probabilidades hay de que le recomiendes esta organización para que otros compañeros realicen S.S y/o P.P?</label>
					<textarea class="form-control" id="p14" rows="2" name="p14"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">15.¿Cómo definirías que es tu desarrollo profesional dentro de tu S.S y/o P.P?</label>
					<textarea class="form-control" id="p15" rows="2" name="p15"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">16.¿Consideras que las actividades que se te asignan están de acuerdo a tu perfil y/o carrera?</label>
					<textarea class="form-control" id="p16" rows="2" name="p16"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">17.¿Me siento bien realizando mi S.S y/o P.P?</label>
					<textarea class="form-control" id="p17" rows="2" name="p17"></textarea>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-6 btn">
				<input type="submit" id="enviar" value="Enviar" class="btn btn-success" onclick="validarformulario()" name="register">
			</div>
			<div class="col-6 btn">
				<input type="button" id="cancelar" value="Cancelar" class="btn btn-danger">
			</div>
	</div>
	</form>
	<?php
		include("guardar.php");
	?>
	</div>
</section>
<br>
<br>
<br>
<br>
<br>
<footer>
	<div class="waves">
		<div class="wave" id="wave1"></div>
		<div class="wave" id="wave2"></div>
		<div class="wave" id="wave3"></div>		
		<div class="wave" id="wave4"></div>
	</div>
		<ul class="social_icon">
			<li><a href="https://www.facebook.com/Fundación-Arte-Down-México-134695493253750/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="https://twitter.com/artedownmx?lang=es" target="_blank"><i class="fab fa-twitter"></i></a></li>
			<li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
		</ul>
		<ul class="menu">
			<li><a href="#" target="_blank">Página Web Oficial</a></li>
		</ul>
	<p>©2021 Einar Corona | Todos los derechos reservados</p>
</footer>
</body>
</html>