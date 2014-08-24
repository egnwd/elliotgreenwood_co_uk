<?php

require 'flight/Flight.php';
require ('assets/php/functions.php');

$GLOBALS['base'] = Flight::request()->base;
$GLOBALS['base'] = rtrim($GLOBALS['base'],'/');

Flight::render('header', array(), 'header_content');
Flight::render('menu', array('note' => 0), 'menu');
Flight::render('footer', array('img' => 'work'), 'footer_content');

function hello(){
    Flight::render('hello', array(), 'body_content');
    Flight::render('footer-home', array(), 'footer_content');
    Flight::render('layout', array('title' => 'Home'));
}
function notes(){
    Flight::render('header', array('h1' => 'Notes'), 'header_content');
    Flight::render('posts', array(), 'body_content');
    Flight::render('footer', array('img' => 'notes'), 'footer_content');
    Flight::render('layout', array('title' => 'Notes', 'class' => 'notes'));
}
function note($note){

    if (!file_exists("views/posts/$note.md")){
        Flight::notFound();
        return false;
    }
    $obj = $GLOBALS['notes']->$note;
    if($obj->soon){
        Flight::notFound();
        return false;
    }
    Flight::render('header-notes', array('note' => $note), 'header_content');
    Flight::render('menu', array('note' => 1), 'menu');
    Flight::render('post', array('note' => $note), 'body_content');
    Flight::render('footer', array('img' => 'notes'), 'footer_content');
    Flight::render('layout', array('title' => ucFirst($note), 'class' => 'note', 'note' => $note));
}

function cv(){
    Flight::render('footer-resume', array(), 'footer_content');
    Flight::render('resume', array('title' => 'CV'));
}
function project_page($project){
    $obj = $GLOBALS['data']->work;
    if (!in_array($project, array_keys((array)$obj))){
        Flight::notFound();
        return false;
    }
    Flight::render('project', array('project' => $project, 'cat' => "work"), 'body_content');
    Flight::render('footer', array('img' => 'work'), 'footer_content');
    Flight::render('layout', array('title' => $project, 'class' => 'project', 'cat' => 'work', 'slug' => $project));
}
function store(){
    Flight::render('header', array('h1' => 'Store'), 'header_content');
    Flight::render('store', array(), 'body_content');
    Flight::render('footer', array('img' => 'store'), 'footer_content');
    Flight::render('layout', array('title' => 'Store', 'class' => 'store'));
}
function item($item){
    $obj = $GLOBALS['data']->store;
    if (!in_array('store/'.$item, array_keys((array)$obj))){
        Flight::notFound();
        return false;
    }
    Flight::render('item', array('item' => $item, 'cat' => "store"), 'body_content');
    Flight::render('footer', array('img' => 'store'), 'footer_content');
    Flight::render('layout', array('title' => $item, 'class' => 'item', 'cat' => 'store', 'slug' => 'store/'.$item, 'slider' => true));
}
Flight::map('notFound', function(){
    // Handle not found
    Flight::render('header', array('h1' => '404'), 'header_content');
    Flight::render('footer', array('img' => '404'), 'footer_content');
    Flight::render('errors/404', array('title' => 'Page not found', 'class' => 'fourohfour'));
});
function redirect_home(){
    Flight::redirect('/');
}
function redirect_cv(){
    Flight::redirect('/cv');
}
function redirect_store(){
    Flight::redirect('/store');
}
function redirect_notes(){
    Flight::redirect('/notes');
}
function redirect_note($note){
    Flight::redirect('/notes/'.$note);
}
//Work
Flight::route('/', 'hello');
Flight::route('/home', 'redirect_home');
Flight::route('/index', 'redirect_home');

//Notes
Flight::route('/notes', 'notes');
Flight::route('/blog', 'redirect_notes');

Flight::route('/notes/@note', 'note');
Flight::route('/blog/@note', 'redirect_note');


//Store
Flight::route('/store', 'store');
Flight::route('/shop', 'redirect_store');
Flight::route('/store/@item', 'item');

//CV
Flight::route('/cv', 'cv');
Flight::route('/resume', 'redirect_cv');
Flight::route('/curriculum-vitae', 'redirect_cv');

Flight::route('/@project', 'project_page');

Flight::start();
?>
