<?php     defined('C5_EXECUTE') or die("Access Denied.");
	$c = Page::getCurrentPage();
	if($c instanceof Page) {
		$cID = $c->getCollectionID();
	}
	$files = $controller->getFileSet();
	$imgHelper = Loader::helper('image'); 
?>
<?php   if (!empty($files)) {  ?>

	<div class="partners-logo">
		<?php foreach($files as $f) { 
			$fp = new Permissions($f);
			$title = $f->getAttribute('title');
			$description = $f->getAttribute('description');
		?>
                <?php if ($fp->canViewFile()) {
					$thumb = $imgHelper->getThumbnail($f, 1000,1000, false);
                ?>
				    <div class="logo-item" data-aos="fade-up">
						<img src="<?=$thumb->src;?>" alt="gallery" />
					</div>
					
				<?php } ?>
		<?php } ?>

	</div>
			
<?php } ?>	