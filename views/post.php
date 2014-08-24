<?php

spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

use \Markdown\MarkdownExtra;
# Read file and pass content through the Markdown parser
if (file_exists("views/posts/$note.md")){
    $text = file_get_contents("views/posts/$note.md");
    $html = MarkdownExtra::defaultTransform($text);
    echo "<div id=\"post-$note\" class=\"post-html\">".$html."</div>";    
} else {
   Flight::notFound();
}
?>