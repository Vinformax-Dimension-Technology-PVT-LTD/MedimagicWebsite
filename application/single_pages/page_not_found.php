<?php defined('C5_EXECUTE') or die("Access Denied.");
    $th = Loader::helper('text');
    $c = Page::getCurrentPage();
    $ih = Loader::helper('image');
    $page = $c = Page::getCurrentPage();
    $themePath = $this->getThemePath();
?>

<main class="page-not-found">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                    <h3><?php echo t('Sorry, Looks like the page you are looking for could not be found') ?></h3>
                    <a href="/" class="btn btn-primary">Go to Homepage</a>
            </div>
        </div>
    </div>
</main>
