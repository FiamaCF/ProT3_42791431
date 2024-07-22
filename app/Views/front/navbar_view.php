<!--navegacion-->
<?php
$session = session();
$nombre= $session->get('nombre');
$perfil= $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand me-auto barra" href=<?php echo base_url('principal')?>>
        <!--logo/marca de la empresa-->
        <img src="<?php echo base_url('assets/img/Fiama Creaciones logo.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
    </a> 
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
<?php if(session()->perfil_id == 1): ?>
  <div class="btn btn-secondary active btnUser btn-sm">
    <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
  </div>
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo3">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link" href='ventas'>Ventas</a></li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
  </ul>
  <?php elseif(session()->perfil_id == 2): ?>
    <div class="btn btn-info active btnUser btn-sm">
      <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
    </div>
    <!-- NAVBAR PARA CLIENTES que pueden comprar -->

    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('quienes_somos');?>">Quiénes somos</a> </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('catalogo');?>">Catálogo</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
      </ul>
      </div>
      <?php else:?>
        <!-- NAVBAR PARA CLIENTES no logueados -->
         <a class="navbar-brand" href="#"></a>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo3">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href='quienes_somos'>Quiénes Somos</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='acerca_de'>Acerca de</a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a></li>
        <li class="nav-item">
        <a class="nav-link" href='login'>Login</a></li>
          </ul>
         </div>
         <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <?php endif;?>
  </div>
</div>
      
    </div>
  </div>
</nav>

<!--fin barra de navegacion-->