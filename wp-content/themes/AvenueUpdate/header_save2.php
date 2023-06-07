<?php include (TEMPLATEPATH . '/language.php'); ?>
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
    <div class="col-sm-8 col-md-9  column-slider">
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

                                    <p>podrá visitar la tierra del mejor tabaco del mundo</p>
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
                                    <h2><span>Cabaret Parisien</span>, Hotel Nacional de Cuba</h2>

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
    <div class="col-sm-4 col-md-3 column-slider">
        <div class="item asideTop">
                <h3><em class="fa fa-search"></em>
<!--                    Forma sencilla de Traducir texto-->
                    <?=__(L_ENCUENTRELO)?>
                    </h3>
            <div class="findbox">
                <form id="form_search" role="form">
                    <label class="label label-warning col-xs-12 col-sm-12 col-md-12" style="margin: 0"><?=__(CS_L_BUSCAR)?></label>
                    <input class="form-control" name="find_q" placeholder="<?=__(CS_L_PLACEHOLDER)?>">
                    <div class="btn-group">
                        <label class="label label-warning col-xs-4 col-sm-4 col-md-4" style="margin: 0"><?=__(CS_L_TIPO)?></label>
                        <select class="col-xs-8 col-sm-8 col-md-8" style="margin: 0" name="find_element">
                            <option><?=__(CS_L_ALL)?></option>
                            <option><?=__(CS_L_CIRCUITOS)?></option>
                            <option><?=__(CS_L_OVERNIGHT)?></option>
                            <option><?=__(CS_L_EXCURSIONES)?></option>
                        </select>
                    </div>
<!--                    <div class="btn-group">-->
<!--                        <label class="label label-warning col-xs-4 col-sm-4 col-md-4" style="margin: 0;">--><?//=__(CS_L_PRECIO)?><!--</label>-->
<!--                        <select class="col-xs-4 col-sm-4 col-md-4" style="margin: 0;  border-right:1px solid #DD5600;" name="find_element">-->
<!--                            <option>10 CUC</option>-->
<!--                            <option>30 CUC</option>-->
<!--                            <option>60 CUC</option>-->
<!--                            <option>120 CUC</option>-->
<!--                        </select>-->
<!--                        <select class="col-xs-4 col-sm-4 col-md-4" style="margin: 0" name="find_element">-->
<!--                            <option>30 CUC</option>-->
<!--                            <option>60 CUC</option>-->
<!--                            <option>120 CUC</option>-->
<!--                            <option>300 CUC</option>-->
<!--                        </select>-->
<!--                    </div>-->

                </form>
                <a name="bc"></a>
                <div class="btn-group col-md-10 col-xs-12 col-sm-10 col-md-offset-1 col-sm-offset-2 col-xs-offset-0">
                    <button type="submit" class="btn btn-danger col-xs-10 col-sm-12 col-md-12">
                        <em class="fa fa-search"></em><?=__(CS_L_BUTTONSEARCH)?></b>
                    </button>

<!--                    <button type="button" class="btn col-md-2 btn-primary" style="border-left: solid #3c3f41 1px; padding: 4px 0">-->
<!--                        <em class="fa fa-2x fa-plus-circle"></em></b>-->
<!--                    </button>-->
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

    <nav class="navbar navbar-default <?php echo $navclass; ?>" role="navigation">
        <div class="navbar-header">
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
            <a class="navbar-brand" href="#"><em href="#" class="fa fa-info-circle"></em> <?=__(CS_L_BREADCRUMB)?></a>
        </div>

        <div  style="margin-top: 5px">
            <ol class="breadcrumb">
            <?php echo $bc ?>
            </ol>
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
<div class="modal fade" id="cs_mvc_loader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?=__('CS_L_PROCESS')?> ...</h4>
            </div>
            <div class="modal-body">
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100% Complete</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
<!--                <a href="#" class="btn btn-danger">Cancel</a>-->
                <a href="#" class="btn btn-primary disabled">OK</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
