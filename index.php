<?php


	error_reporting("0");
 	$resultado = "Escribe una ciudad para empezar";

	if( isset($_POST['ciudad']) ){
		$ciudad = $_POST['ciudad'];
		//$countDay = 6; // количество дней. Максимум 14 дней
		$apiKey = "384bd5a0e68be891d0bc3f73c36c6da1"; // Ваш APPID

		$json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=$ciudad&appid=$apiKey&units=metric");


		$xml = json_decode($json);

		$city = $xml->city->name;

	// day 1
		$t_1 = $xml->list[0]->main->temp;
		$w_1 = $xml->list[0]->wind->speed;
		$h_1 = $xml->list[0]->main->humidity;

		$date_1 = $xml->list[0]->dt_txt;
		$icon_1 = $xml->list[0]->weather[0]->icon;
		$descr_1 = $xml->list[0]->weather[0]->description;

		$temp_1 = "La temperatura es $t_1 ºC";
		$viento_1 = "Viento - $w_1 km/h";
		$tiempo_1 = "El tiempo es de '$descr_1'";


	// day 2
		$t_2 = $xml->list[2]->main->temp;
		$w_2 = $xml->list[2]->wind->speed;
		$h_2 = $xml->list[2]->main->humidity;

		$date_2 = $xml->list[2]->dt_txt;
		$icon_2 = $xml->list[2]->weather[0]->icon;
		$descr_2 = $xml->list[2]->weather[0]->description;

		$temp_2 = "La temperatura es $t_2 ºC";
		$viento_2 = "Viento - $w_2 km/h";
		$tiempo_2 = "El tiempo es de '$descr_2'";

	
	// day 3
		$t_3 = $xml->list[4]->main->temp;
		$w_3 = $xml->list[4]->wind->speed;
		$h_3 = $xml->list[4]->main->humidity;

		$date_3 = $xml->list[4]->dt_txt;
		$icon_3 = $xml->list[4]->weather[0]->icon;
		$descr_3 = $xml->list[4]->weather[0]->description;

		$temp_3 = "La temperatura es $t_3 ºC";
		$viento_3 = "Viento - $w_3 km/h";
		$tiempo_3 = "El tiempo es de '$descr_3'";


	// day 4
		$t_4 = $xml->list[6]->main->temp;
		$w_4 = $xml->list[6]->wind->speed;
		$h_4 = $xml->list[6]->main->humidity;

		$date_4 = $xml->list[6]->dt_txt;
		$icon_4 = $xml->list[6]->weather[0]->icon;
		$descr_4 = $xml->list[6]->weather[0]->description;

		$temp_4 = "La temperatura es $t_4 ºC";
		$viento_4 = "Viento - $w_4 km/h";
		$tiempo_4 = "El tiempo es de '$descr_4'";

	// day 5
		$t_5 = $xml->list[8]->main->temp;
		$w_5 = $xml->list[8]->wind->speed;
		$h_5 = $xml->list[8]->main->humidity;

		$date_5 = $xml->list[8]->dt_txt;
		$icon_5 = $xml->list[8]->weather[0]->icon;
		$descr_5 = $xml->list[8]->weather[0]->description;

		$temp_5 = "La temperatura es $t_5 ºC";
		$viento_5 = "Viento - $w_5 km/h";
		$tiempo_5 = "El tiempo es de '$descr_5'";

	// day 6
		$t_6 = $xml->list[10]->main->temp;
		$w_6 = $xml->list[10]->wind->speed;
		$h_6 = $xml->list[10]->main->humidity;

		$date_6 = $xml->list[10]->dt_txt;
		$icon_6 = $xml->list[10]->weather[0]->icon;
		$descr_6 = $xml->list[10]->weather[0]->description;

		$temp_6 = "La temperatura es $t_6 ºC";
		$viento_6 = "Viento - $w_6 km/h";
		$tiempo_6 = "El tiempo es de '$descr_6'";

	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" href="BS4/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>


	<header id="header" class="text-center">
		<div id="form" class="col display-4 my-auto">
			<form action="" method="POST">
      			<input type="text" class="form-control" placeholder="Ciudad" name="ciudad">
      			<button type="submit" class="btn btn-info ">Buscar</button>
   	 		</form>
   	 	</div>
	</header>

<main class="container" id="user">
	

<!-- Start Service Area -->
	<section class="service-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2>Tiempo en  <span><?= $city ?></span></h2>
						<h2></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="d-flex align-items-center mb-3">
							<h4 class="ml-3"><?= $date_1 ?></h4>
						</div>
							<p><?= $temp_1 ?></p>
   	 						<p><?= $tiempo_1 ?></p>
   	 						<p><?= $viento_1 ?></p>
   	 						<img src="http://openweathermap.org/img/wn/<?= $icon_1 ?>@2x.png" onerror="this.src = 'img/av_3.jpg'">
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="d-flex align-items-center mb-3">
							<h4 class="ml-3"><?= $date_2 ?></h4>
						</div>
							<p><?= $temp_2 ?></p>
   	 						<p><?= $tiempo_2 ?></p>
   	 						<p><?= $viento_2 ?></p>
   	 						<img src="http://openweathermap.org/img/wn/<?= $icon_2 ?>@2x.png" onerror="this.src = 'img/av_3.jpg'">
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="d-flex align-items-center mb-3">
							<h4 class="ml-3"><?= $date_3 ?></h4>
						</div>
							<p><?= $temp_3 ?></p>
   	 						<p><?= $tiempo_3 ?></p>
   	 						<p><?= $viento_3 ?></p>
   	 						<img src="http://openweathermap.org/img/wn/<?= $icon_3 ?>@2x.png" onerror="this.src = 'img/av_3.jpg'">
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="d-flex align-items-center mb-3">
							<h4 class="ml-3"><?= $date_4 ?></h4>
						</div>
							<p><?= $temp_4 ?></p>
   	 						<p><?= $tiempo_4 ?></p>
   	 						<p><?= $viento_4 ?></p>
   	 						<img src="http://openweathermap.org/img/wn/<?= $icon_4 ?>@2x.png" onerror="this.src = 'img/av_3.jpg'">
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="d-flex align-items-center mb-3">
							<h4 class="ml-3"><?= $date_5 ?></h4>
						</div>
							<p><?= $temp_5 ?></p>
   	 						<p><?= $tiempo_5 ?></p>
   	 						<p><?= $viento_5 ?></p>
   	 						<img src="http://openweathermap.org/img/wn/<?= $icon_5 ?>@2x.png" onerror="this.src = 'img/av_3.jpg'">
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="d-flex align-items-center mb-3">
							<h4 class="ml-3"><?= $date_6 ?></h4>
						</div>
							<p><?= $temp_6 ?></p>
   	 						<p><?= $tiempo_6 ?></p>
   	 						<p><?= $viento_6 ?></p>
   	 						<img src="http://openweathermap.org/img/wn/<?= $icon_6 ?>@2x.png" onerror="this.src = 'img/av_3.jpg'">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service Area -->

</main>	

<!--Inicio Footer -->
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2019-2020 Rentavik<span>k</span></p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
<!--Final de Footer-->

	<script src="BS4/bootstrap.min.js"></script>
	<script src="funciones.js"></script>

</body>
</html>