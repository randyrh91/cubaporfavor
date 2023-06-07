<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/myStyle.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/listing.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css"
          media="screen"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed"
          href="<?php bloginfo('atom_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>

    <?php
    wp_enqueue_script('jquery');
    wp_enqueue_script('bxslider', get_stylesheet_directory_uri() . '/js/jquery.bxSlider.min.js');
    wp_enqueue_script('superfish', get_stylesheet_directory_uri() . '/js/superfish.js');
    wp_enqueue_script('effects', get_stylesheet_directory_uri() . '/js/effects.js');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('owl', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('isotope', get_stylesheet_directory_uri() . '/js/jquery.isotope.js');
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('gmap', get_stylesheet_directory_uri() . '/js/gmaps.js');
    ?>

    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>

    <?php
    if (is_singular()) wp_enqueue_script('comment-reply');
    wp_head();
    ?>

</head>
<?php
$navclass = "nav-no-top";
$bodyclass = "padding-top45";
$ishome = false;
if (is_home() == 1) {
    //home
    //ver bien como saber si estoy en el home o no
    $navclass = "nav-top";
    $bodyclass = "";
    $ishome = true;
}

?>
<body class="metro padding-top45">


<nav class="navbar navbar-default navbar-fixed-top <?php echo $navclass; ?>" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span>
                <a href="#">
                    <img id="logoPortada" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo1.png" alt="Cuba, por favor">
                </a>
            </span>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php wp_nav_menu(array(
                    'container' => '', 'container_class' => 'collapse navbar-collapse navbar-ex1-collapse', 'walker' => new AvenWalkerNav(),
                    'container_id' => '', 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'fallbackmenu')
            ); ?>
            <?php wp_nav_menu(array(
                    'container' => '', 'container_class' => 'collapse navbar-collapse navbar-ex1-collapse', 'walker' => new AvenWalkerNav(),
                    'container_id' => '', 'theme_location' => 'top_right', 'menu_class' => 'nav navbar-nav navbar-right', 'fallback_cb' => 'fallbackmenu')
            ); ?>
        </div>
        <!--        <div class="collapse navbar-collapse navbar-ex1-collapse">-->
        <!--            <ul class="nav navbar-nav navbar-right">-->
        <!--                --><?php //wp_nav_menu( array( 'container_id' => '', 'theme_location' => 'primary','menu_class'=>'','fallback_cb'=> 'fallbackmenu' ) ); ?>
        <!--            </ul>-->
        <!--        </div>-->
    </div>

</nav>
<section id="main-slider">
    <div class="col-sm-9 col-md-9  column-slider">
        <div class="owl-carousel">
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2><span>Cienfuegos</span>, la ciudad mas bella de Cuba</h2>

                                    <p>le mostrará una perfecta convinacion de antiguedad y modernismo. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2>El mayor humedal del Caribe, <span>La Ciénaga de Zapata</span></h2>

                                    <p>donde encontrará una fauna que jamás podrá olvidar. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/3.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2>Viajar en el tiempo es posible en <span>La Habana</span></h2>

                                    <p>vaya a la época colonial recorriendo sus calles.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/4.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2>Es <span>La atenas de Cuba</span> por su explendor cultural </h2>

                                    <p>cuenta además con una de las cuevas más bellas del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/5.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2> En <span>Viñales</span></h2>

                                    <p>podrá visite la tierra del mejor tabaco del mundo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/6.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2><span>Santa Clara</span>, importante centro industrial y de servicios</h2>

                                    <p>una excelente opción para pasar un día expectacular.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item"
                 style="background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/banner/7.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <h2><span>Trinidad</span>, Patrimonio Mundil de la Humanidad</h2>

                                    <p>es toda fiestas y celebración.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
        </div>
        <!--/.owl-carousel-->
    </div>
<!--    Formulario  de Busqueda-->
    <div class="col-sm-3 col-md-3 column-slider">
        <div class="item"
             style="border:4px solid #F9F9F9;border-top:none; box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.5);background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/img-top.jpg);">
            <div class="slider-inner">
                <div class="container-fluid">
                    <div class="carousel-content">
                        <h2 style="margin-top: 60px;"><span>Promocionese<br>aquí</span></h2>

                        <p>Contribuir a mejorar su negocio es nuestra prioridad.</p>
                        <a class="pull-right btn btn-danger btn-sm" href="#">Crear Promoción</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#main-slider-->
<div style="clear: both"></div>

<section id="task-bar">
    <?php if (function_exists('bcn_display')) {
        $bc = bcn_display_list(true);
        $m = array();
        preg_match_all('/<li /', $bc, $m);
    }?>
    <?php if (count($m[0]) > 0) : ?>
        <ol class="breadcrumb">
            <li><em href="#" class="fa fa-info-circle"></em> Useted se encuentre en</li>
            <?php echo $bc ?>
        </ol>
    <?php endif ?>
    <!--        <ol class="breadcrumb">-->
    <!--            <li><em href="#" class="fa fa-info-circle"></em>Se encuentre en</li>-->
    <!--            --><?php //if(is_home()):?>
    <!--                <li><a href="#" class="btn">Matanzas</a></li>-->
    <!--                <li><a href="#" class="btn">Varaderos</a></li>-->
    <!--            --><?php //else:?>
    <!--                <li><a href="#" class="btn">Matanzas</a></li>-->
    <!--                <li><a href="#" class="btn">Varaderos</a></li>-->
    <!--                <li><a href="#" class="btn btn-primary"><b><em class="fa fa-home"></em> Alojamientos</b></a></li>-->
    <!--            --><?php //endif?>
    <!--        </ol>-->

    <nav class="navbar navbar-default <?php echo $navclass; ?>" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">¿Qué Busca?</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex2-collapse" style="margin-top: 5px">
            <form id="form_search" class="form-inline" role="form">
                <div class="btn-group col-md-3">
                    <!--                            <a class="btn btn-primary col-md-3 " href="#">Qué Busca?</a>-->
                    <input class="col-md-12" id="words" name="words" type="text"/>
                </div>
                <div class="btn-group col-md-4">
                    <a class="btn btn-primary col-md-6 " href="#">Precio($) Min:</a>
                    <select class="col-md-2">
                        <option>15</option>
                        <option>15</option>
                        <option>75</option>
                    </select>
                    <a class="btn btn-primary col-md-2 " href="#">Max:</a>
                    <select class="col-md-2">
                        <option>15</option>
                        <option>15</option>
                        <option selected>75</option>
                    </select>
                </div>
                <!--                        <div class="btn-group col-md-2" >-->
                <!--                            <a  class="btn btn-primary col-md-4 " href="#">Tipo:</a>-->
                <!--                            <select class="col-md-8">-->
                <!--                                <option>Alojamientos</option>-->
                <!--                                <option>Casa de Renta</option>-->
                <!--                                <option>Oferta de Renta</option>-->
                <!--                                <option>Habitación Permanente</option>-->
                <!--                                <option disabled>--------------</option>-->
                <!--                                <option>Excurciones</option>-->
                <!--                                <option disabled>--------------</option>-->
                <!--                                <option>Transportes</option>-->
                <!--                                <option>Taxi</option>-->
                <!--                                <option>Micro Bus</option>-->
                <!--                                <option disabled>--------------</option>-->
                <!--                                <option>Gastronomia</option>-->
                <!--                                <option>Restaurante</option>-->
                <!--                                <option>Cafeteria</option>-->
                <!--                            </select>-->
                <!--                        </div>-->
                <!--                        <div class="btn-group" >-->
                <!--                            <a style="cursor: pointer;"  class="btn btn-primary col-md-12" href="#"><em class="fa fa-plus-circle"></em> Más...</a>-->
                <!--                        </div>-->
                <button class="btn btn-info pull-right col-md-1" href="#"><em class="fa fa-search"></em> Buscar</button>
            </form>
        </div>
    </nav>

</section>

<script type="text/javascript">
    jQuery('nav.navbar-fixed-top').removeClass('nav-no-top');
    jQuery('nav.navbar-fixed-top').addClass('nav-top');
</script>
<script>
    var layoutConfig = {
        asyncPageLoaderEnabled: true,
        selectBoxHoverEnabled: true,
        bootFiltersAnimationEnabled: true,
        hoverspinPreloadingEnabled: true
    };
</script>


<?php //endif; ?>