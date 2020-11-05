<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
    <div class="faqs-card">
        <div class="faqs-title"><?php if (isset($title) && trim($title) != "") { ?>
    <?php echo h($title); ?><?php } ?></div>
        <div class="faqs-panel">
        <?php if (isset($description_1) && trim($description_1) != "") { ?>
        <?php echo $description_1; ?><?php } ?>
        </div>
    </div>