<section id="intro">
	<nav class="navbar navbar-light navbar-toggleable-md mx-auto">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a id="logo_image" class="navbar-brand"><img src="img/logos/logo_color.png" alt="logo" role="banner"></a>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link">INICIO</a>
          </li>
          <li class="nav-item" target="_blank" >
            <a class="nav-link" href="http://aulasamigas.com/landing/tomi" target="_blank">TO.Mi</a>
          </li>
          <li class="nav-item" target="_blank" >
            <a class="nav-link" href="http://planpadrino.aulasamigas.com/" target="_blank">PLAN PADRINO</a>
          </li>
        </ul>
        <ul class="navbar-nav">
        <!--
          <li class="nav-item">
            <a class="nav-link" href="#">INICIAR SESIÓN</a>
          </li>
          -->
          <li class="nav-item">
            <a href="http://aulasamigas.com/o/auth/register" class="btn btn-outline-success" target="_blank" >REGÍSTRATE</a>
          </li>    
        </ul>
      </div>

    </nav>
	<div class="container">
		<div class="row">
			<div id="intro_description" class="mx-auto" class="col-12 col-md-12 col-lg-12">
				<h3>Fórmate en nuestra academia virtual, usa más de 2.600 contenidos interactivos y utiliza innovadoras herramientas de gestión para tus actividades
				</h3>
				<p>Selecciona tu perfil para conocer los beneficios que tenemos, regístrate gratis y comienza a inspirar.</p>
			</div>
		</div>
		<div class="row roles align-items-end">
			
			<div id="intro_description" class="col-12 col-md-4 col-lg-4">
				<a target="_blank" onmouseover="cambio_banner('intro','img/banners/banner_estudiantes.jpg')">
					<img class="img-fluid estudiantes" width="70%" src="img/banners/rol_estudiante.png">				
				<span class="redes-text "><span style="color: #E8BC2D; padding:0;">#</span>Aprende<span style="font-weight: 400;">diferente</span></span>	
				<p class="rol_text">Aprende diferente</p>
				<button class="btn btn-info">Próximamente</button>
				</a>				
			</div>
			<div id="intro_description" class="col-12 col-md-4 col-lg-4">
			<a href="http://maestros.aulasamigas.com/" target="_blank" onmouseover="cambio_banner('intro','img/banners/banner_maestro.jpg')">
				<img class="img-fluid maestros" src="img/banners/rol_maestro.png">
				<span class="redes-text "><span style="color: #E8BC2D; padding:0;">#</span>Maestros<span style="font-weight: 400;">que</span>inspiran</span>	
				<p class="rol_text">Inspira a tus estudiantes</p>
				<button class="btn btn-info">Conoce más</button>
			</a>				
			</div>
			<div id="intro_description" class="col-12 col-md-4 col-lg-4">
			<a target="_blank" onmouseover="cambio_banner('intro','img/banners/banner_papas.jpg')">
				<img class="img-fluid papas" width="70%" src="img/banners/rol_papas.png" >			
				<span class="redes-text "><span style="color: #E8BC2D; padding:0;">#</span>Papá<span style="font-weight: 400;">que</span>inspira</span>			
				<p class="rol_text">Acompaña a tus hijos</p>
				<button class="btn btn-info">Próximamente</button>
			</a>				
			</div>			
		</div>
	</div>
</section>

<script>
function cambio_banner(elem,img) {
	document.getElementById(elem).style.backgroundImage="url('"+img+"')";
}
</script>