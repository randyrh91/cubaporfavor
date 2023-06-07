/**
 * Created by Ciber-Soft on 17-sep-16.
 */
function rating(estrellas, path, id) {
    var self = this;
    var $ = jQuery;
    $div = $('#alertar-' + id);
    if ($div['0'] && $div.css('display') == 'none') {
        $div.show('slow');
        $.post(path, {id: id, estrellas: estrellas}, function (response) {
            if (response.success) {

            }
        });
    }
}
jQuery(function ($) {
    //Busqueda
    $('#desplegarBusqueda').click(function () {
        var icono = $('#desplegarBusqueda h3 em');
        var coll = $('#collapseSearch').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });
    $('#descripAcordionLarge').click(function(){
        var icono = $('#descripAcordionLarge h3 em');
        var coll = $('#collapseDescReservaLarge').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });
    $('#programaAcordionLarge').click(function(){
        var icono = $('#programaAcordionLarge h3 em');
        var coll = $('#collapseProgramReservaLarge').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });
    $('#popularidadAcordionLarge').click(function(){
        var icono = $('#popularidadAcordionLarge h3 em');
        var coll = $('#collapsePopReservaLarge').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });

    $('#descripAcordion').click(function(){
        var icono = $('#descripAcordion h3 em');
        var coll = $('#collapseDescReserva').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });
    $('#programaAcordion').click(function(){
        var icono = $('#programaAcordion h3 em');
        var coll = $('#collapseProgReserva').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });
    $('#popularidadAcordion').click(function(){
        var icono = $('#popularidadAcordion h3 em');
        var coll = $('#collapsePopReserva').attr("class");
        if (coll == "panel-collapse collapse") {
            icono.removeClass('fa-angle-double-down');
            icono.addClass('fa-angle-double-up');
        } else {
            icono.removeClass('fa-angle-double-up');
            icono.addClass('fa-angle-double-down');
        }
    });

    $('span.stars>span.fa').click(function () {
        $(this).parent().children('span.fa').addClass('star-rating-hidden');
        $(this).parent().parent().children('b.star-rating').addClass('star-rating-hidden');
    });
});

//trabajo para mantener panel estatico
jQuery(function ($) {
    var $content = $('#content'), $right = $('#right');

    var height = window.innerHeight * 1;
    var hdiv_content = $content[0].clientHeight * 1,
        ydiv_content = $content[0].offsetTop,
        thdiv_content = ydiv_content + hdiv_content,
        hdiv_right = ($right[0]) ? $right[0].clientHeight * 1 : 0,
//  		ydiv_right = $right[0].offsetTop,
        ydiv_right = ydiv_content,
        thdiv_right = ydiv_right + hdiv_right,
    //es para saber quien es + alto el right o content
        flag = hdiv_right > hdiv_content,
    //comprobando de que ya esta pasado entonces debe estar fijo
        flag_fijo = window.scrollY * 1 > thdiv_content - height;
    flag_igual = false;

    function fijarPaneles(event) {
        if (window.innerWidth < 768) {
            var logo = $('#logoPortada');
            if (window.scrollY > 20) {
                logo.fadeOut('normal');
            }
            else {
                logo.fadeIn('normal');
            }
        }
        if ($right && window.innerWidth > 991) {
            height = window.innerHeight * 1;
            if (flag) {
                //ydiv_content = $content[0].offsetTop;
                //thdiv_content = ydiv_content + hdiv_content;
                if (window.scrollY * 1 > thdiv_content - height) {
                    flag_igual = window.scrollY * 1 >= thdiv_right - height;
                    if (flag_igual) {
                        $content.css({
                            position: 'relative',
                            left: 0, top: hdiv_right - hdiv_content
                        });
                    }
                    else {
                        $content.css({
                            position: 'fixed',
//                            left: 0, top: ((ydiv_content - offsetScroll))
                            left: 0, top: height - hdiv_content
                        });

                    }


                    //alert(ydiv_content+"-"+hdiv_content+"-"+window.scrollY);
                } else {
                    $content.css({
                        position: 'relative',
                        left: 0, top: 0
                    });
                    //flag_fijo = false;
                }
            }
            else {
                if (window.scrollY > ydiv_right + hdiv_right - height) {
                    flag_igual = window.scrollY * 1 >= thdiv_content - height;
                    if (flag_igual) {
                        $right.css({
                            position: 'relative',
                            right: 0, top: hdiv_content - (hdiv_right)
                        });
                    }
                    else {
                        $right.css({
                            position: 'fixed',
                            right: 0, top: height - hdiv_right
                        });

                    }
                } else {
                    $right.css({
                        position: 'relative',
                        right: 0, top: 0
                    });
                    //flag_fijo = false;
                }

            }
        }
    }

    function calculoParametros() {
        if ($right[0]) {
            hdiv_content = $content[0].clientHeight * 1,
                ydiv_content = $content[0].offsetTop,
                thdiv_content = ydiv_content + hdiv_content,
                hdiv_right = $right[0].clientHeight * 1,
//  		ydiv_right = $right[0].offsetTop,
                ydiv_right = ydiv_content,
                thdiv_right = ydiv_right + hdiv_right,
                //es para saber quien es + alto el right o content
                flag = hdiv_right > hdiv_content,
                //comprobando de que ya esta pasado entonces debe estar fijo
                flag_fijo = window.scrollY * 1 > thdiv_content - height;
            flag_igual = false;
            fijarPaneles();
        }
    }

    fijarPaneles();
    setTimeout(calculoParametros, 3000);
    if ($right[0]) {
        window.onscroll = fijarPaneles;
        window.onresize = calculoParametros;
    }

});



