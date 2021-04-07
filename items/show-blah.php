<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

    

<!-- The following returns all of the files associated with an item. -->
<?php if (metadata('item', 'has files') && (get_theme_option('Item FileGallery') == 1)): ?>
<!-- <div id="itemfiles" class="element">
    <h3>php echo __('Files'); ?></h3>
    <div class="element-text">php echo item_image_gallery(); ?></div>
</div> -->
<?php endif; ?>

<?php $itemFiles = $item->Files; ?>

<div class="element-text files-full"><?php echo files_for_item(array('imageSize' => 'fullsize')); ?></div>

    <?php if (count($itemFiles) == "1"): ?>
        <!-- <div class="element-text files-full"><php echo files_for_item(array('imageSize' => 'fullsize')); ?></div> -->
    <?php elseif (count($itemFiles) > "1"):
        $pdf = 0;
       // foreach($itemFiles as $itemFile):
            //if (strpos($itemFile["filename"], '.pdf') != false):
                /* fire_plugin_hook('book_reader_item_show', array(
                    'view' => $this,
                    'item' => $item,
                    'page' => '0',
                    'embed_functions' => false,
                    'mode_page' => 1,
                )); */
                // Display the viewer with the specified item and specified options.
    // The options for UV are directly passed to the partial, so they are
    // available in the theme and set for the viewer.
    //echo $this->universalViewer($item);
                $pdf = 1;
            endif;
       // endforeach;
        if ($pdf == 0):
            echo "<div class='element-text files-full'>";
            echo files_for_item(array('imageSize' => 'fullsize')); 
            echo "</div>";
        endif;
     ?>
    <?php endif ?>

    <div id="item-metadata">
        <?php echo all_element_texts('item'); ?>
    </div>



<!-- If the item belongs to a collection, the following creates a link to that collection. -->
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <h3><?php echo __('Collection'); ?></h3>
    <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
</div>
<?php endif; ?>

<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')): ?>
<div id="item-tags" class="element">
    <h3><?php echo __('Tags'); ?></h3>
    <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif;?>

<!-- The following prints a citation for this item. -->
<div id="item-citation" class="element">
    <h3><?php echo __('Citation'); ?></h3>
    <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div>

<!-- Available output formats --> 
<div id="item-output-formats" class="element">
    <h2><?php echo __('Output Formats'); ?></h2>
    <div class="element-text"><?php echo output_format_list(); ?></div>
</div>

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<nav>
<ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>
</nav>

<?php echo foot(); ?>
