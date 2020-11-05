<?php defined('C5_EXECUTE') or die("Access Denied.");
$themePath = $this->getThemePath();
$hideAnnouncement = $c->getAttribute('hide_announcement');
?>
<span id="layer0" class="petel petel-1"></span>
<span id="layer1" class="petel petel-2"></span>
<span id="layer3" class="petel petel-3"></span>
<span id="layer4" class="petel petel-4"></span>
<span id="layer5" class="petel petel-5"></span>
<span id="layer6" class="petel petel-6"></span>
<span id="layer7" class="petel petel-7"></span>
<span id="layer8" class="petel petel-8"></span>
<span id="layer9" class="petel petel-9"></span>
<div class="homepage">
<section class="section hero-section ">
    <div class="container hero" data-aos="animation">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
                <?php $a = new Area('Title'); $a->display($c); ?>
            </div>
        </div>
    </div>
</section>

<section class="section c-grid" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <h2 role="heading">Our Cources</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="inner">
                    <h3>Pre Clinical</h3>
                    <p>Vestibulum vitae vehicula arcu, quis tempus nunc.</p>
                </div>
            </div>
            <div class="col col-xs-12">
                <div class="inner">
                    <h3>Para Clinical</h3>
                    <p>Vestibulum vitae vehicula arcu, quis tempus nunc.</p>
                </div>
            </div>
            <div class="col col-xs-12">
                <div class="inner">
                    <h3>Clinical</h3>
                    <p>Vestibulum vitae vehicula arcu, quis tempus nunc.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section carousal mt-120">
    <div class="container">
        <div class="section-title">
            <h2 role="heading">Featured Cources</h2>
        </div>
    </div>
    <div class="container swiper-container">
       <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="inner">
                    <div class="card-image">
                        <img src="https://source.unsplash.com/1280x720/?nature" alt="Image Slider">
                    </div>
                    <div class="content">
                        <span class="c-bread">Para clinical > Anatomy > Gross Anatomy</span>
                        <h4>Distributed & remote learning</h4>
                        <p>Vestibulum vitae vehicula arcu, quis tempus nunc. Duis venenatis ac turpis rhoncus tincidunt. Nullam varius gravida lobortis. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inner">
                    <div class="card-image">
                        <img src="https://source.unsplash.com/1280x720/?nature" alt="Image Slider">
                    </div>
                    <div class="content">
                        <span class="c-bread">Para clinical > Anatomy > Gross Anatomy</span>
                        <h4>Distributed & remote learning</h4>
                        <p>Vestibulum vitae vehicula arcu, quis tempus nunc. Duis venenatis ac turpis rhoncus tincidunt. Nullam varius gravida lobortis. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inner">
                    <div class="card-image">
                        <img src="https://source.unsplash.com/1280x720/?nature" alt="Image Slider">
                    </div>
                    <div class="content">
                        <span class="c-bread">Para clinical > Anatomy > Gross Anatomy</span>
                        <h4>Distributed & remote learning</h4>
                        <p>Vestibulum vitae vehicula arcu, quis tempus nunc. Duis venenatis ac turpis rhoncus tincidunt. Nullam varius gravida lobortis. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inner">
                    <div class="card-image">
                        <img src="https://source.unsplash.com/1280x720/?nature" alt="Image Slider">
                    </div>
                    <div class="content">
                        <span class="c-bread">Para clinical > Anatomy > Gross Anatomy</span>
                        <h4>Distributed & remote learning</h4>
                        <p>Vestibulum vitae vehicula arcu, quis tempus nunc. Duis venenatis ac turpis rhoncus tincidunt. Nullam varius gravida lobortis. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section video-section start-today mt-120">
    <div class="container" data-aos="animation">
        <div class="video-scroll h545">
            <img src="<?php echo $themePath; ?>/dist/images/homepage/OurCaseStudy.jpeg"  alt="<?php echo $site; ?>"/>
            <div class="inner-content">
                <?php $a = new Area('Our Case study Title'); $a->display($c); ?>
                <a class="btn-primary" href="#">Try for Free</a> <a class="btn-default" href="#">Buy Now</a>
            </div>
        </div>
    </div>

</section>
</div>