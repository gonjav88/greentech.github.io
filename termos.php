<?php 
$page_name = "Termotanques Solares";
include ('head.php');
include ('navbar.html');
?>
		
		<main class="site-content" role="main">
			
		<!--
        Home
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-termo"></div>  <!-- ver en slit-slider.css -->

						<div class="slide-caption">
                            <div class="caption-content" style="color:black">
                                <h2 class="animated bounceInLeft" style="color:white">Energía Térmica Solar</h2>
								<span class="animated fadeInDown" style="color:white">Termotanques y Piscinas</span>
                                <a href="#termos" class="btn btn-info scroll-down" role="button">Bajar</a>
								<!-- <span class="animated fadeInDown" style="color:white">Disculpe la molestia</span> -->
                                <!-- <a href="faqs.php" class="btn btn-dark btn-effect"><span><b>Preguntas Frecuentes</b></span></a> -->
                            </div>
                        </div>
						
					</div>		
					
				</div><!-- /sl-slider -->
			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home 
        ==================================== -->	
		
            
        <section id="termos" class="ok">
            <div class="container">
                  <h2>Seleccione la solución que está buscando</h2>
                    <div class="row termo-nav">
                      <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#home">Agua Caliente Sanitaria</a></li>
                        <li><a data-toggle="tab" href="#menu1">Piletas</a></li>
                        <li><a data-toggle="tab" href="#menu2">Agua Caliente Industrial</a></li>
                        <li><a data-toggle="tab" href="#menu3">Preguntas Frecuentes</a></li>
                      </ul>
                    </div>
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3>Hogares</h3>
                      <h5>Colectores Solares por Termosifón</h5>
                        <p>Permite realizar el mayor aprovechamiento de la energía del sol y cuenta con la posibilidad de instalar un kit eléctrico para calentar el agua en momentos de necesidad.</p>
                        <p>El sistema está compuesto por tubos de vidrio con sistema de vacío los cuales atraen la radiación solar calentando el agua que circula a través de ellos.</p>
                        <p>Estos termotanques permiten acumular agua a aproximadamente 45°C en invierno y a más de 80°C en verano.</p>
                        
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <h3>Sistemas para Piletas</h3>
                      <p>Ideal para extender el uso de la pileta desde Noviembre hasta Abril. Permite elevar la temperatura del agua en aproximadamente 10°C. </p>
                      <p><b>¿Cómo funciona?</b></p>
                        <p>El colector solar está compuesto por tubos de polipropileno más un aditivo para impedir el desgaste por la radiación solar. Estos tubos atraen la radiación emitida por el sol y transfiriendo el calor al agua que circula por los mismos.</p>
                        <p>El agua fría ingresa al sistema por la parte inferior y se ramifica en los tubos produciendo el calentamiento de la misma. En cuando es calentada, el agua pierde densidad subiendo hasta la parte superior del sistema (a este fenómeno se lo llama termosifón) y vuelve a la piscina impulsada por la bomba de recirculación del filtro.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                      <h3>Agua Caliente Solar para Industrias</h3>
                      <p>¿Cuantos miles de litros usa de agua caliente en su industria? No importa, nosotros podemos ofrecerle un sistema con el cual genere toda esa energía por una fuente gratuita, con la energía del sol.</p>
                      <p>¿Son sistema seguros? Si, se usan en todo el mundo, nosotros trabajamos con las principales marcas, tenemos experiencia en el servicio, la instalación y aprendimos mucho de nuestros errores al comenzar, por lo que tenemos un buen servicio de post venta. Estos sistemas se acoplan a los sistemas convencionales (calderas, termotanques industriales eléctricos o a gas) por lo que garantizan siempre el agua caliente, aunque no halla sol.</p>
                      <p><b>El plazo actual de recupero de inversión para proyectos industriales oscila entre 4 a 7 años según el caso, a los costos actuales, sin considerar la quita de subsidios o aumentos en las tarifas de gas y electricidad.</b></p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                      
                        <div class="term-faq">
                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- 1 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ¿Qué es la Energía Solar?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            La energía solar es la más limpia e inagotable de todas las fuentes de energía conocidas y es obtenida mediante la captación de la luz y el calor emitidos por el Sol. 
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            ¿Qué es la radiación solar?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Radiación solar es el conjunto de radiaciones electromagnéticas emitidas por el Sol, que combina campos eléctricos y magnéticos oscilantes, que se propagan a través del espacio transportando energía de un lugar a otro.
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            ¿Qué es un calentador solar?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Es un aparato que utiliza el calor del sol para calentar alguna substancia, como puede ser agua, aceite, salmuera, glicol o incluso aire. Su uso más común es para calentar agua para uso en piletas o servicios sanitarios (duchas, lavado de ropa o vajilla etc.) tanto en ambientes domésticos como hoteles.
                                            Está formado por 4 componentes básicos: el colector, el contenedor (o tanque), la estructura y la sustancia de trabajo.
                                            <ul>
                                                <li style="text-align: justify;"><p><span style="color: #339964;"><strong>Colector: </strong></span>Es el componente que se encarga de transferir la energía solar al agua. Consiste en un arreglo de tubos por donde fluye el agua.</p></li>
                                                <li style="text-align: justify;"><p><span style="color: #339964;"><strong>Contenedor: </strong></span>Es el recipiente de almacenamiento del fluido. En los calentadores solares de piscinas, el contenedor suele ser la misma pileta.</p></li>
                                                <li style="text-align: justify;"><p><span style="color: #339964;"><strong>Sistema: </strong></span>Son todas las tuberías, bombas, sistemas de control, llaves de paso, y accesorios con las que cuente el calentador solar.</p></li>
                                                <li style="text-align: justify;"><p><span style="color: #339964;"><strong>Substancia de trabajo: </strong></span>Agua potable; la misma que se utilizará en regaderas, lavabos, lavadoras, albercas, etc.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            ¿Qué es un calentador solar sin presión o a gravedad?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            Los sistemas sin presión significan que en el sistema la presión de trabajo es casi 0 MPa. Se basa en un principio natural “termosifón”. En este sistema el tanque de almacenamiento siempre se encuentra más alto que el colector. Cuando los rayos del sol inciden en los tubos de vidrio al vacío, la temperatura del agua en el colector se eleva por lo que es menos densa o más ligera. Esta agua más caliente y más ligera se mueve de manera natural a la parte superior del colector y a través de los tubos hasta el tanque de almacenamiento. Esto hace que el agua más fría y más pesado se mueve a la parte inferior del colector. Este continuo desplazamiento se produce de forma natural. Y a menudo se habla de un sistema “pasivo” o de “termosifón”.
                                        </div>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            ¿El termotanque solar es una alternativa viable al gas o electricidad?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            El calentamiento de agua a base de&nbsp;energía solar&nbsp;debe ser visto como un complemento al gas o electricidad. Es posible proveer entre un 60% y un 90% de las necesidades consumo de agua caliente de un hogar.
                                        </div>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            ¿Cuan difícil es la instalación?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            No es necesario hacer grandes modificaciones a su casa para incorporar un calentador solar, ni tampoco debe desechar su calentador anterior. La instalación es muy sencilla, requiere un mínimo de modificaciones, y permite la utilización de su calentador de gas o eléctrico si fuera necesario. Se puede instalar en conjunto con un calentador de paso, para asegurar que usted siempre tendrá agua caliente, gastando el mínimo.
                                        </div>
                                    </div>
                                </div>
                               <!-- 7 --> 
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            ¿Cuál es la vida útil?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            Tiene una vida útil mínima de 15 años.
                                        </div>
                                    </div>
                                </div>
                                <!-- 8 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            ¿En cuánto tiempo puedo amortizar la inversión del equipo?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            Dependiendo del uso que se le quiere dar (agua caliente, calefacción de vivienda y/o pileta) y el tipo de gas que tiene actualmente instalado (gas natural, gas envasado), la inversión se recupera aproximadamente entre los 24 y 42 meses.
                                        </div>
                                    </div>
                                </div>
                                <!-- 9 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingNine">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            ¿Que pasa con el granizo?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                        <div class="panel-body">
                                            El equipo puede soportar granizo de hasta 25 mm en posición horizontal. Por lo tanto, al estar “parado” con un ángulo generalmente mayor a los 40 grados, esta resistencia aumenta considerablemente. También se puede instalar una “malla de gallinero” con una apertura de 20 mm, que protegería el equipo de un granizo más grande.<br><b>Si lo peor sucede, los tubos solares se pueden reemplazar fácilmente. Son económicos&nbsp; y disponibles a través de los distribuidores&nbsp; locales</b>.
                                        </div>
                                    </div>
                                </div>
                                <!-- 10 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            ¿Qué mantenimiento requiere un termotanque solar?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                        <div class="panel-body">
                                            El mantenimiento es mínimo.&nbsp; Se recomienda realizar una limpieza externa de los tubos antes de la llegada del invierno. El resto de las inspecciones es común a cualquier tipo de calentador: en caso de agua dura revisar el acumulador antes de los 6 meses y, de ser necesario, pasar un desincrustante (tal como agua con vinagre); revisar el estado del ánodo de magnesio y de ser necesario, cambiarlo; inspeccionar el buen estado de las cañerias.
                                        </div>
                                    </div>
                                </div>
                                <!-- 11 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEleven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            ¿Cómo es el funcionamiento del termotanque durante los días con lluvia y/o nublados?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                        <div class="panel-body">
                                            Aunque la cantidad y densidad de nubes disminuye el rendimiento de los termotanques solares, en un día cubierto podrá igualmente obtener agua caliente. En el caso de varios días sin sol o con lluvias, se puede encender la resistencia eléctrica o el sistema convencional, que actúa como fuente de apoyo para elevar la temperatura del agua al nivel requerido.
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /col -->
                </div> <!-- /serv-jud -->
                        
                    </div>
                  </div>
            </div> <!-- /container -->
            
        </section>
		
		</main>
        
      		
<?php
include ('footer.html');
?>
