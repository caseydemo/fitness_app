<?

/**
 * 
 */
function getUri() {
    $raw = $_SERVER['REQUEST_URI'];
    $project_root = '/fitness_app/';
    return str_replace($project_root, "", $raw);
}

/**
 * 
 */
function dd($raw) {
    echo '<pre>';
    var_dump($raw);
    echo '</pre>';
    die();
}