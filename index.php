<?

$query = require 'bootstrap.php';
require 'Exercise.php';
require 'functions.php';

$exercises = $query->selectAll('exercises', 'Exercise');


require 'index.view.php';
