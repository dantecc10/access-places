<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<!--Ya importé Bootstrap, ahora, crearé el grid para los componentes.
            Esto no es más que la forma en que quiero que esto se vea y que -de preferencia- sea responsivo-->

		<div class="container pt-5">
			<div class="row">
				<!-- He añadido 2 columnas (div.col); estas tendrán un ancho de 12, es decir, completo, lo que las obligará a apilarse en vez de mostrarse
                de forma horizontal, cuando es móvil.
            
                Añadiendo otras dimensiones haré que de una vez se adapten a las dimensiones de la computadora.-->
				<div class="col col-12 col-md-8">
					<div class="row d-flex align-middle">
						<!-- Aquí irá el mapa: me funcionó bien el zoom a 15 y las coordenadas de la base de datos hay que arreglarlas 
                            porque están muy grandes -->
						<iframe
							class="my-auto"
							src="https://maps.google.com/maps?q=19.8523,-98.0343&amp;z=15&amp;output=embed"
						></iframe>
					</div>
				</div>
				<div class="col col-12 col-md-4">
					<div class="row">
						<!-- Aquí irá el nombre de la ubicación -->
						<h1 class="text-center">CECyTE Plantel Chignahuapan</h1>
					</div>
					<div class="row d-flex justify-content-center">
						<!-- Aquí irán las coordenadas escritas y visibles -->
						<span class="text-center">Ubicado en: 19.8523, -98.0343</span>
					</div>
					<div class="row">
						<!-- Aquí irá la descripción si es que la llenamos -->
						<p class="text-justify">
							Rampa de acceso inclusivo localizada en la entrada del Colegio de
							Estudios Científicos y Tecnológicos del Estado de Puebla.
						</p>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Imagen 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Imagen 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active"> <!--Aquí hay un elemento-->
                            <img src="https://www.elsoldepuebla.com.mx/local/estado/xe2hzc-breve-b-cecyte-chignahuapan.jpg/ALTERNATES/LANDSCAPE_960/BREVE%20B%20CECYTE%20CHIGNAHUAPAN.jpg" class="d-block w-100" alt="Imagen de referencia">
                          </div>
                          <div class="carousel-item">  <!--Aquí hay un elemento-->
                            <img src="https://3.bp.blogspot.com/_S-B3YMuv3-I/TH5iWtToCiI/AAAAAAAAANo/qAxRNsrk9mU/w1200-h630-p-k-no-nu/CECYTE.jpg" class="d-block w-100" alt="Imagen de referencia">
                          </div>
                          <div class="carousel-item">  <!--Aquí hay un elemento-->
                            <img src="https://lh3.googleusercontent.com/p/AF1QipPwv09Oj7AuaGXx4_LRHeAMHreQDRHCqGP3ixU3=s1600-w400" class="d-block w-100" alt="Imagen de referencia">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
		</div>
	</body>
</html>
