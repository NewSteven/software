<!DOCTYPE HTML>
<html>
<head>
<title>Calzado online</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css"> 
 <!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/header.css" rel="stylesheet">


<link rel="icon" href="images/icono.ico" type="image/x-icon">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
			
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
						
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!----menu con zoom--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----menu con zoom--->	
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>					
</head>
<body>

<header>
	<?php @include('header2.php');?>
</header>

<div class="wrap">
	<div class="rsidebar span_1_of_left">			 
			<section  class="sky-form">
				<h4 style="FONT-SIZE:25px; COLOR:#000000; LINE-HEIGHT:50px; FONT-FAMILY:Arial,Helvetica,sans-serif">Tipo de ocaci&oacuten</h4>
				<div class="row row1 scroll-pane">
					<div class="col col-4">
						<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Gala</a><br>
						<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Casual</a><br>
						<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Deportiva</a><br>
					</div>
				</div>
			</section>
			<section  class="sky-form">
				<h4 style="FONT-SIZE:25px; COLOR:#000000; LINE-HEIGHT:50px; FONT-FAMILY:Arial,Helvetica,sans-serif">Marca</h4>
				<div class="row row1 scroll-pane">
					<div class="col col-4">
						<a href="{{ route('nike')}}" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Nike</a><br>
						<a href="{{ route('puma')}}" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Puma</a><br>
						<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Venus</a><br>
						<a href="{{route('adidas')}}" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Adidas</a><br>
						<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Converse</a><br>
					</div>
				</div>
			</section>				
			<section  class="sky-form">
				<h4 style="FONT-SIZE:25px; COLOR:#000000; LINE-HEIGHT:50px; FONT-FAMILY:Arial,Helvetica,sans-serif">Precios</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">Hasta $50.000</a><br>
							<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">$50.000 a $150.000</a><br>
							<a href="" style="FONT-SIZE:20px; COLOR:#000000; LINE-HEIGHT:25px; FONT-FAMILY:Arial,Helvetica,sans-serif">$150.000 a $200.000</a><br>
						</div>
					</div>
			</section>
	</div>

<!-- .....................Fin layout.............................. -->
<div class="cont span_2_of_3">
	<div class="labout span_1_of_a1">
	<!-- start product_slider -->
			<ul id="etalage">
			<li>
				<a href="">
					<img class="etalage_thumb_image" src="images/t1.jpg" />
					<img class="etalage_source_image" src="images/t2.jpg" />
				</a>
			</li>
			<li>
				<img class="etalage_thumb_image" src="images/t2.jpg" />
				<img class="etalage_source_image" src="images/t2.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="images/t3.jpg" />
				<img class="etalage_source_image" src="images/t3.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="images/t4.jpg" />
				<img class="etalage_source_image" src="images/t4.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="images/t5.jpg" />
				<img class="etalage_source_image" src="images/t5.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="images/t6.jpg" />
				<img class="etalage_source_image" src="images/t6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="images/t1.jpg" />
				<img class="etalage_source_image" src="images/t1.jpg" />
			</li>
		</ul>
			<!-- end product_slider -->
	</div>

<!-- .....................Inicio cuerpo.............................. -->
	<div class="cont1 span_2_of_a1">
		<h3 class="m_3" style="color: black">Tenis Deportivos Mujer New Balance Z0S2 azul</h3>				
		<div class="price_single">
			<span class="reducedfrom">$66.00</span>
			<span class="actual">$12.00</span><a href="#" style="color: black"> </a>
		</div>
			<ul class="options">
				<h4 class="m_9" style="color: black">Seleccciones la talla</h4>
				<li><a href="#" style="color: white">32</a></li>
				<li><a href="#" style="color: white">33</a></li>
				<li><a href="#" style="color: white">34</a></li>
				<li><a href="#" style="color: white">35</a></li>
				<div class="clear"></div>
			</ul>
		<div class="btn_form">
			<form>
				<input type="submit" value="Comprar ahora" title="">
			</form>
		</div>
		<ul class="add-to-links">
			<li><img src="images/wish.png" alt=""/><a href="#" style="color: black">Añadir a la lista de deseos</a></li>
		</ul>
		<p class="m_desc" style="color: black">New Balance te ofrece el balance perfecto en este modelo, combinando materiales de excelente calidad y elasticidad. 
						Cada paso será el mejor de tu vida y tendrás la excusa perfecta usando este calzado para salir a caminar.
		</p>		
		<div class="social_single">	
			<ul>	
				<li class="fb"><a href="https://www.facebook.com/"><span> </span></a></li>
				<li class="tw"><a href="https://twitter.com/"><span> </span></a></li>
				<li class="yo"><a href="https://www.youtube.com/"><span> </span></a></li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
		<ul id="flexiselDemo3">
			<li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		</ul>
	</div>
</div>

<!-- .....................Vista de zapatos central.............................. -->
<script type="text/javascript">
	$(window).load(function() {
	$("#flexiselDemo1").flexisel();
	$("#flexiselDemo2").flexisel({
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 1
			}, 
			landscape: { 
				changePoint:640,
				visibleItems: 2
			},
			tablet: { 
				changePoint:768,
				visibleItems: 3
			}
		}
	});

	$("#flexiselDemo3").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 1
			}, 
			landscape: { 
				changePoint:640,
				visibleItems: 2
			},
			tablet: { 
				changePoint:768,
				visibleItems: 3
			}
		}
	});
	
});
</script>
<!-- ........................................................................................................ -->
<!-- .....................Fin de script.............................. -->
<!-- ........................................................................................................ -->
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		<div class="toogle">
			<h3 class="m_3" style="color: black LINE-HEIGHT:50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detalles del producto</h3>
			<p class="m_text">
				<li style="color: black LINE-HEIGHT:50px;">&nbsp;&nbsp;La innovación convertida en un estándar.</li>
				<li style="color: black LINE-HEIGHT:50px;">&nbsp;&nbsp;La tecnología ENCAP® de la entresuela proporciona soporte y máxima durabilidad.</li>
				<li style="color: black LINE-HEIGHT:50px;">&nbsp;&nbsp;Las zapatillas 574 Felt Pack tienen el look que tanto deseas y la versatilidad que exige un estilo de vida como el tuyo.</li>
			</p>
		</div>					
 <br>
    </div>
     <div class="clear"></div>
	</div>
</div>

<?php @include('footer.php');?>

</body>
</html>
	
