<?php /** The footer template */?>

<footer id="footer">
    <section id="find-me">
        <h3>Vind mij op</h3>
        <ul>
            <li>
                <a href="http://www.facebook.com">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icons/facebook31.svg" alt="Lesley's facebook"/>
                </a>
            </li>
            <li>
                <a href="http://www.linkedin.com">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icons/linkedin11.svg" alt="Lesley's Linkedin"/>
                </a>
            </li>
            <li>
                <a href="http://www.twitter.com">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icons/twitter21.svg" alt="Lesley's Twitter"/>
                </a>
            </li>
            <li>
                <a href="http://www.github.com">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icons/github13.svg" alt="Lesley's Github"/>
                </a>
            </li>
        </ul>
    </section>

    <section id="talk-to-me">
        <h3>Neem contact op met mij via</h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/LesleyDuyndam_head.svg" alt="Lesley Duyndam logo"/>
        <ul>
            <li><h4>Lesley Duyndam</h4></li>
            <li><h5>Direct contact</h5></li>
            <li>lesleyduyndam@gmail.com</li>
            <li>+316 4546 0121</li>
            <li><h5>Postadres</h5></li>
            <li>Professor Verbernelaan 112-06</li>
            <li>5037AK, Tilburg</li>
        </ul>
    </section>

    <section id="follow-me">
        <h3>Nieuwsbrief</h3>
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="//lesleyduyndam.us9.list-manage.com/subscribe/post?u=983194f7b56790d91adcf6e7f&amp;id=4c205abb2a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                        <input type="email" value="" placeholder="lesleyduyndam@gmail.com" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;">
                        <input type="text" name="b_983194f7b56790d91adcf6e7f_4c205abb2a" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">Meld je nu aan!</button>
                    </div>
                </div>
            </form>
        </div>
        <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->

    </section>
    <?php
        wp_footer();
    ?>
</footer>
</body>
</html>