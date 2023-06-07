<div class="col-xs-12 col-sm-12 visible-xs social-nets-movil">
    <h3 class="col-xs-4 col-sm-4 social-title"><?= __(CS_L_SHORTFOLLOW) ?></h3>

    <div class="col-xs-8 col-sm-8 social-icons-footer">
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://facebook.com" onclick="errorSocial();"
                                                     data-original-title="facebook"
                                                     class="face"></a></span>
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://twitter.com" onclick="errorSocial();"
                                                     data-original-title="twitter"
                                                     class="tweet"></a></span>
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://instagram.com" onclick="errorSocial();"
                                                     data-original-title="instagram"
                                                     class="insta"></a></span>
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://tripAdvisor.com" onclick="errorSocial();"
                                                     data-original-title="tripAdvisor"
                                                     class="tube"></a></span>
    </div>
</div>
<div class="clear"></div>
<?php include(TEMPLATEPATH . '/bottom.php'); ?>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 padding-footer">
                <div class="fcred">
                    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('siteurl'); ?>"
                                                                 title="<?php bloginfo('name'); ?>">- <?php bloginfo('name'); ?>
                        - </a>
                    <hr id="separador-footer">
                    <?php bloginfo('description'); ?>.<br/>
                    Website by Ciber-Soft
                    <?php //fflink(); ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 visible-sm padding-footer">
                <div class="fcred">
                    <h3 class="col-xs-4 col-sm-4 social-title"><?= __(CS_L_SHORTFOLLOW) ?></h3>

                    <div class="col-xs-8 col-sm-8 social-icons-footer">
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://facebook.com" onclick="errorSocial();"
                                                     data-original-title="facebook"
                                                     class="face-b"></a></span>
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://twitter.com" onclick="errorSocial();"
                                                     data-original-title="twitter"
                                                     class="tweet-b"></a></span>
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://instagram.com" onclick="errorSocial();"
                                                     data-original-title="instagram"
                                                     class="insta-b"></a></span>
        <span class="col-xs-3 col-sm-3 no-margin"><a href="https://tripAdvisor.com" onclick="errorSocial();"
                                                     data-original-title="tripAdvisor"
                                                     class="tube-b"></a></span>
                    </div>
                </div>
                <hr class="visible-sm">
                <div class="informacion-footer">
                    <a class="visible-sm"
                       href="<?= get_page_link() ?>#bc"><?= __(CS_L_INFO_VAL) ?></a>
                    <a class="visible-sm"
                       href="<?= get_page_link() ?>#bc"><?= __(CS_L_LIBRO_VISIT) ?></a>
                    <a class="visible-sm"
                       href="<?= get_page_link() ?>#bc"><?= __(CS_L_TERM_COND) ?></a>
                    <a class="visible-sm"
                       href="<?= get_page_link() ?>#bc"><?= __(CS_L_QUIENES) ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class='clear'></div>
    <?php wp_footer(); ?>
</div>
<script>
    jQuery(function($) {
        $('#loader').fadeOut(300);
    })
</script>
</body>
</html>      
