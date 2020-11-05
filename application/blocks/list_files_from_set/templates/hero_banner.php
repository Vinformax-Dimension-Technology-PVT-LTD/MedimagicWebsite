<?php     defined('C5_EXECUTE') or die("Access Denied.");
	$c = Page::getCurrentPage();
	$pageType = $c->getAttribute('page_type');
	if($c instanceof Page) {
		$cID = $c->getCollectionID();
	}
	$files = $controller->getFileSet();
	$imgHelper = Loader::helper('image'); 
?>
<?php   if (!empty($files)) {  ?>

	<div class="hero-banner">
		<?php foreach($files as $f) { 
			$fp = new Permissions($f);
			$title = $f->getAttribute('title');
			$description = $f->getAttribute('description');
			$artitle = $f->getAttribute('ar_title');
			$ardescription = $f->getAttribute('ar_description');
		?>
			<div class="slick-slide">
                <?php if ($fp->canViewFile()) {
					$thumb = $imgHelper->getThumbnail($f, 2000,2000, false);
                ?>
				    <div class="img-container">
						<img src="<?=$thumb->src;?>" alt="gallery" />
					</div>
					
				<?php } ?>
			</div>
		<?php } ?>

	</div>
			
<?php } ?>	
