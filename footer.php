<div class="prefooter">
        <div class="prefooter-wrapper">
            <p class="prf-already-joined">35,000+ ALREADY JOINED</p>
            <h2 class="prefooter-title">Stay up-to-date with what we're doing</h2>
            <div class="form">
                <form class="newsletter-form" id="newsletterForm">
                    <div id="emailError"></div>
                    <input type="text" name="email" id="newsletterEmail" placeholder="Enter your email address">
                    <img src="images/icon-error.svg" alt="" id="errorIconEmail">
                    <button id="submitContact" name="contactus">Contact Us</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-items">
                <img src="<?=get_template_directory_uri()?>/assets/images/logo-white.svg?v=1" class="footer-logo" alt="Logo Bookmark">
                
                <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu'
             ) ); 
            ?>
            </div>

            <div class="footer-social">
                <a href="#">
                    <img src="<?=get_template_directory_uri()?>/assets/images/icon-facebook.svg" alt="" class="footer-social-item">
                </a>
                <a href="#">
                    <img src="<?=get_template_directory_uri()?>/assets/images/icon-twitter.svg" alt="" class="footer-social-item">
                </a>
            </div>
        </div>
    </footer>
    
		<script src="<?=get_template_directory_uri()?>/script.js?v=<?=rand()?>"></script>