<?


class Connection {
    public static function make($config) {
        try {
            // return new PDO('mysql:host=127.0.0.1;dbname=laracasts', 'root','');
            // echo '<pre>';
            // print_r($config);
            // die();

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'], 
                $config['username'], 
                $config['pw'],
                $config['options']
            );

        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}