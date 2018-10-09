
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#carousel').on('slid.bs.carousel', function (e) {
   let elemento = $('#carousel .item.active video').first();
   if (elemento.prop("tagName") == "VIDEO") {
     elemento.get(0).play();
   }
});

$('#carousel').bind('slide.bs.carousel', function (e) {  
   let elemento = $('#carousel .item.active video').first();
   if (elemento.prop("tagName") == "VIDEO") {
     elemento.get(0).pause();
   }
});
</script>


	<?php include("header.php"); ?>
			<!-- HEADER -->
<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

			<section class="page-header">
				<div class="container">

					<h1>CONGRESO</h1>

				</div>
			</section>
			<!-- /HEADER -->

			<!-- CARTEL-->
			<section id="cartel">
				<div class="container text-center">
					<h2>CARTEL</h2>
					<hr>
				
				<img class="img-responsive center-block" src="assets/documentos/cartel.jpg" />
				<p>Descarga nuestro cartel <a href="assets/documentos/cartel.jpg" target="_blank"><b>aqui</b></a>.</p>
				</div>
			</section>
			<!-- /CARTEL-->
			
			<!-- CONFERENCISTAS-->
			<section id="conferencistas">
				<div class="container text-center">
					<h2>CONFERENCISTAS</h2>
					<hr>
				
				
				</div>
			</section>
			<!-- /CONFERENCISTAS-->

			<!-- PROGRAMA-->
			<section id="programa">
				<div class="container text-center">
					<h2>PROGRAMA</h2>
					<hr>
				
				
				</div>
			</section>
			<!-- /PROGRAMA-->

			<!-- SEDE-->
			<section id="sede">
				<div class="container text-center">
					<h2>SEDE</h2>
					<h3>Sala de Congresos de la Unidad de Investigación Multidisciplinaria II</h3>
					<hr>
				
				
				</div>
			
										<section id="slider" class="slider fullwidthbanner-container roundedcorners">
			
				
				<div class="fullscreenbanner" data-navigationStyle="">
					<ul class="hide">

						<!-- SLIDE  -->						

						
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
							
							<img src="assets/images/1x1.png" data-lazyload="assets/images/sextoCongreso/uim1.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat"/>
							

						</li>
											<!-- SLIDE -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">							

							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="0"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="true"
								data-autoplayonlyfirssttime="false"
								data-nextslideatend="true"
								data-volume="mute" 
								data-forceCover="1" 
								data-aspectratio="16:9" 
								data-forcerewind="on" style="z-index: 2;">

								<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>

								<video class="" preload="none" width="100%" height="100%">
									<source src="assets/images/sextoCongreso/videos/UIM 03.webm" type="video/webm" />
									<source src="assets/images/sextoCongreso/videos/UIM 03.mp4" type="video/mp4" />
									El navegador no soporta el formato del video.
								</video>

							</div>



						</li>

						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/sextoCongreso/uim2.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />							
						</li>

						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">							

							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="0"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="true"
								data-autoplayonlyfirsttime="false"
								data-nextslideatend="true"
								data-volume="mute" 
								data-forceCover="1" 
								data-aspectratio="16:9" 
								data-forcerewind="on" style="z-index: 2;">

								<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>

								<video class="" preload="none" width="100%" height="100%">
									<source src="assets/images/sextoCongreso/videos/UIM 05.webm" type="video/webm" />
									<source src="assets/images/sextoCongreso/videos/UIM 05.mp4" type="video/mp4" />
									El navegador no soporta el formato del video.
								</video>

							</div>



						</li>

						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/sextoCongreso/uim3.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />							
						</li>
						

					</ul>
					
				</div>
			</section>










								
	
				<!-- /carousel -->
<section >
		<div class="container">
		<div class="row">
     <div class="col-md-5">
         
            <img class="" style="" src="assets/images/sextoCongreso/banner.jpg" width="85%" alt="">
         

         <address>
		
		<h4 class="is-size-4"><strong><i class="fa fa-map-marker"></i> Ubicación:</strong> <br>
		Avenida Alcanfores y San Juan Totoltepec S/N, Santa Cruz Acatlán, C.P. 53150 Naucalpan de Juárez, México</h4>
		<br>

		<h4 class="is-size-4"><i class="fa fa-phone"></i> Teléfonos:</strong><br> 53631038, 56231525 <br> 56231750 EXT. 38908/38902</h4><br>

		<h4 class="is-size-4"><strong><i class="fa fa-envelope"></i> Correos:</strong><br> congresoinvestiga@apolo.acatlan.unam.mx
  sexto.cim.2018@gmail.com</h4><br>

 
							</address>
       </div>
       

						<div class="col-md-2">

						</div>

     
     <div class="col-md-5">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15045.361339355866!2d-99.2466355!3d19.4839882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8546d108471abcd!2sFacultad+de+Estudios+Superiores+Acatl%C3%A1n+UNAM!5e0!3m2!1ses!2smx!4v1527184141881" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
   </div>
   
 </div>


</section>


			</section>
			<!-- /SEDE-->

			<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>

			<!-- FOOTER -->
				<?php include("footer.php"); ?>

