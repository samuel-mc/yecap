<?php $title = isset($title) ? $title : 'Tanko';
?>
<!-- Desktop version -->
<header class="d-lg-flex justify-content-between align-items-center py-2 px-4 d-none">
  <div>
    <a href="./index.html">
      <img src="./public/img/logo.png" alt="Logo" class="logo" width="205.12" height="51.28">
    </a>
  </div>

  <div>
    <nav>
      <ul class="d-flex list-unstyled mont-bold align-items-center m-0">
        <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
        <li><span class="px-3">/</span></li>
        <li class="mx-2"><a class="<?php echo $title == 'Ménu' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>menu">Ménu</a></li>
        <li><span class="px-3">/</span></li>
        <li class="mx-2"><a class="<?php echo $title == 'Grupo Orraca' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#grupo">Grupo Orraca</a></li>
        <li><span class="px-3">/</span></li>
        <li class="mx-2"><a class="<?php echo $title == 'Galería' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>galeria">Galería</a></li>
        <li><span class="px-3">/</span></li>
        <li class="mx-2"><a class="<?php echo $title == 'Contacto' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>contacto">Contacto</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- Mobile version -->
<nav class="navbar navbar-expand-lg d-lg-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./public/img/logo.png" alt="Logo" class="logo" width="205.12" height="51.28">
    </a>
    <button class="navbar-toggler px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>      
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active <?php echo $title == 'Inicio' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
        <a class="nav-link <?php echo $title == 'Ménu' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>menu">Ménu</a></li>
        <a class="nav-link <?php echo $title == 'Grupo Orraca' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#grupo">Grupo Orraca</a></li>
        <a class="nav-link <?php echo $title == 'Galería' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>galeria">Galería</a></li>
        <a class="nav-link <?php echo $title == 'Contacto' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>contacto">Contacto</a></li>
      </div>
    </div>
  </div>
</nav>
