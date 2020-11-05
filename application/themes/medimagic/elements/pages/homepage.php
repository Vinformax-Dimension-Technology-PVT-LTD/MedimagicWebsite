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
            <div class="col-md-8 offset-md-2 text-center">
                <?php $a = new Area('Title'); $a->display($c); ?>
            </div>
        </div>
    </div>
</section>
<section id="video1" class="section video-section" >
    <div class="container" data-aos="animation" data-aos-offset="400">
        <div class="video-scroll h600">
            <img src="<?php echo $themePath; ?>/dist/images/homepage/GirlWithLaptop.jpeg"  alt="<?php echo $site; ?>"/>
            <div class="inner-content">
                <?php $a = new Area('3d Learning Title'); $a->display($c); ?>
                <a class="video-link" href="#">Watch the video</a>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="#" class="btn-default">+ See how 3D makes a difference in learning</a>
    </div>
</section>

<section class="section features mt-120" data-aos="animation">
    <div class="container col-2-container">
        <div class="row">
            <div class="col-sm-6 col1">
                <?php $a = new Area('Features title'); $a->display($c); ?>

                <ul class="feature-items" data-aos="fade-up">
                    <li class="feature-item active">
                        <h3>Accurate, reliable content</h3>
                        <p>Over 150 hours of compelling video visual content reviewed by top-notch medical experts</p>
                    </li>
                    <li class="feature-item">
                        <h3>Precise, and  hyper-realistic visuals</h3>
                        <p>Over 150 hours of compelling video visual content reviewed by top-notch medical experts</p>
                    </li>
                    <li class="feature-item">
                        <h3>Interactive learning</h3>
                        <p>Over 150 hours of compelling video visual content reviewed by top-notch medical experts</p>
                    </li>
                    <li class="feature-item">
                        <h3>Curriculum based approachcourses</h3>
                        <p>Over 150 hours of compelling video visual content reviewed by top-notch medical experts</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="img-col-right">
        <img src="<?php echo $themePath; ?>/dist/images/homepage/skelton.png"  alt=""/>
        <?php $a = new Area('Features'); $a->display($c); ?>
    </div>
</section>

<section class="section video-section case-study">
    <div class="container" data-aos="animation">
        <div class="video-scroll h545">
            <img src="<?php echo $themePath; ?>/dist/images/homepage/OurCaseStudy.jpeg"  alt="<?php echo $site; ?>"/>
            <div class="inner-content">
                <?php $a = new Area('Our Case study Title'); $a->display($c); ?>
                <a class="video-link" href="#">Watch the video</a>
            </div>
        </div>
    </div>
    <div class="flex case-study-feature mt-6">
        <div class="col">
            <div class="cs-icon">
                <img src="<?php echo $themePath; ?>/dist/images/heart@3x.svg"  alt=""/>
            </div>
            <div class="cs-text">
                <p>More than</p>
                <p class="num">70,000</p>
                <p>students from over 500 medical colleges </p>
            </div>
        </div>
        <div class="col" >
            <div class="cs-icon">
                <img src="<?php echo $themePath; ?>/dist/images/video@3x.svg"  alt=""/>
            </div>
            <div class="cs-text">
                <p>Featuring</p>
                <p class="num">100%</p>
                <p>authentic content from renowned medical experts </p>
            </div>
        </div>
    </div>
</section>
<section class="section testimonial">
    <div class="container">
        <div class="slider testimonial-slider">
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
            <div class="item">
                <p>“The animations help the student comprehend the intricacies of the subject in a much better way, and the knowledge so gained is long lasting.”</p>
                <h4 class="name">Dr V Balasubramanyam</h4>
                <span class="clearfix"></span>
                <span class="desig">Professor and Head, Department of Anatomy, St. Johns Medical College</span>
            </div>
        </div>
        <div class="slider testimonial-nav">
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
            <div class="item"><img src="<?php echo $themePath; ?>/dist/images/pexels-pixabay.jpg" alt="" /></div>
        </div>
    </div>
</section>
<?php include('app.php'); ?>
</div>