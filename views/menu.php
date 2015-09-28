<nav>
    <ul>
        <li>
            <a href="<?php echo $GLOBALS['base'] ?>/" <?php echo (Flight::request()->url == "/" ? "class=\"active\"" : "") ?>>Work</a>
        </li>
        <li>
            <a href="<?php echo $GLOBALS['base'] ?>/notes" <?php echo (Flight::request()->url == "/notes" ? "class=\"active\"" : "") ?>>Notes</a>
        </li>
    </ul>
</nav>
