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

<section class="stickey-section instructions-section">
    <div class="stickey-nav">
        <div class="container stickey-cont">
            <h5>Institutions</h5>
            <ul class="s-nav">
                <li class="d3dpin-nav active"><a href="#">Stereoscopic 3D</a></li>
                <li class="xmls-nav"><a href="#">Learning Management System</a></li>
            </ul>
        </div>
    </div>
    
    <div class="s-content d3dpin-container">
    <img class="d3dpin" src="<?php echo $themePath; ?>/dist/images/3dimg.png"  alt=""/>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>medimagic S3D™</h4>
                    <h2>Nothing beats this.
                    Breathtaking Stereoscopic 3D.</h2>
                    <p class="lead">Stunning depth perception and multi-angle visualization for an unparalleled learning experience.</p>
                </div>
            </div>
        </div>
        <div class="container mt-100">
            <div class="row">
                <div class="col-md-8">
                    <h2>Features</h2>
                    <p class="lead">World's first stereoscopic medical educator aligned to the curriculum with a seamless, authentic, high-resolution, and real-like 3D animations.</p>
                    <p class="lead">- Powerful content with maximum visual immersion</p>
                    <p class="lead">- Audio and visuals resulting in higher retention span</p>
                    <p class="lead">- Connect to learners at an individual level</p>
                    <p class="lead">- Pre-learning with S3D makes your classes more interactive</p>
                </div>
            </div>
        </div>
        <div class="container mt-100">
            <div class="row">
                <div class="col-md-8">
                    <h2>Technnology</h2>
                    <p class="lead">- 3D DLP® Laser Projector</p>
                    <p class="lead">- Silver Screen</p>
                    <p class="lead">- 3D Pro-Display</p>
                    <p class="lead">- 3D Glasses</p>
                    <p class="lead">- Pro Audio Equipment</p>
                    <p class="lead">- S3D™ e-Link Server</p>
                </div>
            </div>
        </div>
    </div>
    <div class="s-content xlms-container mt-100">
    <img class="xmls" src="<?php echo $themePath; ?>/dist/images/xlms.png"  alt=""/>
        <div class="container">
            <div class="row">
            <div class="offset-md-6 col-md-7">
                    <h4>medimagic XLMS</h4>
                    <h2>The real institutional power lies here.</h2>
                    <p class="lead">Inclusive learning ecosystem with a tailor-made extended LMS for medical education.</p>
                </div>
            </div>
        </div>
        <div class="container mt-100">
            <div class="row">
            <div class="offset-md-6 col-md-7">
                    <h2>Features</h2>
                    <p class="lead">Built on a learning platform focused on collaborative learning. The perfect transition to online teaching with the brand new medimagic XLMS.</p>
                    <p class="lead">- Go live, schedule online video classes, and record sessions without leaving the XLMS</p>
                    <p class="lead">- Monitor student engagement, attendance, and review their academic performance.</p>
                    <p class="lead">- Online formative assessments with notes, presentations, and tests for effective self-directed learning</p>
                    <p class="lead">- Comes with all of medimagic's course-content, including videos, notes, and tests.</p>
                    <p class="small mt-80">Institutions can add unlimited custom courses, tests, and notes. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section benifits" data-aos="animation">
    <div class="container">
        <?php $a = new Area('Profit title'); $a->display($c); ?>  

        <div class="course-lists">
            <div class="list">
                <div class="item item-1">
                    <h3>Competency-based curriculum</h3>
                    <p>Rich 3D content introducing problem-based learning built on the MCI curriculum, including notes and assessments, ensures that lecturers always have a head-start in the curriculum.</p>
                    <a href="#" class="btn-default mt-1">See all cources</a>
                </div>
                <div class="item item-2">
                    <img src="<?php echo $themePath; ?>/dist/images/iphone-placeholder.png"  alt="iphone placeholder"/>
                </div>
            </div>
            <div class="list">
                <div class="item item-1">
                    <h3>Track progress</h3>
                    <p>Easy monitoring of students' interaction and engagement, creating a holistic learning environment and empowering students through proven techniques of learning.</p>
                </div>
                <div class="item item-2">
                    <img src="<?php echo $themePath; ?>/dist/images/iphone-placeholder.png"  alt="iphone placeholder"/>
                </div>
            </div>
            <div class="list">
                <div class="item item-1">
                    <h3>Immersive 3D to enhance the power of words</h3>
                    <p>MediMagic's courses are designed after researching cognitive learning habits and are consistent with Mayer's principles of multimedia learning.</p>
                </div>
                <div class="item item-2">
                    <img src="<?php echo $themePath; ?>/dist/images/iphone-placeholder.png"  alt="iphone placeholder"/>
                </div>
            </div>
            <div class="list">
                <div class="item item-1">
                    <h3>Creates an impactful learning environment</h3>
                    <p>Personalized learning is the need of the hour. Ensure every student receives equal attention, irrespective of where they sit in the class.</p>
                </div>
                <div class="item item-2">
                    <img src="<?php echo $themePath; ?>/dist/images/iphone-placeholder.png"  alt="iphone placeholder"/>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section video-section case-study">
    <div class="container" data-aos="animation">
        <div class="video-scroll h545">
            <img src="<?php echo $themePath; ?>/dist/images/homepage/OurCaseStudy.jpeg"  alt="<?php echo $site; ?>"/>
            <div class="inner-content">
                <?php $a = new Area('Our Case study Title'); $a->display($c); ?>
                <a class="btn-primary" href="#">Try for Free</a>
            </div>
        </div>
    </div>

</section>
<section class="section partners">
    <div class="container">
    <?php $a = new Area('brand logo'); $a->display($c); ?>
    </div>
</section>
<section class="section testimonial">
    <div class="container">
        <div class="slider testimonial-slider" data-aos="fade-up">
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
        <div class="slider testimonial-nav" data-aos="fade-up">
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
</div>