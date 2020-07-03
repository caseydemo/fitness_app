<?

require 'Exercise.php';
require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$exercises = $query->selectAll('exercises');

require 'index.view.php';
