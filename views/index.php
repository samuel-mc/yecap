<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <section class="mw--1440 bg--turquesa d-flex flex-column flex-md-row border border-dark">
        <div class="text-white w-50 px-5 random_2_stars d-flex flex-column justify-content-center">
            <h2 class="text--2xl">El verdadero sabor mexicano</h2>
            <p class="text--md">Recordándolo siempre como lo que es… una FONDA pero con la calidad y calidez que nos caracteriza en Grupo Orraca.</p>
            <div>
                <a class="btn btn--orange" href="<?php echo __ROOT__; ?>menu">Conoce nuestro menú</a>
            </div>
        </div>
        <div class="border border-dark">
            <img src="<?php echo __ROOT__; ?>/public/img/home/hero.png" alt="logo de la empresa" class="img-fluid h-100">
        </div>
    </section>

    <section class="mw--1440 bg--yellow d-flex flex-column flex-md-row border border-dark">
        <div class="border border-dark w-50">
            <img src="<?php echo __ROOT__; ?>/public/img/home/quienes.png" alt="quienes somos" class="img-fluid h-100">
        </div>
        <div class="w-50 px-5 random_star star__t_r d-flex flex-column justify-content-center">
            <h2 class="text--2xl">¿Quienes  <br>somos?</h2>
            <p class="text--md">
                Fonda Yecapixtla es un rincón 100% mexicano y la parada perfecta para remontarnos al México tradicional, con sus mercados, sus colores, su folklor, su gente y sus sabores.
            </p>
            <p class="text--md">
            Como lo dice su slogan “LA MEJOR CECINA DEL MUNDO” es lo que se sirve y lo que más recomendamos. Además, ofrecemos una gran variedad de antojitos mexicanos siempre acompañados del buen sazón y un excelente servicio.                
            </p>
        </div>
    </section>
    <?php include 'components/menu.php'; ?>

    <section class="mw--1440 grid--4cols">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos1.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos2.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos3.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos4.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos5.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos6.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos7.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos8.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos9.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos10.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos11.png" alt="foto" class="border border-dark h--320 w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/fotos12.png" alt="foto" class="border border-dark h--320 w-100">
    </section>

    <?php include 'components/contacto.php'; ?>
    <?php include 'components/banner.php'; ?>    

</main>
<?php include 'partials/footer.php'; ?>