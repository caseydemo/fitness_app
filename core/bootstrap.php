<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ERROR | E_PARSE);


$app = [];

$app['config'] = require 'config.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Request.php';
require 'core/Exercise.php';
require 'core/Router.php';
require 'core/functions.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));