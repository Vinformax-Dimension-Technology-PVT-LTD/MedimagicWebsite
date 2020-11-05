<?php defined('C5_EXECUTE') or die("Access Denied.");
$themePath = $this->getThemePath();
$hideAnnouncement = $c->getAttribute('hide_announcement');
?>
<section class="section download-section" data-aos="animation">
    <div class="container">
        <div class="download video-scroll">
            <!-- <img class="download-img" src="<?php echo $themePath; ?>/dist/images/homepage/Store_image.png" alt="" /> -->
            <div class="download-content">
                <h2><span>Seeing is believing. Start today.</span></h3>
                <p class="lead"><span>with our mobile app</span></p>
                <a href="#" class="itunes"><img src="<?php echo $themePath; ?>/dist/images/ios_app_store.png" alt="itunes" /></a>
                <a href="#" class="playstore"><img src="<?php echo $themePath; ?>/dist/images/google_play.png" alt="playstore" /></a>
                <p class="small"><span>Web - coming soon…</span></p>
            </div>
        </div>
    </div>
</section>