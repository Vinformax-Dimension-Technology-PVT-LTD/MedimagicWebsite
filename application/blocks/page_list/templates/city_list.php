<?php defined('C5_EXECUTE') or die("Access Denied.");
    $th = Loader::helper('text');
    $c = Page::getCurrentPage();
    $ih = Loader::helper('image');
?>
<div class="list-items">
<?php foreach ($pages as $page):
			    $title = $th->entities($page->getCollectionName());
			    $thumb = $page->getAttribute('thumbnail');
				$img = $ih->getThumbnail($thumb, 1000, 1000, false);
				$link = $th->entities($page->getCollectionPath() );

			?>
				<div class="list" data-aos="fade-up">
                <!-- <a href="<?php echo View::url($link); ?>"> -->
					<img src="<?php echo $img->src; ?>" alt="city"> 
					<h3><?php echo $title; ?></h3>
                <!-- </a>		 -->
				</div>
            <?php endforeach; ?>
            
</div>