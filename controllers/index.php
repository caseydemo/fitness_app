<?
$exercises = $app['database']->selectAll('exercises', 'Exercise');
require 'views/index.view.php';