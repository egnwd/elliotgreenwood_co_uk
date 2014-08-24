<?php
	$obj = get_obj($cat, $project);
?>
<h2><?php echo $obj->name ?></h2>
<div class="four columns">
    <dl class="one third alpha">
        <dt>
            About the Project
        </dt>
        <dd>
            <?php echo $obj->description ?>
        </dd>
    </dl>
    <dl class="one third">
        <dt>
            My Role
        </dt>
        <dd>
            <?php echo $obj->role ?>
        </dd>
    </dl>
    <dl class="one third omega">
        <dt>
            Links
        </dt>
        <dd class="themiddle">
           <?php echo call_links(array('like' => $obj->id, 'tweet' => array('text' => $obj->name." by @egnwd", 'url' => curPageURL()), 'visit' => $obj->link), ' '); ?>
        </dd>
    </dl>
    <?php 
        foreach($obj->images as $src){
            echo "<img src=\"{$GLOBALS['base']}/assets/images/{$src}\" width=\"80%\" class=\"retina page\"/>";
        }
    ?>
</div>