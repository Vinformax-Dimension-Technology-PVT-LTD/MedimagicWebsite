<?php defined('C5_EXECUTE') or die("Access Denied.");

$site = Config::get('concrete.site');
$themePath = $this->getThemePath();
$pageType = $c->getAttribute('page_type');
?>

<?php $this->inc('elements/header_top.php'); ?>
<div class="mobile-nav">
</div>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-6 col-sm-3 logo">
                        <a href="<?php echo View::url('/'); ?>">
                            <img src="<?php echo $themePath; ?>/dist/images/logo.png" width="164" alt="<?php echo $site; ?>"/>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 header-right">
                    <nav>
                        <div class="menu-button visible-xs">
                            <div class="menu-button-line"></div>
                            <div class="menu-button-line"></div>
                            <div class="menu-button-line"></div>
                        </div>
                        <?php $a = new GlobalArea('Menu'); $a->display($c); ?>
                    </nav>
                    </div>
                    <div class="col-sm-3 hidden-xs header-right">
                        <ul class="menu-right">
                            <li><a href="#">Sign in</a></li>
                            <li><a href="#" class="btn-primary">Try for free</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="float-logo">
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-6 col-sm-3 logo">
                        <a href="javascript:void(0)" class="menu-on">
                            <img width="44px" src="<?php echo $themePath; ?>/dist/images/float-logo.png" width="164" alt="<?php echo $site; ?>"/>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>