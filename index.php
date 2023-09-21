	<!--Main Slider-->
	<section class="main-slider">

	    <div class="main-slider-carousel owl-carousel owl-theme">

	        <div class="slide un">
	            <div class="auto-container">
	                <div class="content">
	                    <div class="rating">
	                        <span class="fa fa-star"></span>
	                        <span class="fa fa-star"></span>
	                        <span class="fa fa-star"></span>
	                        <span class="fa fa-star"></span>
	                    </div>
	                    <h2>AT Karibu Project Community Media <span>ATKA Media.</span></h2>
	                </div>
	            </div>
	        </div>

	        <div class="slide deux">
	            <div class="auto-container">
	                <div class="content">
	                    <div class="rating">
	                        <span class="fa fa-star"></span>
	                        <span class="fa fa-star"></span>
	                        <span class="fa fa-star"></span>
	                        <span class="fa fa-star"></span>
	                    </div>
	                    <h2>AT Karibu Project Community Media <span>ATKA Media.</span></h2>
	                </div>
	            </div>
	        </div>

	    </div>
	</section>
	<!--End Main Slider-->

	<!--Services Section-->
	<section class="services-section" style="padding-top: 80px;">
	    <div class="auto-container">

	        <!--Lower Section-->
	        <div class="lower-section">
	            <div class="row clearfix">

	                <!--Image Column-->
	                <div class="image-column col-lg-6 col-md-12 col-sm-12">
	                    <div class="inner-column">
	                        <div class="image">
	                            <img src="<?= SCRIPT . 'images' . DIRECTORY_SEPARATOR .'resource'. DIRECTORY_SEPARATOR .'atk.jpg' ?>"
	                                alt="" />
	                            <span class="icon"><img
	                                    src="<?= SCRIPT . 'images' . DIRECTORY_SEPARATOR .'resource'. DIRECTORY_SEPARATOR .'' ?>"
	                                    alt="" /></span>
	                        </div>
	                    </div>
	                </div>

	                <!--Content Column-->
	                <div class="content-column col-lg-6 col-md-12 col-sm-12">
	                    <div class="inner-column">
	                        <h2>ATKPC media</h2>
	                        <h3></h3>
	                        <div class="text">C'est un média en ligne de l'orgqnisqtion ATK-
RDC asbl qyqnt comme spécificité la participation communautaire à l'information.
Basée à l'Est de la RDC, nous sommes à votre servicepour vous fournir les informations vraies, 
vérifiée, traitée avec professionalisme et passion. pour vous mettre proche du monde entier avec notre ligne éditoriale qui est la politique socio- économique, dans sa divérsité pour l'émergence de la RD.Congo et de la sous -region
	                            . </div>
	                        <a href="about" class="theme-btn btn-style-two">Voir plus</a>
	                    </div>
	                </div>

	            </div>
	        </div>

	    </div>
	</section>
	<!--End Services Section-->

	<!-- Map Section -->
	<section class="map-section" id="map">
	    <div class="image-layer"></div>
	    <div class="auto-container">
        <h2>Nous sommes à votre service pour vous fournir de l'information vraie, verifiée, traité avec professionalisme et passion, pour vous mettre proche du monde entier avec notre ligne éditoriale qui est la politique socio-économique dans sa diversité pour l'émergence de la RDC..<span> Où nous trouver?</span></h2>
	        
	       <br> <br> <br>
	    </div>
	</section>
	<!-- End Map Section -->

	<!--Services Section Two-->
	
	<!--End Services Section Two-->

	<!--End Accordian Section-->

	<!--Expert Section-->
	<section class="expert-section" style="background-image:url(images/background/2.png)">
	    <div class="auto-container">
	        <!--Sec Title-->
	        <div class="sec-title centered">
	            <h2>Notre equipes d'experts</h2>
	            <div class="text"></div>
	        </div>

	        <div class="row clearfix">

	            <?php foreach ($params['home']['teams'] as $team):?>
	            <!--Team Block-->
	            <div class="team-block col-lg-4 col-md-6 col-sm-12">
	                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
	                    <div class="image">
	                        <a href="#"><img
	                                src="<?= SCRIPT . 'images' . DIRECTORY_SEPARATOR .'team'. DIRECTORY_SEPARATOR .$team->photo ?>"
	                                alt="" /></a>
	                    </div>
	                    <div class="lower-content">
	                        <h3><a href="team"><?= $team->nom .' '.$team->postnom.' '.$team->prenom?></a></h3>
	                        <div class="designation"><?= $team->fonction?></div>
	                        <div class="text"><?= $team->description?></div>
	                        <!-- <a href="team" class="theme-btn btn-style-two">read more</a> -->
	                    </div>
	                </div>
	            </div>
	            <?php endforeach?>
	        </div>

	    </div>
	</section>
	<!--End Expert Section-->
	<!--Clients Section-->
	