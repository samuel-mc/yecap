<?php $title = isset($title) ? $title : 'Tanko';
?>

<header class="bg-white shadow py-3 mx-5 my-3 d-none d-lg-block" style="border-radius: 100px;">
    <div class="mw--1440 d-flex justify-content-between align-items-center">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="">
        <nav>
            <ul class="d-flex text--sm w-100 list--unstyled">
                <li class="mx-2"><a class="<?php echo $title == 'Home' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Home</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Servicios' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>nosotros">Servicios</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Seguros personales' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>servicios">Seguros personales</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Seguros empresariales' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Seguros empresariales</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Fianzas' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Fianzas</a></li>
                <li class="mx-2"><a class="<?php echo $title == '¿Quiénes somos?' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">¿Quiénes somos?</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-dark btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
            Contacto
        </a>
    </div>
</header>

<header class="bg--lightBlue p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="">
        <button class="btn btn--darkBlue btn--square px-3 " onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed z-10 bg-white w-100 py-4" id="mobileMenu" style="top: 0;">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-20">
            <button class="btn btn-danger btn--square px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text--white"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--md w-100 list--unstyled">
                    <li class="my-2"><a class="<?php echo $title == 'Home' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Home</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Servicios' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>nosotros">Servicios</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Seguros personales' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>servicios">Seguros personales</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Seguros empresariales' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Seguros empresariales</a></li>
                    <li class="my-2"><a class="<?php echo $title == 'Fianzas' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Fianzas</a></li>
                    <li class="my-2"><a class="<?php echo $title == '¿Quiénes somos?' ? 'a--dark-blue text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">¿Quiénes somos?</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-dark btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
                Contacto
            </a>
        </div>
    </div>
</nav>