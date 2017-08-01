
<?php include 'vistas/encabezado.php' ?>
<body>

  <header>
    <!-- <div class=""> -->
      <figure class="logo pull-left">
        <img src="img/pecydem.png" alt="" class="img-responsive">
      </figure>

      <div class="menu pull-right">
      <a href="vistas/contacto.php" class="pull-left botonarriba">CONTACTANOS</a>
       <div class="menu_bar bars pull-right">
        <div class="bt-menu">
          <i id="open" class="fa fa-align-justify fa-2x" aria-hidden="true"></i>
          <i id="close" class="fa fa-close fa-2x close"  aria-hidden="true"></i>
        </div>
       </div>
      </div>
    <!-- </div> -->

    <nav>
			<ul>
				<li><a href="index.php"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="vistas/nosotros.php"><span class="icon-suitcase">Nosotros</span></a></li>
				<li><a href="vistas/servicios.php"><span class="icon-earth"></span>Servicios</a></li>
				<li><a href="vistas/contacto.php"><span class="icon-mail"></span>Contacto</a></li>
			</ul>
		</nav>

    <!-- <div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div> -->
  </header>
  <div class="linea">

  </div>


  <div class="banner">
    <div class="fondo">
      <h1 style="color: #811B31; text-align: center; font-size: 100px; margin-top: 7%;">PECYDEM</h1>
      <h2 style="color: #000; text-align: center; margin-top: 1%; font-weight: bold;">Construya mejor rentabilidad, sin la presión.</h2>
      <h3 style="color: #000; text-align: center; width: 50%; margin: 0 auto; margin-top: 2%; font-weight: bold;">Los líderes actuales de finanzas están volteando hacia PECYDEM para controlar costos y flujos de efectivo asociados con gastos y facturas.</h3>
    </div>
  </div>

  <div class="conten1">
    <p class="textoconten1">TODOS GANAN CON ADMINISTRACIÓN AUTOMATIZADA.</p>
    <div class="iconos">
      <i class="fa fa-users fa-5x" aria-hidden="true"></i>
      <p style="margin-top: 3%; color: #811B31;">EMPLEADOS</p>
    </div>
    <div class="iconos">
      <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
      <p style="margin-top: 3%; color: #811B31;">SOCIOS</p>
    </div>
    <div class="iconos">
      <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
      <p style="margin-top: 3%; color: #811B31;">CLIENTES</p>
    </div>
  </div>

  <div class="conten2">
    <h1 style="text-align: center; margin-top: 5%; color:#811B31;">ASESORIA Y CONSULTORIA</h1>
    <hr style="width: 20%; margin: 0 auto; height:2px; background-color:#811B31; border:none; ">

    <div class="section" style="margin-top: 5%; margin-bottom: 5%;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="img/asesoria.jpg" class="img-responsive img-rounded">
            <h1 class="text-center text-danger" style="margin-top: 8%;">ASESORIA</h1>
            <p></p>
            <p class="text-center alinear-texto">Es un servicio profesional, que orienta al directivo de una organización. Es una guía de expertos que responde a dudas específicas, resuelve problemas concretos y apoya a las organizaciones en los trámites necesarios para su operación.</p>
            <p></p>
          </div>
          <div class="col-md-6">
            <img src="img/consultoria.png" class="img-responsive img-rounded">
            <h1 class="text-center text-danger" style="margin-top: 8%;">CONSULTORIA</h1>
            <p></p>
            <p class="text-center alinear-texto">Es un servicio profesional especializado que puede ayudar a la dirección general de las organizaciones a enfrentar situaciones que impiden la operación plena del negocio.</p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="boton" style="text-align: center;"><a href="vistas/contacto.php" class="botonabajo">CONTACTANOS</a></p>



<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/botonarriba.js"></script>
</body>
</html>
