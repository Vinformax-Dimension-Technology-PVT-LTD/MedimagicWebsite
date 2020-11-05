
<?php
	defined('C5_EXECUTE') or die("Access Denied.");
	$page = $c;
    $pageType = $page->getAttribute('page_type');

    switch ($pageType) {
	    case 'home':
	        $this->inc('elements/pages/homepage.php');
	        break;
        case 'student':
	        $this->inc('elements/pages/student.php');
            break;
        case 'courses':
            $this->inc('elements/pages/courses.php');
            break;
        case 'institutions':
	        $this->inc('elements/pages/institutions.php');
            break;
        case 'pricing':
	        $this->inc('elements/pages/pricing.php');
            break;
        case 'lms':
	        $this->inc('elements/pages/lms.php');
            break;
        case 'support':
	        $this->inc('elements/pages/support.php');
            break;
    }
    ?>
<?php $a = new Area('Main'); $a->enableGridContainer(); $a->display($c); ?>
