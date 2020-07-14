<?

class QueryBuilder {
    
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * *** backup
     * public function selectAll($table, $intoClass) {
     */
    public function selectAll($table) {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * 
     */
    public function insert($table, $parameters) {

        $sql =  sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Something went wrong: ' . $e->getMessage());
        }
        
        
    }

}