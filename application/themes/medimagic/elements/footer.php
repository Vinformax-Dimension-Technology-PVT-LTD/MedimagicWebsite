<?php defined('C5_EXECUTE') or die("Access Denied.");
$themePath = $this->getThemePath();
$pageType = $c->getAttribute('page_type');
?>
    <!-- <div class="push"></div> Push div for making fixed footer -->

</div> <!-- closing of wrapper div from header_top.php -->



<footer data-aos="fade-up">
    <div class="container" >
        <div class="foo-contact">
            <div class="fccol fc-title">Contact</div>
            <div class="fccol fc-connect">
                <a href="mailto:info@medimagic.com">info@medimagic.com</a><br/>
                <a href="tel:+91 7676 200 300">+91 7676 200 300</a>
            </div>
        </div>
    </div>
    <div class="container" data-aos="animation">
        <div class="flex footer-container">
            <div class="foo-col">
                <div class="footer-content">
                    <a href="<?php echo View::url('/'); ?>">
                        <img src="<?php echo $themePath; ?>/dist/images/logo.png" width="164" alt="<?php echo $site; ?>"/>
                    </a>
                    <?php $a = new GlobalArea ('Footer text & social'); $a->display($c); ?>
                </div>
            </div>
            <?php $a = new GlobalArea ('Footer menu'); $a->display($c); ?>
        </div>
    </div>
    <div class="container copytext">
        <div class="row">
            <div class="col-sm-6 text-left">
                <span class="">
                © 2020 medimagic. All rights reserved.
                </span>
            </div>
            <div class="col-sm-6 text-right">
                <span class="">
                Made with ♥ by Vinfomax
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- Go to top button -->
<div id="gotoTop">
    <span class="fa fa-chevron-up" aria-hidden="true"></span>
</div>

<!-- For Landscape Alert -->
<div class="landscape-alert">
    <p>For better web experience, please use the website in portrait mode</p>
</div>

<?php $this->inc('elements/footer_bottom.php');?>
