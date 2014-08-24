<?php
	$obj = get_obj($cat, $cat."/".$item);
?>
<div class="four columns alpha item-wrapper" id="project-<?php echo $obj->id ?>">
    <div class="two columns alpha<?php echo (count($obj->images) > 1 ? " slider" : "") ?>">
        <ul class="">
        <?php 
		    foreach($obj->images as $src){
			    $output =  "<li><img src=\"{$GLOBALS['base']}/assets/images/{$src}\" class=\"item\" width=\"100%\"/></li>";
                echo $output;
		    }
	    ?>
        </ul>
    </div>
	<div class="tail two columns omega scrollblock">
		<h3 class="name">
			<?php echo $obj->name ?>
		</h3>
		<p>
			<?php echo $obj->description ?>
		</p>
		<ul class="accordion">
		    <?php if(isset($obj->sizes[0]->size)) : ?>
			<li class="pricing-table">
				<a href="#prices" class="heading">Select Size <i class="icon-open"></i></a>
				<ul class="prices">
				    <?php 
    				    foreach($obj->sizes as $size){
        				    $output =  "<li>";
                            $output .= "<a href=\"" . $size->link . "\" class=\"size-option {$item}\">" . $size->name . " " .  $size->size . " <strong class=\"price\">" . $size->price . "</strong></a>";
                            $output .= "</li>";
                            echo $output;
    				    }
				    ?>
				</ul>
			</li>
			<?php endif; ?>
			<li>
			<?php if($obj->link == "#") : ?>
			    <button class="disabled">coming soon <strong class="current-price"><?php echo $obj->sizes[0]->price ?></strong></button>
			<?php else : ?>
			<a id="buy-iceberg" href="<?php echo $obj->link ?>" class="button">buy now <strong class="current-price"><?php echo $obj->sizes[0]->price ?></strong></a>
			<?php endif; ?>
			</li>
		</ul>
		<hr>
		<?php echo call_links(array('like' => $obj->id, 'tweet'=>array('text' => $obj->name." by @egnwd", 'url' => curPageURL()))); ?>
	</div>
</div>