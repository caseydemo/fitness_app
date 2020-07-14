<?
// $exercises = $app['database']->selectAll('exercises', 'Exercise');
$users = App::get('database')->selectAll('users');

require 'views/index.view.php';