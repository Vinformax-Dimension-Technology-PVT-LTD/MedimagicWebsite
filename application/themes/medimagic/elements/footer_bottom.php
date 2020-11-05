<?php defined('C5_EXECUTE') or die("Access Denied.");
$htmlHelper = Loader::helper('html');
?>
	<?php
		// $this->addFooterItem($htmlHelper->javascript('all.js'));
		// $this->addFooterItem($htmlHelper->javascript('custom.js'));
		$this->addFooterItem($htmlHelper->javascript('//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'));
		$this->addFooterItem($htmlHelper->javascript('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'));
		$this->addFooterItem($htmlHelper->javascript('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js'));
		$this->addFooterItem($htmlHelper->javascript('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.debug.js'));
		//$this->addFooterItem($htmlHelper->javascript('map.js'));
	?>

	<!-- Uncomment below if you need to add google captcha (also in custom.js)
	<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
	-->

	<!-- core js files -->
	<?php View::element('footer_required'); ?>


	</body>
</html>
