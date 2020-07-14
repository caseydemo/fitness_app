<?
class App {

    
    protected static $registry = [];

    /**
     * 
     */
    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    /**
     * 
     */
    public static function get($key) {
        if(!array_key_exists($key, static::$registry)) {
            echo '<pre>';
            throw new Exception('No {$key} is bound in the container');
        }
        else {
            return static::$registry[$key];
        }
        
    }

}