<header style="background-image: url('<?php echo($GLOBALS['base']."/assets/images/$note-header.jpg")?>')">
	<div class="container">
        <div class="header-bottom">
                <h1>
                    <?php
                        $obj = $GLOBALS['notes']->$note;
                         echo $obj->title;
                    ?>
                </h1>
                <hr>
                <time>
                    <?php echo $obj->date; ?>
                </time>
			<!-- <img class="logo svg" src="<?php echo $GLOBALS['base'] ?>/assets/images/e.svg" data-png-fallback="<?php echo $GLOBALS['base'] ?>/assets/images/e.png"/> -->
		</div>
	</div>
</header>
<!-- !Content -->
<div class="content">
	<div class="main container">