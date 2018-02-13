<?php 
$page_name = "Energías Renovables";
include ('head.php');
include ('navbar.html');
?>

	<main class="site-content" role="main">
        
         <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-energ"></div>  <!-- ver en slit-slider.css -->

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated bounceInLeft">Energías Renovables</h2>
                                <span class="animated fadeInDown">¿Por qué pensar en ellas?</span>
                                
                            </div>
                        </div>
						
					</div>		
					
				</div><!-- /sl-slider -->
			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
        <section id="eerr">
            <div class="container">
                <div class="eerr-title">
                    <h3>¿Qué son las energías renovables?</h3>
                </div>
                <div class="eerr-exp">
                <p>Las energías renovables son fuentes de energía limpia inagotables y crecientemente competitivas.</p>
                <p>GreenTech evalúa todas las alternativas mediante un análisis integral del establecimiento, teniendo en cuenta las necesidades particulares.</p>
                <p>Nuestros servicios incluyen sistemas de calentamiento solar de agua sanitaria y de piscinas, sistemas de calentamiento de fluidos para procesos industriales, sistemas fotovoltaicos aislados para locaciones rurales (off-grid), conectados a la red (on-grid) y de back-up solar.</p>
                </div>
                <div class="eerr-title">
                    <h3>Beneficios</h3>
                </div>
                <div class="eerr-exp">
                <div class="row">
                    <div class="benef col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <p>Independencia de la red</p>
                        <p>Carece de costo operativo</p>
                        <p>Evita aumentos tarifarios</p>
                        <p>Permite ser dueño de la energía</p>
                    </div>
                    <div class="benef col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <p>El recurso es inagotable</p>
                        <p>Aumenta la competitividad</p>
                        <p>Permite sobrellevar cortes</p>
                        <p>Mejora la imagen ante la comunidad</p>
                    </div>
                    <div class="benef col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <p>Energía "Off-Grid"</p>
                        <p>Larga vida útil</p>
                        <p>Disminuye la huella de Carbono Energética</p>
                    </div>
                    
                </div>
                </div>
				
            </div>
        
        
        </section>
                
        
        <!-- video -->
		<section id="vid-slider">
             <div class="container">
                 
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="parallax-vid">
                        <div class="vid-title">
                            <h3>Energía Fotovoltaica</h3>
                        </div>
                        <div align="center" class="el-video">
                            <video loop="loop" autoplay="autoplay" alt="funcionamiento de sistema fotovoltaico">
                                <source type="video/mp4" src="video.mp4"/>
                            </video>               
                        </div>
                    </div>   
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="parallax-vid">
                        <div class="vid-title">
                            <h3>Energía Solar Térmica</h3>
                        </div>
                        <div align="center" class="el-video">
                            <a href="termos.php" class="external">
                                <video loop="loop" autoplay="autoplay" alt="funcionamiento de sistema térmico solar">
                                <source type="video/mp4" src="videotst.mp4"/>
                                </video>  
                            </a>
                        </div>
                    </div>   
                 </div>
                 
             </div>            
        </section>
        <!-- /video -->
	   
        

	</main>

<?php 
include ('footer.html');
?>
	