<?
class Request {
    
    /**
     * 
     */
    public static function uri() {
        $raw = $_SERVER['REQUEST_URI'];
        $project_root = '/fitness_app/';
        $base_url = str_replace($project_root, "", $raw);
        return parse_url($base_url, PHP_URL_PATH);
    }
    

    /**
     * 
     */
    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}