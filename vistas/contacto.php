<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	 <header>
    <figure class="logo pull-left">
      <img src="../img/pecydem.png" alt="" class="img-responsive">
    </figure>

    <div class="menu pull-right">
	    <!-- <a href="contacto.php" class="pull-left botonarriba">CONTACTANOS</a> -->
			<div class="menu_bar bars pull-right">
			 <a href="#" class="bt-menu">
				 <i id="open" class="fa fa-align-justify fa-2x" aria-hidden="true"></i>
				 <i id="close" class="fa fa-close fa-2x close"  aria-hidden="true"></i>
			 </a>
			</div>
		</div>

		 <nav>
 			<ul>
 				<li><a href="../index.php"><span class="icon-house"></span>Inicio</a></li>
 				<li><a href="nosotros.php"><span class="icon-suitcase">Nosotros</span></a></li>
 				<li><a href="servicios.php"><span class="icon-earth"></span>Servicios</a></li>
 				<li><a href="contacto.php"><span class="icon-mail"></span>Contacto</a></li>
 			</ul>
 		</nav>



  </header>
  <div class="linea">

  </div>
  <div class="banner4">
  <p class="acercac">Contacto</p>
  </div>

  <div class="mapa">
  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6750443163382!2d-99.17229638598872!3d19.426441445913568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff4a2e34317d%3A0x7d6e7dc8caf395e7!2sPaseo+de+la+Reforma+383%2C+Cuauht%C3%A9moc%2C+06500+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1498602498869" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <article class="elegir2">
 <h1 class="text-center h1por">Datos de contacto</h1>
 <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-street-view"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Dirección</h4>
                    <h5>Av Paseo de la Reforma #383 entre Rio Nilo y Rio Guadalquivir. Col. Cuauhtemoc, México C.P. 06500</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-clock-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Horario</h4>
                    <h5>Lunes a Viernes de 9am a 6pm</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-phone"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Teléfono</h4>
                    <h5>PENDIENTE</h5>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-envelope-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Correo</h4>
                    <h5>info@pecydem.com</h5>
                </div>
            </div>
        </div>
</article>

<div class='container' style="margin-top: 5%;">
<h2 style="color: #811B31; text-align: center; margin-bottom: 3%;">Formulario de contacto</h2>
    <div class='row'>
        <div class='col-sm-12 col-md-10 col-md-offset-1'>
            <div class='well'>
                <form onSubmit="return false">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-4'>
                            <div class='form-group'>
                                <label for='fname'>Nombre completo</label>
                                <input type='text' id="txtNOMBRE" name='fname' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='lname'>Teléfono</label>
                                <input type='text' id="txtTELEFONO" name='lname' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='email'>Email</label>
                                <input type='text' id="txtCORREO" name='email' class='form-control' />
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-8'>
                            <div class='form-group'>
                                <label for='message'>Mensaje</label>
                                <textarea class='form-control' id="txtCOMENTARIO" name='message' rows='10'></textarea>
                            </div>

														<div id="_AJAX_PRE_"></div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-danger' onclick="sendCORREO()" value='ENVIAR' />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
