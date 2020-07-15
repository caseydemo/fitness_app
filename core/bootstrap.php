<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR | E_ALL);

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

/**
 * 
 */
function view($name, $data = []) {
    extract($data);
    return require "views/{$name}.view.php";
}

/**
 * 
 */
function redirect($path) {
    header("Location: /fitness_app/{$path}");
}