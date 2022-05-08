<div class="nav" id="navBar">
    <div class="nav-wrapper">
        <div class="nav-logo">
            <?php the_custom_logo(); ?>

        </div>
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu'
             ) ); 
            ?>
        <!--
                <a href="#features">
                    <li>FEATURES</li>
                </a>
                <a href="#pricing">
                    <li>PRICING</li>
                </a>
                <a href="#contact">
                    <li>CONTACT</li>
                </a>
                <a href="#contact" class="login">
                    <li>LOGIN</li>
                </a>-->
        <button id="menuMobileBtn"><img src="<?=get_template_directory_uri()?>/assets/images/icon-hamburger.svg"
                alt=""></button>
        <div id="menuMobileBox">
            <div class="menu-mobile-header">
                <img src="<?=get_template_directory_uri()?>/assets/images/logo-full-white.svg?v=5" alt="">
                <img src="<?=get_template_directory_uri()?>/assets/images/icon-close.svg" alt="" id="closeMenu">
            </div>
            <div class="menu-mobile-list">
            <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu'
             ) ); 
            ?>
                <ul class="login-list">
                    <a href="" class="mobile-login">LOGIN</a>
                </ul>
            </div>
            <div class="menu-mobile-social">
                <a href="#">
                    <img src="<?=get_template_directory_uri()?>/assets/images/icon-facebook.svg" alt=""
                        class="footer-mob-social-item">
                </a>
                <a href="#">
                    <img src="<?=get_template_directory_uri()?>/assets/images/icon-twitter.svg" alt=""
                        class="footer-mob-social-item">
                </a>
            </div>
        </div>
    </div>
</div>