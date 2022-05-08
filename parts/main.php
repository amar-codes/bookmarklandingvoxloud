<div class="header">
        <div class="header-wrapper">
            <div class="header-left">
                <h2>A Simple Bookmark Manager</h2>
                <p>A clean and simple interace to organize your favourite websites. Open a new browser tab and see your
                    sites load instantly. Try it for free.</p>
                <div class="button-group">
                    <a href="" class="button-get-chrome-header">Get it on Chrome</a>
                    <a href="" class="button-get-firefox-header">Get it on Firefox</a>
                </div>
            </div>

            <div class="header-right">
                <div class="header-rectangle"></div>
                <img src="<?=get_template_directory_uri()?>/assets/images/illustration-hero.svg" alt="" class="hero-illustration">
            </div>
        </div>
    </div>

    <div class="features">
        <div class="tab-left-rectangle">
            <div class="tlr-rec"></div>
        </div>
        <div class="features-wrapper">
            <h2 class="features-title">Features</h2>
            <p class="features-desc">Our aim is to make it quick and easy for you to access your favourite websites.
                Your bookmarks sync between your devices so you can access them on the go.</p>

            <div class="tab">
                <button class="tablinks" onclick="openFeatureTab(event, 'simpleBookmarking')" id="defaultOpen">Simple
                    Bookmarking</button>
                <button class="tablinks" onclick="openFeatureTab(event, 'speedysearching')">Speedy Searching</button>
                <button class="tablinks" onclick="openFeatureTab(event, 'easysharing')">Easy Sharing</button>
            </div>

            <div id="simpleBookmarking" class="tabcontent">
                <div class="tab-left">
                    <img src="<?=get_template_directory_uri()?>/assets/images/illustration-features-tab-1.svg" alt="" class="rc-img-tab">
                </div>
                <div class="tab-right">
                    <h3 class="tab-title">Bookmark in one click</h3>
                    <p class="tab-text">Organize your bookmarks however you like. Our simple drag-and-drop interface
                        gives you complete control over how you manage your favourite sites.</p>
                    <button class="tab-button">More Info</button>
                </div>
            </div>

            <div id="speedysearching" class="tabcontent">
                <div class="tab-left">
                    <img src="<?=get_template_directory_uri()?>/assets/images/illustration-features-tab-2.svg" alt="" class="rc-img-tab">
                </div>
                <div class="tab-right">
                    <h3 class="tab-title">Intelligent search</h3>
                    <p class="tab-text">Our powerful search feature will help you find saved sites in no time at all. No
                        need to trawl through all of your bookmarks.</p>
                    <button class="tab-button">More Info</button>
                </div>
            </div>

            <div id="easysharing" class="tabcontent">
                <div class="tab-left">
                    <img src="<?=get_template_directory_uri()?>/assets/images/illustration-features-tab-3.svg" alt="" class="rc-img-tab">
                </div>
                <div class="tab-right">
                    <h3 class="tab-title">Share your bookmarks</h3>
                    <p class="tab-text">Easily share your bookmarks and collections with others. Create a shareable link
                        that you can send at the click of a button.</p>
                    <button class="tab-button">More Info</button>
                </div>
            </div>
        </div>
    </div>

    <div class="downloadextension">
        <div class="dex-wrapper">
            <h2 class="dex-title">Download the extension</h2>
            <p class="dex-text">We've got more browsers in the pipeline. Please do let us know if you've got a favourite
                you'd like us to prioritize.</p>

            <div class="dex-row">
                <div class="dex-card">
                    <div class="dex-card-body">
                        <img src="<?=get_template_directory_uri()?>/assets/images/logo-chrome.svg" class="dex-icon" alt="">
                        <h3 class="dex-card-title">Add to Chrome</h3>
                        <p>Minimum version 62</p>
                    </div>
                    <div class="circle-group">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="dex-card-body">
                        <a href="" class="dex-install">Add & install Extension</a>
                    </div>
                </div>

                <div class="dex-card">
                    <div class="dex-card-body">
                        <img src="<?=get_template_directory_uri()?>/assets/images/logo-firefox.svg" class="dex-icon" alt="">
                        <h3 class="dex-card-title">Add to Firefox</h3>
                        <p>Minimum version 55</p>
                    </div>
                    <div class="circle-group">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="dex-card-body">
                        <a href="" class="dex-install">Add & install Extension</a>
                    </div>
                </div>

                <div class="dex-card">
                    <div class="dex-card-body">
                        <img src="<?=get_template_directory_uri()?>/assets/images/logo-opera.svg" class="dex-icon" alt="">
                        <h3 class="dex-card-title">Add to Opera</h3>
                        <p>Minimum version 46</p>
                    </div>
                    <div class="circle-group">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="dex-card-body">
                        <a href="" class="dex-install">Add & install Extension</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq">
        <div class="faq-wrapper">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <p class="faq-text">Here are some of our FAQs. If you have any other questions you'd like answered please
                feel free to email us.</p>

            <div class="faq-items">
                <hr>
                <?php the_field('what_is_bookmark'); ?>

                <div class="faq-item">
                    <div class="faq-item-header">
                        <h4 class="faq-item-title">
                            What is Bookmark?
                        </h4>
                        <img src="<?=get_template_directory_uri()?>/assets/images/icon-arrow.svg" alt="" id="icon-open">
                    </div>
                    <div class="faq-item-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt justo eget ultricies
                            fringilla. Phasellus blandit ipsum quis quam ornare mattis.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header" id="ah">
                        <h4 class="faq-item-title">
                            How can I request a new browser?
                        </h4>
                        <img src="<?=get_template_directory_uri()?>/assets/images/icon-arrow.svg" alt="" id="icon-open">
                    </div>
                    <div class="faq-item-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt justo eget ultricies
                            fringilla. Phasellus blandit ipsum quis quam ornare mattis.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header">
                        <h4 class="faq-item-title">
                            What is Bookmark?
                        </h4>
                        <img src="<?=get_template_directory_uri()?>/assets/images/icon-arrow.svg" alt="" id="icon-open">
                    </div>
                    <div class="faq-item-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt justo eget ultricies
                            fringilla. Phasellus blandit ipsum quis quam ornare mattis.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-item-header">
                        <h4 class="faq-item-title">
                            What is Bookmark?
                        </h4>
                        <img src="<?=get_template_directory_uri()?>/assets/images/icon-arrow.svg" alt="" id="icon-open">
                    </div>
                    <div class="faq-item-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt justo eget ultricies
                            fringilla. Phasellus blandit ipsum quis quam ornare mattis.</p>
                    </div>
                </div>
            </div>
            <a href="" class="faq-more-info">More info</a>
        </div>
    </div>

