<?
$exercises = $query->selectAll('exercises', 'Exercise');
require 'views/index.view.php';