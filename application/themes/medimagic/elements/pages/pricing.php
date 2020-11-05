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
            <div class="col-md-12 text-center">
                <?php $a = new Area('Title'); $a->display($c); ?>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section">
    <div class="ps-nav">
        <div class="container stickey-cont">
            <h5>Which plan is right for you?</h5>
            <ul class="s-nav">
                <li class="students-nav active"><a href="#">For Students</a></li>
                <li class="institutions-nav"><a href="#">For Institutions</a></li>
            </ul>
        </div>
    </div>
    
    <div class="p-content students-container">
        <div class="container">
            <div class="row">
                <div class="pricing-table">
                    <div class="flex table-heading">
                        <div class="flex-col">
                            <h3>Pick a Plan</h3>
                            <div class="flex switch-cont">
                                <div class="val yearly">Yearly</div>
                                <div class="switch-radio">
                                    <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="val monthly">Monthly</div>
                            </div>
                        </div>
                        <div class="flex-col">
                            <h2>Basic</h2>
                            <div class="monthly-subs">
                                <span class="old-price">₹899</span>
                                <div class="price"><span class="sub">₹</span><span class="num" data-count="349">249</span><span class="sub">/mo</span></div>
                                <a href="javascript:void()" class="btn-default">Choose Plan</a>
                                <a href="#">Get started</a>
                            </div>
                            <div class="yearly-subs" style="display: none">
                                <span class="old-price">₹799</span>
                                <div class="price"><span class="sub">₹</span><span class="num" data-count="249">349</span><span class="sub">/mo</span></div>
                                <a href="javascript:void()" class="btn-default">Choose Plan</a>
                                <a href="#">Get started</a>
                            </div>
                        </div>
                        <div class="flex-col">
                        <span class="badge">Most popular</span>
                            <h2>Lite</h2>
                            <div class="monthly-subs">
                                <span class="old-price">₹1299</span>
                                <div class="price"><span class="sub">₹</span><span class="num"  data-count="549">449</span><span class="sub">/mo</span></div>
                                <a href="javascript:void()" class="btn-default">Choose Plan</a>
                                <a href="#">Get started</a>
                            </div>
                            <div class="yearly-subs" style="display: none">
                                <span class="old-price">₹1299</span>
                                <div class="price"><span class="sub">₹</span><span class="num" data-count="449">549</span><span class="sub">/mo</span></div>
                                <a href="javascript:void()" class="btn-default">Choose Plan</a>
                                <a href="#">Get started</a>
                            </div>
                        </div>
                        <div class="flex-col">
                            <h2>Pro</h2>
                            <div class="monthly-subs">
                                <span class="old-price">₹1999</span>
                                <div class="price"><span class="sub">₹</span><span class="num" data-count="649">749</span><span class="sub">/mo</span></div>
                                <a href="javascript:void()" class="btn-default">Choose Plan</a>
                                <a href="#">Get started</a>
                            </div>
                            <div class="yearly-subs" style="display: none">
                                <span class="old-price">₹1999</span>
                                <div class="price"><span class="sub">₹</span><span class="num" data-count="749">649</span><span class="sub">/mo</span></div>
                                <a href="javascript:void()" class="btn-default">Choose Plan</a>
                                <a href="#">Get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Courses</div>
                        <div class="flex-col">3</div>
                        <div class="flex-col">5</div>
                        <div class="flex-col">Full Access</div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">3D Animations</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Video Quality</div>
                        <div class="flex-col">Good</div>
                        <div class="flex-col">Better</div>
                        <div class="flex-col">Best</div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Resolution</div>
                        <div class="flex-col">480p</div>
                        <div class="flex-col">720p</div>
                        <div class="flex-col">1080p</div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Watch on your mobile phone and tablet </div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Watch on your laptop and TV </div>
                        <div class="flex-col">-</div>
                        <div class="flex-col">-</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Devices you can use at the same time</div>
                        <div class="flex-col">1</span></div>
                        <div class="flex-col">1</div>
                        <div class="flex-col">2</div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Offline Downloads</div>
                        <div class="flex-col">-</span></div>
                        <div class="flex-col">Limited<span class="sup scrollToEle" data-id="plus">+</span></div>
                        <div class="flex-col">Unlimited</div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Tests </div>
                        <div class="flex-col">-</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Notes </div>
                        <div class="flex-col">-</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Webinars </div>
                        <div class="flex-col">-</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Analytics </div>
                        <div class="flex-col">-</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Ad-free </div>
                        <div class="flex-col">-</div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                    <div class="flex table-body">
                        <div class="flex-col">Support </div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                        <div class="flex-col"><span class="tick-mark"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-100">
<div class="container">
    <h2 role="heading"><span>Trusted by</span></h2>
</div>
<div class="container">
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

<section class="section mt-100">
    <div class="container">
        <h2 role="heading"><span>FAQs</span></h2>
    </div>
    <div class="container">
        <div class="faqs">
            <?php $a = new GlobalArea('FAQ'); $a->display($c); ?>
        </div>
    </div>
</section>
<?php include('app.php'); ?>
<section class="terms mt-100 scrollEle" id="terms">
    <div class="container">
        <p>* Sed porta a arcu eu rutrum. Sed id risus arcu. Vivamus ex mi, ullamcorper ac porttitor non, venenatis quis tellus. Donec sollicitudin quis tortor a dignissim. Ut id suscipit enim. Cras hendrerit lectus rutrum eleifend maximus. Vivamus feugiat ex metus, at condimentum mauris congue id. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla imperdiet fermentum risus, et commodo mauris hendrerit at. Nulla ornare, turpis volutpat placerat lobortis, mi velit ornare purus, et pretium sem ex at magna. Aliquam eu risus fringilla, lacinia odio vitae, accumsan arcu. In hendrerit imperdiet nulla quis semper. Mauris sed felis sapien. Integer ornare felis sed pellentesque posuere. Vestibulum pretium nisl eget erat gravida, eget viverra diam commodo.</p>
        <p>+ Sed porta a arcu eu rutrum. Sed id risus arcu. Vivamus ex mi, ullamcorper ac porttitor non, venenatis quis tellus. Donec sollicitudin quis tortor a dignissim. Ut id suscipit enim. 
Cras hendrerit lectus rutrum eleifend maximus. Vivamus feugiat ex metus, at condimentum mauris congue id. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla imperdiet fermentum risus, et commodo mauris hendrerit at. Nulla ornare, turpis volutpat placerat lobortis, mi velit ornare purus, et pretium sem ex at magna. Aliquam eu risus fringilla, lacinia odio vitae, accumsan arcu. In hendrerit imperdiet nulla quis semper. Mauris sed felis sapien. Integer ornare felis sed pellentesque posuere. Vestibulum pretium nisl eget erat gravida, eget viverra diam commodo.</p>
    </div>
</section>

</div>